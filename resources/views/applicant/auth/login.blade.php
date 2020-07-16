@extends('auth.layout')

@section('title', 'Applicant Login')

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
    <form class="form-horizontal" action="/applicants/login" method="post">
        @csrf
        @include('auth.login')
    </form>
@endsection

@section('register')
    <p>Don't have an account ? <a href="/applicants/register" class="font-weight-medium text-primary"> Sign up now </a> </p>
@endsection
