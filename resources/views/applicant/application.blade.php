@extends('applicant.layouts.applicant_main')

@section('title','Request new License or Renew License')
@section('page-content')
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
                            <h3>Seller Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Contact Person</label>
                                            <div class="col-lg-9">
                                                <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Mobile No.</label>
                                            <div class="col-lg-9">
                                                <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Landline No.</label>
                                            <div class="col-lg-9">
                                                <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Email Address</label>
                                            <div class="col-lg-9">
                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address 1</label>
                                            <div class="col-lg-9">
                                                <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Warehouse Address</label>
                                            <div class="col-lg-9">
                                                <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityBilling" class="col-lg-3 col-form-label">Company Type</label>
                                            <div class="col-lg-9">
                                                <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Live Market A/C</label>
                                            <div class="col-lg-9">
                                                <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Product Category</label>
                                            <div class="col-lg-9">
                                                <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFaxBilling" class="col-lg-3 col-form-label">Product Sub Category</label>
                                            <div class="col-lg-9">
                                                <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Company Document</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">PAN Card</label>
                                            <div class="col-lg-9">
                                                <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtLastNameShipping" class="col-lg-3 col-form-label">VAT/TIN No.</label>
                                            <div class="col-lg-9">
                                                <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCompanyShipping" class="col-lg-3 col-form-label">CST No.</label>
                                            <div class="col-lg-9">
                                                <input id="txtCompanyShipping" name="txtCompanyShipping" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label">Service Tax No.</label>
                                            <div class="col-lg-9">
                                                <input id="txtEmailAddressShipping" name="txtEmailAddressShipping" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCityShipping" class="col-lg-3 col-form-label">Company UIN</label>
                                            <div class="col-lg-9">
                                                <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label">Declaration</label>
                                            <div class="col-lg-9">
                                                <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <h3>Bank Details</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Name on Card</label>
                                            <div class="col-lg-9">
                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Credit Card Type</label>
                                            <div class="col-lg-9">
                                                <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
                                                    <option value="">--Please Select--</option>
                                                    <option value="AE">American Express</option>
                                                    <option value="VI">Visa</option>
                                                    <option value="MC">MasterCard</option>
                                                    <option value="DI">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Credit Card Number</label>
                                            <div class="col-lg-9">
                                                <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label">Card Verification Number</label>
                                            <div class="col-lg-9">
                                                <input id="txtCardVerificationNumber" name="txtCardVerificationNumber" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="txtExpirationDate" class="col-lg-3 col-form-label">Expiration Date</label>
                                            <div class="col-lg-9">
                                                <input id="txtExpirationDate" name="txtExpirationDate" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Confirm Detail</h3>
                            <fieldset>
                                <div class="p-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions.</label>
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
    <script src="{{asset('libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{asset('js/pages/form-wizard.init.js')}}"></script>
@endsection

