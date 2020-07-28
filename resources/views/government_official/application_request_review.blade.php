@extends('government_official.layouts.main')

@section('title','Application Request Review')

@section('page-content')
    <style>
        {{--    TODO: need to be removed    --}}
        .hidden-input{
            visibility: hidden;
        }
        .wizard>.steps>ul>li {
            width: 25%;
        }
    </style>

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Request License</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Request new License or Renew License</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Application Request Review</h4>
                        <p class="card-title-desc">Review new  or Renew License Application Request</p>

                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" method="post" action="{{ route('gvt.applications.review',['id'=>$application->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <h3>Applicant Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Application Type:  <b>{{ $application->applicantDetail->first_name." ".$application->applicantDetail->last_name }}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Application Type:  <b>{{ $application->application_type }}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Gender:  <b>{{ $application->applicantDetail->gender}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Date Of Birth:  <b>{{ $application->applicantDetail->dob }}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Applicant Email:  <b>{{ $application->applicantDetail->email}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Applicant PhoneNumber:  <b>{{ $application->applicantDetail->phone }}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Nationality:  <b>{{ $application->applicantDetail->nationality}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>District:  <b>{{ $application->applicantDetail->district->name }}</b></p>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Business Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Entity Type:  <b>{{ $application->entityType->name}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Business Type:  <b>{{ $application->businessType->name }}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Business Name:  <b>{{ $application->businessDetail->name}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Business District:  <b>{{ $application->businessDetail->district->name }}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Business Email:  <b>{{ $application->businessDetail->email}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Business PhoneNumber:  <b>{{ $application->businessDetail->phone }}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Address Status:  <b>{{ $application->businessDetail->address_status}}</b></p>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </fieldset>
                            <h3>Document</h3>
                            <fieldset>
                                <div class="row">
                                   @foreach($application->document as $document)
                                        <div class="col-md-6">
                                            <p>{{ $document->documentType->name }}:  <a href="/file/view/{{$document->file}}" target="_blank">view</a></p>
                                        </div>
                                   @endforeach
                            </fieldset>
                            <h3> Confirm Detail</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-lg-6" >
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="approve" id="approve" value="approve" required>
                                                    <label class="form-check-label" for="approve">
                                                        Approve
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="approve" id="reject" value="reject" >
                                                    <label class="form-check-label" for="reject">
                                                        Reject
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="p-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="customCheck1" id="customCheck" required>
                                                    <label class="custom-control-label" for="customCheck">I/We declare that the particulars given above are correct and complete to best of my/ our knowledge</label>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <strong>Date of application: {{ Carbon\Carbon::now()->format('d M Y') }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden-input" id="comment-div">
                                        <p><b>Comment*</b></p>
                                        <textarea id="comment" name="comment" class="form-control" rows="5" placeholder="Comment." required></textarea>
                                    </div>
                                </div>

                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection

@section('page-js')
    <!-- form wizard -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="{{asset('libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{asset('js/pages/form-wizard.init.js')}}"></script>
    <script type="application/javascript">
        {{--    TODO: need to be removed    --}}
        $(document).ready(function () {
            $("#comment").hide();
            $("#approve").click(function () {
                hideShowLicenseNumber();
            });
            $("#reject").click(function () {
                hideShowLicenseNumber();
            });
            function hideShowLicenseNumber() {
                if($("#approve").is(":checked")){
                    $("#comment-div").addClass('hidden-input');
                    $("#comment").hide();
                }
                if($("#reject").is(":checked")){
                    $("#comment-div").removeClass('hidden-input');
                    $("#comment").show();
                }
            }
            // var form = $("#form-horizontal");
            // form.steps({
            //     headerTag:"h3",
            //     bodyTag:"fieldset",
            //     transitionEffect: "slideLeft",
            //     stepsOrientation: "vertical"
            // });
        })
    </script>
@endsection
