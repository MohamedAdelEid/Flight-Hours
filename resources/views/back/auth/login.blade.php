<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>الأدمن الدخول</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('assets-front/plugins/fontawesome-free/css/all.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{ asset('assets-front/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets-front/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('assets-front/dist/css/adminlte.min.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="{{ asset('assets-front/fonts/SansPro/SansPro.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap_rtl-v4.2.1/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap_rtl-v4.2.1/custom_rtl.css')}}">
      <style>
         .login-box-msg, .register-box-msg {
         margin: 0;
         padding: 0 20px 20px;
         text-align: center;
         color: brown;
         font-size: 1.5vw;
         }
         span.fas {
         color: brown;
         }
      </style>
   </head>
   <body class="hold-transition login-page" style="background-image: url({{ asset('assets-front/imgs/login.jpg') }}) ;background-size:cover;background-repeate:ni-repeate; min-height:600px;">
      <div class="login-box">
 
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               @if(Session::has('error'))
               <div class="alert alert-danger" role="alert">
                  {{  Session::get('error') }}
               </div>
               @endif
               <p class="login-box-msg"> دخول الأدمن </p>
                   <!-- Session Status -->
             <x-auth-session-status class="mb-4" :status="session('status')" />
               <form action="{{ route('adminlogin') }}" method="post">
                  @csrf
                     <!-- Email Address -->
                  <div class="input-group mb-3">
                     <input  type="text"  name="email" :value="old('email')" class="form-control" placeholder="email">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  @error('email')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  @error('password')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="row">
                     <!-- /.col -->
                     <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">الدخـــول </button>
                     </div>
                     <!-- /.col -->
                           <!-- Remember Me -->
        <div class="col-12">
         <label for="remember_me" class="inline-flex items-center">
             <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
             <span class="ms-2 text-sm text-gray-600 ">{{ __('تذكرني دائما') }}</span>
         </label>
        </div>

                  </div>

                 </div>
               </form>
               <a href="{{ route('adminpassword.request') }}" class="text-center"> هل نسيت كلمة السر </a>
               <p>     
               </p>
            </div>
            
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="{{ asset('assets-front/plugins/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('assets-front/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   </body>
</html>