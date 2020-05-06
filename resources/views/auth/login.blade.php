<form method="POST" action="">
	@csrf
	<div style="margin-bottom: 0.4rem;">
		<label style="font-weight: bold;">Email :</label>
		<input type="text" id="email" name="email" value="{{ old('email') }}">
	</div>
	<div style="margin-bottom: 0.4rem">
		<label style="font-weight: bold;">Login : </label>
		<input type="password" id="password" name="password" value="{{ old('password') }}">
	</div>
	<button>Log In</button>
	Don't Have an account? <a href="{{ route('register') }}" style="color: red;">Sign Up</a>
</form>