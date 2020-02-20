@extends('layouts.template')

@section('content')
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="proof_of_ownership"><br>
		<input type="file" name="diligence_report"><br>
		<input type="number" name="offerings"><br>
	</form>
@endsection