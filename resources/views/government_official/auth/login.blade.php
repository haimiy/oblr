@extends('auth.layout')

@section('title', 'Government Login')

@section('form')
    <form class="form-horizontal" action="index.html">
        @include('auth.login')
    </form>
@endsection
