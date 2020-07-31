@extends('admin.layouts.main')

@section('title','Administrator Dashboard')

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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Government Officials </h4>

                        <p class="card-title-desc">
                            All government officials will be listed and managed here.
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th style="width: 3%">SN</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($gvt as $g)
                                    <tr>
                                        <th style="width: 3%">{{ $loop->iteration }}</th>
                                        <th>{{ $g->first_name }} {{ $g->last_name }}</th>
                                        <th>{{ $g->phone }}</th>
                                        <th>{{ $g->gender }}</th>
                                        <th>{{ Carbon\Carbon::make($g->dob)->diffInYears(\Carbon\Carbon::now()) }}</th>
                                        <th>{{ $g->email }}</th>
                                        <th>
                                            <button class="btn btn-primary btn-sm" title="Edit"><i class="bx bx-pencil"></i>Edit</button>
                                            <button class="btn btn-danger btn-sm"><i class="bx bx-trash"></i>Delete</button>
                                        </th>
                                    </tr>
                                @endforeach
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
    <script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('js/pages/datatables.init.js') }}"></script>
@endsection
