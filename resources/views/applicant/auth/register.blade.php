@extends('auth.layout')

@section('title', 'Applicant Register')

@section('form')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" method="post" action="{{ route('applicant.register') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter first_name" value="{{ old('first_name') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last_name" value="{{ old('last_name') }}">
                </div>
            </div>
        </div>



        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone number"  value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address">
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="gender">Gender</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check mb-2">
                                <label class="form-check-label" for="gender">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked="">
                                    Male
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check mb-2">
                                <label class="form-check-label" for="gender1">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="birthdate">Birthdate</label>
                    <input name="dob" class="form-control" type="date" value="{{ old('dob') }}" id="birthdate">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Enter password">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
        </div>

        <div class="mt-4 text-center">
            <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
        </div>
    </form>

@endsection

@section('js')
    <script>
        $(document).ready(function (){
            alert(1);
        });
    </script>
@endsection
