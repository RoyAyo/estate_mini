<form method="POST" action="">
	@csrf
	<div style="margin-bottom: 0.4rem;">
		<label style="font-weight: bold;"> Name : </label>
		<input type="text" id="name" name="name" value="{{ old('name') }}">
	</div>
	<div style="margin-bottom: 0.4rem;">
		<label style="font-weight: bold;"> Email : </label>
		<input type="text" id="email" name="email" value="{{ old('email') }}">
	</div>
	<div style="margin-bottom: 0.4rem;">
		<label style="font-weight: bold;"> Password : </label>
		<input type="password" id="password" name="password" value="{{ old('password') }}">
	</div>
	<div style="margin-bottom: 0.4rem;">
		<label style="font-weight: bold;"> Confirm Password : </label>
		<input type="password" id="password-confirm" name="password_confirmation" value="{{ old('password_confirmation') }}">
	</div>
	<button>Submit</button>
	You Have an account? <a href="{{ route('login') }}" style="color: blue;">Sign In</a>
</form>