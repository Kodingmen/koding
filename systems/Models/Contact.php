<?php
use \Illuminate\Support\Facades\DB;
class Contact{
    public function handle($request, $next ){

        if(!empty($_POST)){
            $request = $this->doPost($request);
        }

        $contactInfo = \Illuminate\Support\Facades\Cache::remember('static.contact.info', 120, function () use ($request){
            return DB::table("table_static")
                ->select([
                    "id", "contentvi", "type", "photo"
                ])
                ->where("type", "=", "lienhe")
                ->whereRaw("FIND_IN_SET('hienthi',status)")
                ->first();
        });
        $request['contact_info'] = $contactInfo;

        return $next($request);
    }

    private function doPost($request){
        if($request['submit-contact']){
            $validator = \Illuminate\Support\Facades\Validator::make($request['dataContact'], [
                'email' => 'email|required',
                'phone' => 'required'
            ]);
            $result = DB::table("table_contact")->insert($request['dataContact']);
        }

        return $request;
    }
}