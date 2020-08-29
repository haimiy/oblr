@extends('admin.layouts.main')

@section('title','Administrator Dashboard')

@section('page-content')
    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Government Official</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Create New</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
<form method="POST" action="{{ route('admin.governmentofficial.store') }}">
    @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">User Information </h4>
                        <p class="card-title-desc">Register a government official to start managing applications to different municipals.</p>
                        <p>
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            @endif
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="First name" value="{{ old('first_name') }}" name="first_name">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control  @error('first_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control  @error('first_name') is-invalid @enderror" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required="">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Mobile Number</label>
                                    <input type="text" class="form-control  @error('first_name') is-invalid @enderror" id="phone" name="phone" placeholder="Mobile Number" value="{{ old('phone') }}" required="">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control  @error('dob') is-invalid @enderror" id="dob" name="dob" placeholder="Date of Birth" value="{{ old('dob') }}" required="">
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="form-control  @error('first_name') is-invalid @enderror" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control  @error('first_name') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required="">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Password Confirmation </label>
                                    <input type="password" class="form-control  @error('first_name') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" value="{{ old('password_confirmation') }}" required="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Address</h4>

                        <regions-district v-bind:regions="{{ $regions }}" v-bind:districts="{{ $districts }}"></regions-district>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="region" class="col-lg-3 col-form-label">Region *</label>
                                    <div class="col-lg-9">
                                        <select id="region"  class="form-control" required>
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
                                        <select id="district" name="address_id" class="form-control @error('first_name') is-invalid @enderror" required>
                                            <option value="">--Please Select District--</option>
                                        </select>
                                        @error('address_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
