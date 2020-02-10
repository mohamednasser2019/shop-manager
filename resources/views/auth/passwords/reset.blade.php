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
                <h3>Reset Password</h3>
                <p>
                     Enter your e-mail address and new password below to reset .
                </p>

                <form method="POST" action="{{ route('password.update') }}">
                        @csrf

 <input type="hidden" name="token" value="{{ $token }}">
         <div class="errorHandler alert alert-danger no-display">
          <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
         </div>
                    <fieldset>
    <div class="form-group">
                            <span class="input-icon">
                                  <input id="email" placeholder="Enter Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                <i class="fa fa-envelope-o"></i>
                            </span>
             <div>
               @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                \\ٍ    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
    </div>

    <div class="form-group form-actions">
                            <span class="input-icon">
                               <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <i class="fa fa-lock"></i>
                           </span>
                             <div>                                      
                                     @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                     @endif
                            </div>
    </div>

    <div class="form-group">
                            <span class="input-icon">
                                  <input id="password-confirm"  placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                               <i class="fa fa-lock"></i>
                            </span>
    </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-green pull-right" value="Login">
                                Reset <i class="fa fa-arrow-circle-right"></i>
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

            </div>
            <!-- end: FORGOT BOX -->
            <!-- start: REGISTER BOX -->
            </div>
            <!-- end: REGISTER BOX -->
        </div>
    </div>
 @endsection