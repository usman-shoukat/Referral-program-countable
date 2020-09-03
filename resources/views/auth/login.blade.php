@extends('layouts.app')

@section('content')
    <!-- main-signin-wrapper -->
    <div class="my-auto page page-h">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-flex wd-100p">
                <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                    <div class="my-auto authentication-pages">
                        <div>
                            <img src="../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                            <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                            <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="index.html" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="p-5 wd-md-50p">
                    <div class="main-signin-header">
                        <h2>Welcome back!</h2>
                        <h4>Please sign in to continue</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>{{ __('E-Mail Address') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" type="text"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Password') }}</label>
                                <input class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" type="password"  name="password" required autocomplete="current-password" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group ">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>

                            <button class="btn btn-main-primary btn-block">{{ __('Login') }}</button>

                        </form>
                    </div>
                    <div class="main-signin-footer mt-3 mg-t-5">
                        @if (Route::has('password.request'))
                            <p><a href="{{ route('password.request') }}">  {{ __('Forgot password?') }}</a></p>
                        @endif
                        <p>Don't have an account? <a href="{{ route('register') }}">Create an Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-signin-wrapper -->

@endsection
