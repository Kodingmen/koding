<?php
use \Illuminate\Support\Facades\DB;
class About{
    public function handle($request, $next ){

        $staticAbout= \Illuminate\Support\Facades\Cache::remember('static.about.index', 120, function () use ($request){
            return DB::table("table_static")
                ->select([
                    "id", "contentvi", "type", "photo", "namevi"
                ])
                ->where("type", "=", "gioi-thieu")
                ->first();
        });
        $request['item'] = $staticAbout;

        return $next($request);
    }

}