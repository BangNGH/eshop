<?php

namespace App\Http\Service;


class UploadService{
    public function store($request){
        try {
            if($request->hasFile("file")){
                $name = $request->file("file")->getClientOriginalName();
                $path = "uploads".date('Y/m/d');
               $request->file("file")->storeAs("public/".$path, $name);
               return '/storage/'.$path."/".$name;
            }
        } catch (\Exception $er) {
            return $er->getMessage();
        }
       
    }

}