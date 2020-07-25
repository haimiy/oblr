<?php


namespace App\Helper;



use Faker\Provider\File;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\Object_;

class Helper
{
    public static function generateFilename($document_type_name,$document_extension){
        return mb_strtolower($document_type_name."_".request()->user()->first_name.'_'.request()->user()->last_name.'_'.request()->user()->id.'_'.time().'.'.$document_extension);
    }

    public static function uploadDocument($file_name, $file_tmp){

        if ($file_tmp->move(public_path('images/upload/document',$file_name))){
            return $file_tmp->get;
        }
        else{
            return "fail";
        }

    }
}
