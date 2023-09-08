<?php
use Illuminate\Cache\CacheManager;

class Cache
{
    protected CacheManager $manager;

    function __construct($d = null)
    {
        $this->manager = new CacheManager(Application::getInstance());
    }

    private function store($key, $data, $ttl)
    {
        return $this->manager->set($key, $data, $ttl);
    }

    private function read($key)
    {
        return $this->manager->get($key);
    }

    private function exist($key)
    {
        return $this->manager->has($key);
    }

    public function get($sql, $params = array(), $type = 'fetch', $time = 600)
    {
        /* Create sql key */
        $paramsString = (!empty($params)) ? implode(",", $params) : '';
        $key = $sql . $paramsString;

        /* Check or Get sql data */
        if (!$data = $this->exist($key)) {
            $data = \Illuminate\Support\Facades\DB::select(str_replace("#_", "table_", $sql), $params, false);
        }
        return json_decode(json_encode($data), true);;
    }

    public function delete()
    {
        return $this->manager->flush();
    }
}
