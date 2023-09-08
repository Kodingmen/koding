<?php

class News{

    protected \Illuminate\Support\Collection $seo;

    public function handle($request, $next){
        $this->seo = collect([]);
        if(isset($_GET['id'])){
           $request =  $next($this->handleDetailNews($request));
        }

        if(isset($_GET['idl'])){
            $request = $next($this->handleNewsList($request));
        }

        $request =  $next($this->handleNews($request));

        $request['seo'] = $this->seo;

        return $next($request);
    }
    private function handleNews($request){
        $seopage = \Illuminate\Support\Facades\DB::table("table_seopage")
            ->where("type", "=", $request['com'])->first();

        $this->seo->put('h1', $request['titleMain']);
        if(!empty($seopage->titlevi))  $this->seo->put('title', $seopage->titlevi);
        else $this->seo->put('title', $request['titleMain']);

        if(!empty($seopage->keywordsvi))  $this->seo->put('keywords', $seopage->keywordsvi);
        if(!empty($seopage->descriptionvi))  $this->seo->put('description', $seopage->descriptionvi);

        $imgJson = (!empty($seopage->options)) ? json_decode($seopage->options, true) : null;

        if (!empty($seopage->photo)) {
            if (empty($imgJson) || ($imgJson['p'] != $seopage->photo)) {
                $imgJson = func()->getImgSize($seopage->photo, UPLOAD_SEOPAGE_L . $seopage->photo);

                \Illuminate\Support\Facades\DB::table("table_seopage")->where('id', '=', $seopage->id)->update(
                    ['options' => $imgJson]
                );
            }
            if (!empty($imgJson)) {
                $this->seo->put("photo", asset("thumbs/". $imgJson['w'] . "x". $imgJson['h'] . "x1/upload/seopage/". $seopage->photo));
                $this->seo->put('photo:width', $imgJson['w']);
                $this->seo->put('photo:height', $imgJson['h']);
                $this->seo->put('photo:type', $imgJson['m']);
            }
        }

        $newsItems = \Illuminate\Support\Facades\Cache::remember('news.item.'.$request['com'], 120, function () use ($request){
            return \Illuminate\Support\Facades\DB::table("table_news")
                ->select([
                    "id", "slugvi", "namevi", "descvi", "contentvi", "type", "photo", "link_video"
                ])
                ->where("type", "=", $request['com'])
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->paginate(20);
        });

        $request['items'] = $newsItems;

        return $request;
    }
    private function handleDetailNews($request){
        $rowDetail = \Illuminate\Support\Facades\Cache::remember('news.item.'.$request['id'], 120, function () use ($request){
            return \Illuminate\Support\Facades\DB::table("table_news")
                ->select([
                    "id", "slugvi", "namevi", "descvi", "contentvi", "type", "photo"
                ])
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->find($request['id']);
        });


        $otherNewsItemS = \Illuminate\Support\Facades\Cache::remember('news.otherNewsItemS.'.$request['id'], 120, function () use ($rowDetail){
            return \Illuminate\Support\Facades\DB::table("table_news")
                ->select([
                    "id", "slugvi", "namevi", "descvi", "contentvi", "type", "photo"
                ])
                ->where("type", "=", $rowDetail->type)
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->paginate(20);
        });


        $seoPage = \Illuminate\Support\Facades\Cache::remember('seo.Page.setting', 120, function () use ($rowDetail){
            return \Illuminate\Support\Facades\DB::table("table_seo")
                ->where("id_parent", "=", $rowDetail->id)
                ->where("com", "=", "news")
                ->where("act", "=", "man")
                ->where("type", "=", $rowDetail->type)
                ->first();
        });

        $this->seo->put('h1', $rowDetail->namevi ?? $request['titleMain']);

        if(!empty($seopage->titlevi))  $this->seo->put('title', $seopage->titlevi);
        else $this->seo->put('title', $rowDetail->namevi);

        if(!empty($seopage->keywordsvi))  $this->seo->put('keywords', $seopage->keywordsvi);
        if(!empty($seopage->descriptionvi))  $this->seo->put('description', $seopage->descriptionvi);

        $imgJson = (!empty($rowDetail->options)) ? json_decode($rowDetail->options, true) : null;

        if (empty($imgJson) || ($imgJson['p'] != $seopage->photo)) {
            $imgJson = func()->getImgSize($rowDetail->photo, "upload/news/" . $rowDetail->photo);
            \Illuminate\Support\Facades\DB::table("table_news")->where('id', '=', $rowDetail->id)->update(
                ['options' => $imgJson]
            );
        }

        if (!empty($imgJson)) {
            $this->seo->put("photo", asset("thumbs/". $imgJson['w'] . "x". $imgJson['h'] . "x1/upload/news/". $rowDetail->photo));
            $this->seo->put('photo:width', $imgJson['w']);
            $this->seo->put('photo:height', $imgJson['h']);
            $this->seo->put('photo:type', $imgJson['m']);
        }

        $request['item'] = $rowDetail;
        $request['otherItems'] = $otherNewsItemS;

        return $request;
    }

    private function handleNewsList($request){
        $newsItems = \Illuminate\Support\Facades\Cache::remember('news.item.'.$request['com'], 120, function () use ($request){
            return \Illuminate\Support\Facades\DB::table("table_news")
                ->select([
                    "id", "slugvi", "namevi", "descvi", "contentvi", "type", "photo"
                ])
                ->where("type", "=", $request['com'])
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->paginate(20);
        });

        $request['items'] = $newsItems;

        return $request;
    }
}