@extends('auth.layout')

@section('title', 'Applicant Login')

@section('form')
    <form class="form-horizontal" action="{{ route('applicants.login') }}" method="post">
        @csrf
        @include('auth.login')
    </form>
@endsection

@section('register')
    <p>Don't have an account ? <a href="{{ route('applicants.register') }}" class="font-weight-medium text-primary"> Sign up now </a> </p>
@endsection
