<form method="POST" action="">
	@csrf
	<input type="text" id="email" name="email" value="{{ old('email') }}"><hr>
	<input type="password" id="password" name="password" value="{{ old('password') }}"><hr>
	<button>Log In</button>
	Don't Have an account? <a href="{{ route('register') }}">Sign Up</a>
</form>