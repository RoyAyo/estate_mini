<form method="POST" action="">
	@csrf
	<div style="margin-bottom: 0.3rem;">
		<label style="font-weight: bold;">Email :</label>
		<input type="text" id="email" name="email" value="{{ old('email') }}" style="border-radius: 5px;width:60vw;padding: 0.4rem;">
	</div>
	<div>
		<label style="font-weight: bold;">Login : </label>
		<input type="password" id="password" name="password" value="{{ old('password') }}" style="border-radius: 5px;width:60vw;padding: 0.4rem;">
	</div>
	<button style="padding: 0.4rem;border-radius: 0.13rem;background-color: skyblue">Log In</button>
	Don't Have an account? <a href="{{ route('register') }}" style="color: red;">Sign Up</a>
</form>