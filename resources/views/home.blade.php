@extends('layouts.template')

@section('content')
    <a href="{{ route('/register') }}">Register</a><br>
	<a href="{{ route('/login') }}">Login</a>
@endsection