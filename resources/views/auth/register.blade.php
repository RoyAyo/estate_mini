<form method="POST" action="">
	@csrf
	<input type="text" id="name" name="name" value="{{ old('name') }}"><hr>
	<input type="text" id="email" name="email" value="{{ old('email') }}"><hr>
	<input type="password" id="password" name="password" value="{{ old('password') }}"><hr>
	<input type="password" id="password-confirm" name="password_confirmation" value="{{ old('password_confirmation') }}"><hr>
	<button>Submit</button>
</form>