@extends('login_temp')


@section('content')


<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo">
                <img src="{{ asset('public/img/logo-sm.png') }}">
            </div>
            <!-- start: LOGIN BOX -->

           <div class="box-login">
                <h3>Sign in to your account</h3>
                <p>
                    Please enter your name and password to log in.
                </p>

                <form class="form-login" action="{{ route('login') }}" method="POST">

          @csrf
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <span class="input-icon">
                                 <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="email" value="{{ old('email') }}">
                                <i class="fa fa-user"></i>
                            </span>
                            <div>
              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
                        </div>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                <i class="fa fa-lock"></i>
                                <a class="forgot" href="#">
                                    I forgot my password
                                </a>
                            </span>
                            <div>
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
                        </div>
                        <div class="form-actions">
                            <label for="remember" class="checkbox-inline">
                                <input type="checkbox" class="grey remember" id="remember" name="remember">
                                Keep me signed in
                            </label>
                            <button type="submit" class="btn btn-green pull-right" value="Login">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>                  
                        </div>
                    </fieldset>
                </form>
                <!-- start: COPYRIGHT -->
                <div class="copyright">
                    2019 &copy; 4m systems.
                </div>
                <!-- end: COPYRIGHT -->
            </div>
            <!-- end: LOGIN BOX -->
            <!-- start: FORGOT BOX -->
            <div class="box-forgot">
                <h3>Forget Password?</h3>
                <p>
                    Enter your e-mail address below to reset your password.
                </p>
    
                    <form class="form-forgot" method="POST" action="{{ route('password.email') }}">
                        @csrf

                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <span class="input-icon">
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                <i class="fa fa-envelope"></i>
                            </span>

                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-actions">
                            <a class="btn btn-light-grey go-back">
                                <i class="fa fa-chevron-circle-left"></i> Log-In
                            </a>
                            <button type="submit" class="btn btn-green pull-right">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
                <!-- start: COPYRIGHT -->
                <div class="copyright">
                    2019 &copy; 4m systems.
                </div>
                <!-- end: COPYRIGHT -->
            </div>
            <!-- end: FORGOT BOX -->
        

            </div>
            <!-- end: FORGOT BOX -->
            <!-- start: REGISTER BOX -->
            </div>
            <!-- end: REGISTER BOX -->
        </div>
    </div>
 @endsection