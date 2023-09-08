<?php
require_once "vendor/autoload.php";
require_once "helpers.php";

class AutoLoad
{
    protected $container;

    public function __construct()
    {
        spl_autoload_register(array($this, '_autoload'));

        $this->container = Application::getInstance();
        $this->container->instance(\Illuminate\Contracts\Container\Container::class, $this->container);
        $this->bindPath();

        $this->container['files'] = new \Illuminate\Filesystem\Filesystem();
        $this->container['events'] = new \Illuminate\Events\Dispatcher();

        $this->container['config'] = new \Illuminate\Config\Repository(include "init.php");

        $this->registerViewService();
        $this->useEloquent();
        $this->useCache();
        $translatorService = $this->useTranslator();
        $translatorService->register();
        (new \Illuminate\Pagination\PaginationServiceProvider($this->container))->register();

        \Illuminate\Pagination\Paginator::viewFactoryResolver(function () {
            return $this->container->get("view");
        });

        // Set up a current path resolver so the paginator can generate proper links
        \Illuminate\Pagination\Paginator::currentPathResolver(function () {
            return isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';
        });

        // Set up a current page resolver
        \Illuminate\Pagination\Paginator::currentPageResolver(function ($pageName = 'page') {
            $page = isset($_REQUEST[$pageName]) ? $_REQUEST[$pageName] : 1;
            return $page;
        });

        (new \Illuminate\Hashing\HashServiceProvider($this->container))->register();


        (new \Illuminate\Pagination\PaginationServiceProvider($this->container))->boot();
        \Illuminate\Pagination\Paginator::useBootstrapFive();

        (new \Illuminate\Validation\ValidationServiceProvider($this->container))->register();


        $this->setRootFacade($this->container);
    }

    private function _autoload($file)
    {
        $file = LIBRARIES . "class/class." . str_replace("\\", "/", trim($file, '\\')) . '.php';
        if (file_exists($file)) require_once $file;
    }

    private function useTranslator(){
        return new \Illuminate\Translation\TranslationServiceProvider($this->container);
    }

    private function bindPath(){
        $this->container['path.lang'] = __DIR__ . "/lang";
    }

    private function registerViewService(){
        (new \Illuminate\View\ViewServiceProvider($this->container))->register();
        $this->register(Illuminate\Contracts\View\Factory::class, $this->container->get("view"));
    }
    private function register($abstract, $intance){
        $this->container->instance($abstract, $intance);
    }

    private function setRootFacade($app){
        \Illuminate\Support\Facades\Facade::setFacadeApplication($app);
    }

    private function useEloquent(){
        $capsule = new Illuminate\Database\Capsule\Manager($this->container);
        $capsule->addConnection($this->container['config']['database']);
        $capsule->bootEloquent();
        $capsule->setAsGlobal();

        $this->container->instance("db", $capsule->getDatabaseManager());
    }

    private function useCache(){
        (new \Illuminate\Cache\CacheServiceProvider($this->container))->register();
    }


    public function instance($abstract, $intance){
        $this->register($abstract, $intance);
    }
}

