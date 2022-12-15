@extends('layout.main')

@section('content')

<head>
	<title>Slide Navbar</title>
</head>
<div class="loginawks">
	<div class="mainsign">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label class="labelabua" for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button class="sign">Sign up</button>
				</form>
			</div>

			<div class="loginsign">
				<form>
					<label class="labelabua" for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button class="sign">Login</button>
				</form>
			</div>
	</div>
</div>



@endsection
