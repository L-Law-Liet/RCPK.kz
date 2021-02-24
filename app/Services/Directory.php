<?php


namespace App\Services;


use Illuminate\Support\Facades\File;

class Directory
{
    public static function create($path){
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }
    }
}
