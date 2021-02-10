<link rel="stylesheet" href="{{ asset('bootstrap versi 4.1/css/bootstrap.min.css')}}">
{{--  Font  --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
{{--  css sendiri  --}}
<link rel="stylesheet" href="{{ asset('/css/login.css')}}">

<title>Login</title>

<div class="card formlogin">
    <a href="{{ route('home') }}" style="text-decoration: none"><h5 class="text-home">Home</h5></a>
    <div class="card-body">
        <div class="loginkiri">
            <img src="{{ asset('/images/backgroundlogin.svg')}}">
        </div>
        <div class="card loginkanan">
            <div class="card-body">
                <form class="form-auth-small" action="/postlogin" method="POST">
                    {{ csrf_field() }}
                    <h5 class="card-title text-signin">Sign In</h5>
                    <input class="form-control" type="emial" placeholder="Email" name="email">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    <input class="checkbox" type="checkbox" aria-label="Checkbox for following text input">
                    <span class="Remember_Me" style="text-decoration: none">Remember Me</span>
                    <a href="/password/reset" style="text-decoration: none"><span class="forgot_pass">Forgot Password</span></a>
                    <input class="btn tombol-signin" type="submit" value="Sign In">
                </form>     
            </div>
            <a href="{{ route('register')}}" style="text-decoration: none"><span class="text-register">Dont have an account?Sign Up</span></a>  
        </div>
    </div>
</div>    













{{--  <form class="form-auth-small" action="/postlogin" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="signin-email" class="control-label sr-only">Email</label>
        <input type="email" class="form-control" id="signin-email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <label for="signin-password" class="control-label sr-only">Password</label>
        <input type="password" class="form-control" id="signin-password"
        placeholder="Password" name="password">
    </div>
    <div class="form-group clearfix">
        <label class="fancy-checkbox element-left">
            <input type="checkbox">
            <span>Remember me</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
    <div class="bottom">
    <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
    </div>
</form>  --}}