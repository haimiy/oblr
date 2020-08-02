<!doctype html>
<html lang="en">
<?php
$path = 'images/document/coat.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
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
            background-color: #dff6f0;
        }
        .border-blue{
            padding: 0;
            border-radius: 2px;
            border-right: solid 5px #1a3fd5 ;
            border-bottom: solid 5px #1a3fd5;
            border-left: solid 5px #1EB53A;
            border-top: solid 5px #1EB53A;
            background-image: url({{ $base64 }});
            background-repeat: no-repeat;
            background-position: center;

        }
        .border-yellow{
            padding: 0;
            border: #FCD116 5px solid;
        }
        .border-black{
            padding: 0;
            border: #000000 solid 5px;
        }
        .border-green{
            padding: 20px;
            min-height: 800px;
            border-right: solid 5px #1EB53A ;
            border-bottom: solid 5px #1EB53A;
            border-left: solid 5px #1a3fd5;
            border-top: solid 5px #1a3fd5;
        }
        h3,h5{
            color: #0a121c;
            font-weight: bold;
        }
        li{
            color: #0a121c;
        }
    </style>

</head>
<?php
$path = 'images/document/coat_of_arms.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<body data-layout="detached" data-topbar="colored">
<div class="container-fluid">
    <div class="col-md-12 border-blue" >
        <div class="col-md-12 border-yellow" >
            <div class="col-md-12 border-black" >
                <div class="col-md-12 border-yellow" >
                    <div class="col-md-12 border-green" >
                        <div class="col-md-12"  >
                            <center><img src="{{ $base64 }}" class="img-fluid" style="height: 100px;  position: center; "></center>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px;">
                            <center><h3>THE UNITED REPUBLIC OF TANZANIA</h3></center>
                        </div>
                        <div class="col-md-12" style="">
                            <center><h3>BUSINESS LICENSE</h3></center>
                        </div>
                        <div class="col-md-12" style="">
                            <center><h5>B.L. No:  {{ $license[0]->license_number }}</h5></center>
                        </div>
                        <div class="col-md-12"  style="">
                            <center><me><i style="font-style: italic;color: #0a121c;font-weight: lighter;">The Business Licensing Act No. 25 of 1972(R.E 2002)</i></me></center>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px">
                            <ol>
                                <li>Issuing Office: <b>BUSINESS REGISTRATION AND LICENSING AGENCY</b></li>
                                <li>Issuing Agency: <b>{{ $license[0]->issuing_agency }}</b></li>
                                <li>License Issued To: <b>{{ $license[0]->first_name." ".$license[0]->last_name }}</b></li>
                                <p style="color: #0a121c">for</p>
                                <li>Business Details: <br>
                                    <div class="row" style="margin-top: 5px;margin-left: 20px;"><div class="col-md-1" >Business Name: <b>{{ $license[0]->business_name }}</b></div></div>
                                    <div class="row" style="margin-left: 20px;"><div class="col-md-1" >OwnerShip Type: <b>{{ $license[0]->entity_type_name }}</b></div></div>
                                    <div class="row" style="margin-left: 20px;"><div class="col-md-1" >Business Type: <b>{{ $license[0]->business_type_name }}</b></div></div>
                                    <div class="row" style="margin-left: 20px;"><div class="col-md-1" >Region: <b>{{ $license[0]->region_name }}</b></div></div>
                                    <div class="row" style="margin-left: 20px;"><div class="col-md-1" >District: <b>{{ $license[0]->district_name }}</b></div></div>
                                </li>
                                    <div class="row" style="color: #0a121c;margin-top: 10px;">
                                        <div class="col-md-6">
                                            Date of Issue: <b style="margin-right: 100px">{{ $license[0]->date_of_issue }}</b>


                                            Expiring Date: <b>{{ $license[0]->expiry_date }}</b>
                                        </div>
                                    </div>
                            </ol>
                        </div>
                        <div class="row">
                        <div class="col-md-12" style="margin-right: 10px">

                                <?php
                                $path = 'images/document/qrcode.png';
                                $type = pathinfo($path, PATHINFO_EXTENSION);
                                $data = file_get_contents($path);
                                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                                ?>
                                <center>
                                    <div class="float-right">
                                        <img src="{{ $base64 }}" class="img-fluid" style="height: 100px; margin-left: 500px;">
                                    </div>
                                </center>
                        </div>
                            <?php
                            $path = 'images/document/signature.png';
                            $type = pathinfo($path, PATHINFO_EXTENSION);
                            $data = file_get_contents($path);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                            ?>
                        </div>
                        <center>
                            <div class="col-md-12" style="margin-left: 370px; margin-top: 20px;">
                                <div class="float-right" style="margin-top: 10px; color: #0a121c;">
                                    Signed
                                    <img src="{{ $base64 }}" class="img-fluid" style="width: 80px; margin-right: 30px;margin-left: 40px;border-bottom: #0a121c solid 1px; " >
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-left: 350px;">
                                <div class="float-right" style="margin-top: 10px; color: #0a121c;font-size: 8pt;">
                                    <b> Business Registration And Licensing Agency</b>
                                </div>
                            </div>
                        </center>
                        <center>
                            <p style="margin-top: 25px;">
                                NOTE:- This license must be kept in a conspicuous position at place of business. Any change in the particulars originally registered must be notifies to the License Issuer
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JAVASCRIPT -->
<script src="/libs/jquery/jquery.min.js"></script>
<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
