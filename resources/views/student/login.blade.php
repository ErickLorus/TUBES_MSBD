@extends('layout.main')

@section('content')

<div class="loginawks">
	<div class="mainsign">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form>
				<label class="labellogin" for="chk" aria-hidden="true">Sign up</label>
				<input class="inputlogin" type="text" name="txt" placeholder="Nama" required="">
				<input class="inputlogin" type="text" name="class" placeholder="SMP/SMA/SMK" required="">
				<input class="inputlogin" type="email" name="email" placeholder="Email" required="">
				<input class="inputlogin" type="password" name="pswd" placeholder="Password" required="">
				<a href="/listbuku">
					<button class="sign">Sign up</button>
				</a>
			</form>
		</div>

		<div class="loginsign">
			<form>
				<label class="labellogin" for="chk" aria-hidden="true">Login</label>
				<input class="inputlogin" type="email" name="email" placeholder="Email" required="">
				<input class="inputlogin" type="password" name="pswd" placeholder="Password" required="">
		<a href="/listbuku">
			<button class="sign">Login</button>
		</a>
		</div>
		</form>
	</div>
</div>
</div>

@endsection