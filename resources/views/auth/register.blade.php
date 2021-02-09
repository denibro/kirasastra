<link rel="stylesheet" href="{{ asset('bootstrap versi 4.1/css/bootstrap.min.css')}}">
{{--  Font  --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
{{--  css sendiri  --}}
<link rel="stylesheet" href="{{ asset('/css/register.css')}}">

<title>Register</title>

<div class="card formregister">
    <a href="{{ route('home') }}" style="text-decoration: none"><h5 class="text-home">Home</h5></a>
    <div class="card-body">
        <div class="registerkiri">
            <img src="{{ asset('/images/backgroundlogin.svg')}}">
        </div>
        <div class="card registerkanan">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h5 class="card-title text-signup">Sign Up</h5>
                    <input class="form-control" type="text" placeholder="Name" name="name">
                    <input class="form-control" type="emial" placeholder="Email" name="email">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation">
                    <input class="btn tombol-signup" type="submit" value="Sign Up">
                </form>    
            </div>
            <a href="{{ route('login')}}" style="text-decoration:none">
            <span class="text-login">have an account?Sign In</span></a>  
        </div>
    </div>
</div>    


        {{--  <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
        </form>  --}}
