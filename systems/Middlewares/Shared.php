<?php

class Shared{
    public function handle($request, $next ){

        $setting = \Illuminate\Support\Facades\Cache::remember('setting', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_setting")
                ->first();
        });

        $optsetting = (!empty($setting->options)) ? json_decode($setting->options, true) : null;

        $photos = \Illuminate\Support\Facades\Cache::remember('home.photos', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_photo")
                ->select([
                    "id", "photo", "type", "options"
                ])
                ->whereIn('type', [
                    'favicon', 'logo', 'banner', 'social','slide'
                ])
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->get();
        });

        $newsList = \Illuminate\Support\Facades\Cache::remember('homeNewsList', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_news_list")
                ->select([
                    "id", "type", "slugvi", "namevi"
                ])
                ->whereIn('type', [
                    'kien-thuc', 'khoa-hoc', 'video'
                ])
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->get();
        });

        $videoLido = \Illuminate\Support\Facades\Cache::remember('home.video.lido', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_photo")
                ->select([
                    "id", "photo", "type", "options","link_video"
                ])
                ->where("type", "=", "li-do")
                ->first();
        });

        $request['videoLido'] = $videoLido;


        $request['setting'] = $setting;
        $request['optsetting'] = collect($optsetting);
        $request['logo'] = $photos->where("type", "=", "logo")->first();

        shareVariable('setting', $request['setting']);
        shareVariable('optsetting', $request['optsetting']);

        shareVariable('videoLido', $request['videoLido']);
        
        shareVariable('logo', $request['logo']);
        shareVariable('favicon', $photos->where("type", "=", "favicon")->first());
        shareVariable('banner', $photos->where("type", "=", "banner")->first());
        shareVariable('social', $photos->where("type", "=", "social"));
        shareVariable('slides', $photos->where("type", "=", "slide"));

        shareVariable('kienthucList', $newsList->where("type", "=", "kien-thuc") ?? []);
        shareVariable('khoahocList', $newsList->where("type", "=", "khoa-hoc") ?? []);
        shareVariable('videoList', $newsList->where("type", "=", "video") ?? []);

        return $next($request);
    }
}