@extends('layouts.app')

@section('content')
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Christopher Guy | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="{{ asset('lte/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>
<body class="hold-transition login-page">
<div class="container">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Christopher</b>Guy</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start</p>

      <form  method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="form-group has-feedback">
         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="https://accounts.google.com/ServiceLogin/identifier?continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dsign%2Bin%2Bgoogle%252B%26oq%3Dsign%2Bin%2Bgoogle%26aqs%3Dchrome.1.69i57j35i39j0l6.19216j0j7%26sourceid%3Dchrome%26ie%3DUTF-8&passive=1209600&hl=id&sacu=1&acui=0&rrsp=1&flowName=GlifWebSignIn&flowEntry=AddSession&TL=APDPHBAvOBbGx9r1JtgNi0Y0BNFNJpfhJWwqW_fghCkmohYRFaFB_Izx05ubFxuT" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new admin</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('lte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>


{{-- <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
