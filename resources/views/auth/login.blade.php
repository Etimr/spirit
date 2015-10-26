
@extends('layouts.frontend')

@section('content')   

<h2>Login</h2>

<form class="form-horizontal" role="form" method="POST" action="/auth/login">
    {!! csrf_field() !!}

    {{-- @if($errors->count() > 0)
    {{ dd($errors) }}
    @endif --}}

    <div class="form-group">
        <label class="col-md-4 control-label">Email</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        @if ($errors->has("email"))
        <span class="help-block">{{ $errors->first("email") }}</span>
        @endif

    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">

            <input type="password" class="form-control" name="password" id="password">
        </div>

        @if ($errors->has("password"))
        <span class="help-block">{{ $errors->first("password") }}</span>
        @endif
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary"> Login
            </button>
        </div>
    </div>


</form>

@stop