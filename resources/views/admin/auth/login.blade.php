@extends('auth.layout')

@section('title', 'Admin Login')

@section('form')
    <form class="form-horizontal" action="index.html">
        @include('auth.login')
    </form>
@endsection
