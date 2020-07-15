@extends('auth.layout')

@section('title', 'Applicant Login')

@section('form')
    <form class="form-horizontal" action="index.html">
        @include('auth.login')
    </form>
@endsection

@section('register')
    <p>Don't have an account ? <a href="#" class="font-weight-medium text-primary"> Sign up now </a> </p>
@endsection
