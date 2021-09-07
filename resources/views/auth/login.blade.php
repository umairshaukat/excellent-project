<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/assets/login_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/login_css/Site.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/login_css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/login_css/style.css')}}" rel="stylesheet">

    <title>Login</title>



    <link rel="apple-touch-icon" sizes="180x180" href="/Content/icons_cbs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Content/icons_cbs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Content/icons_cbs/favicon-16x16.png">
    <link rel="manifest" href="/Content/icons_cbs/site.webmanifest.json">
    <link rel="mask-icon" href="/Content/icons_cbs/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="bg-image account-page">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="middle-box-inner">
            <div class="m-b-lg">
                <h1 class="logo-name">
                    <img class="img-responsive" style="max-width: 300px; max-height: 185px; margin: 0 auto;" src="/content/images/logos/cbs_logo.png">
                </h1>
            </div>


                    <form method="POST" action="{{ route('login') }}" class="m-t" role="form">
                        @csrf

                
                <div class="form-group">
                

                <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" type="email"value="{{ old('email') }}" required autocomplete="email" autofocus >
                  @error('email')
                    <span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password">
                  @error('password')
                    <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>


                                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-blue"><small>Forgot password?</small></a>
                                @endif
                <p class="text-muted text-center"><small>Do not have an account?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
            </form>
            <p class="m-t"> <small>Chauffeur Booking Software account management © 2021</small> </p>
        </div>
    </div>

</body>

</html>

{{-- 


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}