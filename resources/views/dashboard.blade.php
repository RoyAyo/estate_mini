@extends('layouts.template')
@section('content')
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
	<button type="submit">Logout</a>
</form>
@eendsection