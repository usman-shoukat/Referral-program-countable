@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
        @endif
    </div>
    <div class="col-md-12">
        @if(\Illuminate\Support\Facades\Session::has('error'))
            <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
        @endif
    </div>
    <div class="col-md-12">
        @if ($errors->any())

            <ul class="form-error-list-on-top">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif
    </div>
    <!-- main-signin-wrapper -->
    <div class="my-auto page page-h">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-flex wd-100p">
                <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                    <div class="my-auto authentication-pages">
                        <div>
                            <img src="../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                            <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                            <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                            <a href="index.html" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="sign-up-body wd-md-50p">
                    <div class="main-signin-header">
                        <h2>Welcome usman!</h2>
                        <h4>Please Register with Azira</h4>
                    <form method="POST" action="{{ route('user.save') }}">
                        @csrf

                        <div class="form-group ">
                     <label >{{ __('Name') }}</label>
              <input id="name" type="text" class="form-control " name="name"  required >

                        </div>

                        <div class="form-group ">
                            <label >{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control " name="email"  required>



                        </div>

                        <div class="form-group ">
                            <label >{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control" name="password" required>
</div>

                        <div class="form-group ">
                            <label >{{ __('Confirm Password') }}</label>


                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >

                        </div>
                        <div class="form-group ">
                            <label >{{ __('Referral Code') }} (Optional)</label>


                            <input id="referralcode" type="password" class="form-control" name="code"  >

                        </div>

                        <div class="form-group ">
                            <label >{{ __('Cell Phone') }}</label>


                            <input id="phone" type="phone" class="form-control" name="phone" required >

                        </div>
                        <div class="form-group ">
                            <label >{{ __('Platform') }}</label>


                            <input id="platform" type="text" class="form-control" name="platform" required autocomplete="platform">

                        </div>

                        <div class="form-group row mb-0">

                                <button type="submit" class="btn btn-main-primary btn-block">
                                    {{ __('Register') }}
                                </button>

                        </div>
                    </div>
                    <div class="main-signup-footer mg-t-10">
                        <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-signin-wrapper -->


@endsection
