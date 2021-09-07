<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/assets/login_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/login_css/Site.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/login_css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/login_css/style.css')}}" rel="stylesheet">

    <title>Register</title>
    


<link rel="apple-touch-icon" sizes="180x180" href="/Content/icons_cbs/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/Content/icons_cbs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/Content/icons_cbs/favicon-16x16.png">
<link rel="manifest" href="/Content/icons_cbs/site.webmanifest.json">
<link rel="mask-icon" href="/Content/icons_cbs/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <style>
        .bg-image {
            background: url(../../Content/images/frank_london_admin_login_v1.jpg) no-repeat center center fixed;
            -ms-background-size: cover;
            background-size: cover;
        }

        .logo-name {
            color: white;
        }

        .middle-box {
            padding-top: 117px;
            width: 500px !important;
            color: white;
            width: 500px;
        }

        .middle-box-inner {
            background-color: rgba(160, 159, 189, 0.75);
            border-radius: 9px;
            padding: 10px 30px 30px 30px;
        }
            .middle-box-inner input {
                color: black;
            }

        .middle-box h3 {
            font-size: 30px;
            text-align: center;
        }

        .middle-box .text-muted {
            color: white !important;
        }

        .middle-box .btn-white {
            color: black !important;
        }
    </style>
</head>

<body class="bg-image">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div class="middle-box-inner">
            <div class="m-b-lg">
                <h1 class="logo-name">
                    <img class="img-responsive" style="max-width: 300px; margin: 0 auto;" src="/content/images/logos/cbs_logo.png">
                </h1>
            </div>

        <form method="POST" action="{{ route('register') }}"  class="form-horizontal">
            @csrf
     
            <div class="form-group">
                    <input class="form-control  @error('name') is-invalid @enderror" id="FirstName" name="name" placeholder="First Name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                    <span class="field-validation-valid text-danger" data-valmsg-for="FirstName" data-valmsg-replace="true">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>

                <div class="form-group">

                    <input class="form-control   @error('lastname') is-invalid @enderror" id="LastName" name="lastName" placeholder="Last Name" type="text" value="">
                    @error('lastname')
                    <span class="field-validation-valid text-danger" data-valmsg-for="FirstName" data-valmsg-replace="true">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('email') is-invalid @enderror" id="Email" name="email" placeholder="Email address" type="email"value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="field-validation-valid text-danger" data-valmsg-for="email" data-valmsg-replace="true">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control @error('password') is-invalid @enderror" id="Password" name="password" placeholder="Password" type="password" required autocomplete="new-password">
                     @error('password')   
                    <span class="field-validation-valid text-danger" data-valmsg-for="pasword" data-valmsg-replace="true">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control" id="ConfirmPassword" placeholder="Confirm password" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                <p class="text-muted text-center">
                    <small>Already have an account?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
</form>            <p class="m-t"> <small>Chauffeur Booking Software account management  © 2021</small> </p>
        </div>
    </div>

</body></html>





{{-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}