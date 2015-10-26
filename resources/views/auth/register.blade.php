@extends('layouts.frontend')

@section('content')   

<h2>Registration</h2>
<form class="form-horizontal" role="form" method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
       <label class="col-md-4 control-label">Username</label>
       <div class="col-md-6">
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        @if ($errors->has("name"))
            <span class="help-block">{{ $errors->first("name") }}</span>
        @endif
    </div>

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
        <input type="password" class="form-control"  name="password">
        </div>
        @if ($errors->has("password"))
            <span class="help-block">{{ $errors->first("password") }}</span>
        @endif
    </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Confirm Password</label>
       <div class="col-md-6">
        <input type="password" class="form-control" name="password_confirmation">
        </div>
        @if ($errors->has("password"))
            <span class="help-block">{{ $errors->first("password") }}</span>
        @endif
    </div>

   <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary"> 
                Register
            </button>
        </div>
    </div>
</form>

@stop