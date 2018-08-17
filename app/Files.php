<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Files extends Model
{
    public static function upload($file){
        $extension = File::extension($file->getClientOriginalName());
        $path = md5(date("Y-n"));
        $address= md5(time()).uniqid().'.'.$extension;
        $file->move(public_path() . '/uploads/'.$path,$address);
        return $path.'/'.$address;
    }
}
