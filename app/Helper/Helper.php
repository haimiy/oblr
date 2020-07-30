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
    public static function  licenseUI(){
        return '
        <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>License</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Login to OBLR System" name="description" />
    <meta content="Group 4" name="author" />

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        body{
            padding: 10px;
        }
        .border-blue{
            padding: 0;
            border-radius: 2px;
            border-right: solid 5px #1a3fd5 ;
            border-bottom: solid 5px #1a3fd5;
            border-left: solid 5px #43d51a;
            border-top: solid 5px #43d51a;
        }
        .border-yellow{
            padding: 0;
            border: #e0a800 5px solid;
        }
        .border-black{
            padding: 0;
            border: #0a121c solid 5px;
        }
        .border-green{
            padding: 20px;
            min-height: 800px;
            border-right: solid 5px #43d51a ;
            border-bottom: solid 5px #43d51a;
            border-left: solid 5px #1a3fd5;
            border-top: solid 5px #1a3fd5;
        }
        h3{
            color: #0a121c;
            font-weight: bold;
        }
        li{
            color: #0a121c;
        }
    </style>

</head>

<body data-layout="detached" data-topbar="colored">
<div class="container">
    <div class="col-md-12 border-blue" >
        <div class="col-md-12 border-yellow" >
            <div class="col-md-12 border-black" >
                <div class="col-md-12 border-yellow" >
                    <div class="col-md-12 border-green" >
                        <div class="col-md-12"  >
                            <center><img src="../../bg-effect.png" class="img-fluid" style="height: 100px;  position: center; "></center>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px;">
                            <center><h3>THE UNITED REPUBLIC OF TANZANIA</h3></center>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px;">
                            <center><h3>BUSINESS LICENCE</h3></center>
                        </div>
                        <div class="col-md-12"  style="margin-top: 20px;">
                            <center><me><i style="font-style: italic;color: #0a121c;font-weight: lighter;">The Business Licensing Act No. 25 of 1972(R.E 2002)</i></me></center>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px">
                            <ol>
                                <li>Issuing Office: <b>BUSINESS REGISTRATION AND LICENSING AGENCY</b></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JAVASCRIPT -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/js/app.js\'"></script>

</body>

</html>

        ';
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
