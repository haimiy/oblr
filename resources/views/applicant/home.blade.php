@extends('applicant.layouts.applicant_main')

@section('title','Applicant Dashboard')

@section('page-content')
    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Welcome to OBLR Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar-sm font-size-20 mr-3">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                        <i class="mdi mdi mdi-timer-sand"></i>
                                                    </span>
                            </div>
                            <div class="media-body">
                                <div class="font-size-16 mt-2">Pending Request</div>
                            </div>
                        </div>
                        <h4 class="mt-4">0</h4>
                        <div class="row">
                            <div class="col-7">
                                <p class="mb-0"><span class="text-success mr-2"> 0% <i class="mdi mdi-arrow-up"></i> </span></p>
                            </div>
                            <div class="col-5 align-self-center">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar-sm font-size-20 mr-3">
                                                <span class="avatar-title bg-soft-primary text-primary rounded">
                                                        <i class="mdi mdi mdi-license"></i>
                                                    </span>
                            </div>
                            <div class="media-body">
                                <div class="font-size-16 mt-2">Licenses</div>

                            </div>
                        </div>
                        <h4 class="mt-4">0</h4>
                        <div class="row">
                            <div class="col-7">
                                <p class="mb-0"><span class="text-success mr-2"> 0% <i class="mdi mdi-arrow-up"></i> </span></p>
                            </div>
                            <div class="col-5 align-self-center">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All License Application List </h4>
                        <div class="col-md-12">
                            <a href="{{route('applicants.applications.request')}}" class="float-right btn btn-primary"><i class="mdi mdi mdi mdi-folder-edit-outline"></i> Request License</a>
                        </div>

                        <p class="card-title-desc">
                            All the applications that are applied to your administrative locations will be listed here. You can approve or deny with reason an application after reviewing all its details.
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
@section('page-js')
    <!-- Required datatable js -->
    <script src="{{asset('libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- Datatable init js -->
    <script src="{{asset('js/pages/datatables.init.js')}}"></script>
@endsection
