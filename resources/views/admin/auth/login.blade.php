@extends('auth.layout')

@section('title', 'Admin Login')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
        @csrf
        @include('auth.login')
    </form>
@endsection
