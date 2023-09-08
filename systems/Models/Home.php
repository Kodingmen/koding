<?php

class Home{
    public function handle($request, $next ){

        $newsHome = \Illuminate\Support\Facades\Cache::remember('home.news', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_news")
                ->select([
                    "id", "slugvi", "namevi", "descvi", "contentvi", "type", "photo"
                ])
                ->whereIn('type', [
                    'khoa-hoc', 'kien-thuc', 'kinh-nghiem', 'tin-tuc', 'su-nghiep'
                ])
                ->whereRaw("FIND_IN_SET('hienthi',status) and FIND_IN_SET('noibat',status)")
                ->orderByDesc("id")
                ->get();
        });

            $staticGioithieu =  \Illuminate\Support\Facades\DB::table("table_static")
                ->select([
                    "id", "slugvi", "namevi", "descvi", "contentvi", "type", "photo"
                ])
                ->where('type', '=', 'gioi-thieu')
                ->first();


        $seoPage = \Illuminate\Support\Facades\Cache::remember('seo.Page.setting', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_seo")
                ->where("id_parent", "=", 0)
                ->where("com", "=", "setting")
                ->where("act", "=", "update")
                ->where("type", "=", "setting")
                ->first();
        });

        $setting = $request['setting'];

        $optsetting = $request['optsetting'];

        $logo = $request['logo'];

        $imgJson = (!empty($logo->options)) ? json_decode($logo->options, true) : null;

        if (empty($imgJson) || ($imgJson['p'] != $logo->photo)) {
            $imgJson = func()->getImgSize($logo->photo, UPLOAD_PHOTO_L . $logo->photo);
            \Illuminate\Support\Facades\DB::table("table_photo")->where('id', '=', $logo->id)->update(
                ['options' => $imgJson]
            );
        }
        $seo = collect([
            'email' => $optsetting->get("email"),
            'keywords' => $seoPage->keywordsvi,
            'description' => $seoPage->descriptionvi,
            'title' => $seoPage->titlevi,
            'url' => func()->getPageURL(),
            'photo' => asset("thumbs/". $imgJson['w'] . "x". $imgJson['h'] . "x1/upload/photo/". $logo->photo),
            'photo:type' =>$imgJson['m'],
            'photo:width' => $imgJson['w'],
            'photo:height' => $imgJson['h']
        ]);

        $request['staticGioiThieu'] = $staticGioithieu;

        $request['khoahoc'] = $newsHome->where("type", "=", "khoa-hoc");

        $request['kienthuc'] = $newsHome->where("type", "=", "kien-thuc");

        $request['sunghiep'] = $newsHome->where("type", "=", "su-nghiep");

        $request['lastestNews'] = $newsHome->take(15);

        $request['seo'] = $seo;

        return $next($request);
    }
}