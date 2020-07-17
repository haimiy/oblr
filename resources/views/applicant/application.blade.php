@extends('applicant.layouts.applicant_main')

@section('title','Request new License or Renew License')
@section('page-content')
    <style>
{{--    TODO: need to be removed    --}}
        .hidden-input{
            visibility: hidden;
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
                        <h4 class="card-title">Request License</h4>
                        <p class="card-title-desc">Request new License or Renew License</p>

                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                            <h3>Application Types</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="application_type" class="col-lg-3 col-form-label">Application Type</label>
                                            <div class="col-lg-4">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="application_type" id="new" value="new" checked="">
                                                    <label class="form-check-label" for="new">
                                                        New
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="application_type" id="renewal" value="renewal" >
                                                    <label class="form-check-label" for="renewal">
                                                        Renewal
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row hidden-input" id="license_number_div" >
                                            <label for="license_number" class="col-lg-3 col-form-label">Licenses No.</label>
                                            <div class="col-lg-9">
                                                <input id="license_number" name="license_number" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="entity_type" class="col-lg-3 col-form-label">Entity Type</label>
                                            <div class="col-lg-9">
                                                <select id="entity_type" name="entity_type" class="form-control">
                                                    <option value="">--Please Select Entity type--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="sector_id" class="col-lg-3 col-form-label">Sector</label>
                                            <div class="col-lg-9">
                                                <select id="sector_id" name="sector_id" class="form-control">
                                                    <option value="">--Please Select Sector--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="category_id" class="col-lg-3 col-form-label">Category</label>
                                            <div class="col-lg-9">
                                                <select id="category_id" name="category_id" class="form-control">
                                                    <option value="">--Please Select Category--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="business_type_id" class="col-lg-3 col-form-label">Business Type</label>
                                            <div class="col-lg-9">
                                                <select id="business_type_id" name="business_type_id" class="form-control">
                                                    <option value="">--Please Select Business Type--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <h3>Applicant Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="first_name" class="col-lg-3 col-form-label">First Name</label>
                                            <div class="col-lg-9">
                                                <input id="first_name" name="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="last_name" class="col-lg-3 col-form-label">Last Name</label>
                                            <div class="col-lg-4">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked="">
                                                    <label class="form-check-label" for="male">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" >
                                                    <label class="form-check-label" for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="dob" class="col-lg-3 col-form-label">Date of Birth</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="date" value="2019-08-19" name="dob" id="dob">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="nationality" class="col-lg-3 col-form-label">Nationality</label>
                                            <div class="col-lg-4">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="nationality" id="male" value="citizen" checked="">
                                                    <label class="form-check-label" for="citizen">
                                                        Citizen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="nationality" id="foreign" value="female" >
                                                    <label class="form-check-label" for="foreign">
                                                        Foreign
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="applicant_email" class="col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9">
                                                <input id="applicant_email" name="applicant_email" type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="applicant_phone" class="col-lg-3 col-form-label">Phone Number</label>
                                            <div class="col-lg-9">
                                                <input id="applicant_phone" name="applicant_phone" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="applicant_region" class="col-lg-3 col-form-label">Region</label>
                                            <div class="col-lg-9">
                                                <select id="applicant_region" name="applicant_region_id" class="form-control">
                                                    <option value="">--Please Select Region--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="applicant_district" class="col-lg-3 col-form-label">District</label>
                                            <div class="col-lg-9">
                                                <select id="applicant_district" name="applicant_district_id" class="form-control">
                                                    <option value="">--Please Select District--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Business Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="business_name" class="col-lg-3 col-form-label">Business Name</label>
                                            <div class="col-lg-9">
                                                <input id="business_name" name="business_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="business_email" class="col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9">
                                                <input id="business_email" name="business_email" type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="business_phone" class="col-lg-3 col-form-label">Phone Number</label>
                                            <div class="col-lg-9">
                                                <input id="business_phone" name="business_phone" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="business_region" class="col-lg-3 col-form-label">Region</label>
                                            <div class="col-lg-9">
                                                <select id="business_region" name="business_region_id" class="form-control">
                                                    <option value="">--Please Select District--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="business_district" class="col-lg-3 col-form-label">District</label>
                                            <div class="col-lg-9">
                                                <select id="business_district" name="business_district_id" class="form-control">
                                                    <option value="">--Please Select District--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="address_status" class="col-lg-3 col-form-label">Address Status</label>
                                            <div class="col-lg-4">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="address_status" id="surveyed" value="surveyed" checked="">
                                                    <label class="form-check-label" for="surveyed">
                                                        Surveyed
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="address_status" id="un-surveyed" value="un-surveyed" >
                                                    <label class="form-check-label" for="un-surveyed">
                                                        Un-surveyed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Document</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="proof_doc" class="col-lg-3 col-form-label">Proof of Tanzanian Citizenship/Residence Class Permit</label>
                                            <div class="col-lg-9">
                                                <div class="custom-file">
                                                    <input type="file" name="proof_doc" class="custom-file-input" id="proof_doc">
                                                    <label class="custom-file-label float-left" for="proof_doc">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="memorandum_doc" class="col-lg-3 col-form-label">Memorandum and Articles of Association</label>
                                            <div class="col-lg-9">
                                                <div class="custom-file">
                                                    <input type="file" name="memorandum_doc" class="custom-file-input" id="memorandum_doc">
                                                    <label class="custom-file-label float-left" for="memorandum_doc">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="tin_doc" class="col-lg-3 col-form-label">Tax Identification No</label>
                                            <div class="col-lg-9">
                                                <div class="custom-file">
                                                    <input type="file" name="tin_doc" class="custom-file-input" id="tin_doc">
                                                    <label class="custom-file-label float-left" for="tin_doc">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="permit_doc" class="col-lg-3 col-form-label">Permit</label>
                                            <div class="col-lg-9">
                                                <div class="custom-file">
                                                    <input type="file" name="permit_doc" class="custom-file-input" id="permit_doc">
                                                    <label class="custom-file-label float-left" for="permit_doc">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h3> Confirm Detail</h3>
                            <fieldset>
                                <div class="p-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I/We declare that the particulars given above are correct and complete to best of my/ our knowledge</label>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <strong>Date of application: {{ Carbon\Carbon::now()->format('d M Y') }}</strong>
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
    <script src="{{asset('libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{asset('js/pages/form-wizard.init.js')}}"></script>
    <script type="application/javascript">
        {{--    TODO: need to be removed    --}}
        $(document).ready(function () {
            $("#new").click(function () {
               hideShowLicenseNumber();
            });
            $("#renewal").click(function () {
                hideShowLicenseNumber();
            });

            function hideShowLicenseNumber() {
                if($("#new").is(":checked")){
                    $("#license_number_div").addClass('hidden-input');
                }
                if($("#renewal").is(":checked")){
                    $("#license_number_div").removeClass('hidden-input');
                }
            }


        })
    </script>
@endsection

