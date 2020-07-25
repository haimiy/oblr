@extends('auth.layout')

@section('title', 'Government Login')

@section('form')
    <form class="form-horizontal" action="{{ route('gvt.login') }}" method="POST">
        @csrf
        @include('auth.login')
    </form>
@endsection
