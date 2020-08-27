@extends('admin.layouts.main')

@section('title','Administrator Dashboard')

@section('page-content')
    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Manage Address Info</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <form method="POST" action="{{ route('admin.address') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Address</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="region" class="col-lg-3 col-form-label">Region *</label>
                                        <div class="col-lg-9">
                                            <select id="region"  name="region_id" class="form-control" required>
                                                <option value="">--Please Select Region--</option>
                                                @foreach($regions as $region)
                                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="district" class="col-lg-3 col-form-label">District *</label>
                                        <div class="col-lg-9">
                                            <input type="text" min="3" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="district" class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9">
                                            <input type="submit" class="btn btn-primary" value="Add">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </form>
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
    <script>
        $('#region').change(function () {
            var region_id = $('#region').val();
            var district = $('#district');

            if (region_id >= 0){
                ajaxLoadRegionDistrict(region_id,district);
            }
            else{
                district.html('<option value="">--Please Select District--</option>');
            }
        });
        function ajaxLoadRegionDistrict(region_id,district) {
            district.html('<option value="">--Please Select District--</option>');

            $.get('/admin/ajax/regions/'+region_id+'/districts',function (data) {
                var districts = data.districts;

                for (var index in districts){
                    district.append("<option value='"+districts[index].id+"'>"+districts[index].name+"</option>");
                }
            });
        }
    </script>
@endsection
