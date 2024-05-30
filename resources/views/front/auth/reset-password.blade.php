<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>تسجيل مستخدم</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href= {{ asset('assets-front/plugins/fontawesome-free/css/all.min.css') }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href={{ asset('assets-front/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('assets-front/dist/css/adminlte.min.css') }}>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .login-box-msg, .register-box-msg {
    margin: 0;
    padding: 0 20px 20px;
    text-align: center;
    color: brown;
    font-size: 1.8vw;
    }
    span.fas {
    color: brown;
    }
 </style>
</head>
<body class="hold-transition register-page" style="background-image: url({{ asset('assets-front/imgs/login.jpg') }}) ;background-size:cover;background-repeate:ni-repeate; min-height:600px;">
<div class="register-box">


  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">تغيير كلمة المرور</p>
    

      <form action="{{ route('password.store') }}" method="post">
         @csrf
       

           <!-- Email Address -->
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" :value="{{ $request->email  }}" placeholder="Email">
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
       
        </div>
           <!-- Password -->
        <div class="input-group mb-3">
          <input type="password" class="form-control"  name="password" placeholder=" NewPassword">
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        
        </div>
         <!-- Confirm Password -->
        <div class="input-group mb-3">
          <input type="password" class="form-control"  name="password_confirmation" placeholder="Retype password">
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
      
        </div>
        <div class="row">
 
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">تغيير كلمة المرور</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src={{ asset('assets-front/plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset('assets-front/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
</body>
</html>
