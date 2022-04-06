<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Log in</title> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="{{ Config::get('app.name') }}">
    <title>{{Config::get('app.name') . @(isset($page_title) ? " | ".$page_title : '') }}</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0);"><b>Sheds</b> - Free Fittings</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                @foreach($errors->all() as $error)
                    {{ $error }}<br/>
                @endforeach
            </div>
        @endif

      <form action="{{ route('admin_login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
