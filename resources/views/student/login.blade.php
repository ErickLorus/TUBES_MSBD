@extends('layout.main')

@section('content')
<div class="login">
        
    <div class="form">
        <h1>Log In</h1>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder=" Alamat Email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder=" Kata Sandi">
        </div>
        <div class="form-login">
            <button>
                <a href="main.html" role="button">Log In</a>
            </button>
        </div>
        <div class="form-element">
            <a href="a">Forgot password</a>
        </div>
    </div>
</div>
@endsection
