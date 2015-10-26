@extends('layouts.frontend')

@section('content')   

<h2>Welcome to backend, {{ Auth::user()->name }}</h2>

<div class="link"><a href="/auth/logout">Logout</a></div>


@stop
