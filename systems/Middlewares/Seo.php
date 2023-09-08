<?php

class Seo{
    public function handle($request, $next ){
        $seoPage = \Illuminate\Support\Facades\Cache::remember('seo.Page.setting', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_seo")
                ->where("id_parent", "=", 0)
                ->where("com", "=", "setting")
                ->where("act", "=", "update")
                ->where("type", "=", "setting")
                ->first();
        });

        $seo = collect([
            'email' => 'vohoangtu0409@gmail.com',
            'keywords' => 'vohoangtu0409',
            'description' => 'vohoangtu0409',
            'title' => 'vohoangtu0409',
            'url' => func()->getPageURL(),
            'photo' => 'vohoangtu0409',
            'photo:type' => 'vohoangtu0409',
            'photo:width' => 'vohoangtu0409',
            'photo:height' => 'vohoangtu0409'
        ]);
        shareVariable('seo', $seo);
        return $next($request);
    }
}