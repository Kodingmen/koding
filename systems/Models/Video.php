<?php

class Video{
    public function handle($request, $next ){

        $videoLido = \Illuminate\Support\Facades\Cache::remember('home.video.index', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_photo")
                ->select([
                    "id", "photo", "type", "options","link_video", "namevi"
                ])
                ->where("type", "=", "video")
                ->paginate(15);
        });
        $request['items'] = $videoLido;
        return $next($request);
    }
}