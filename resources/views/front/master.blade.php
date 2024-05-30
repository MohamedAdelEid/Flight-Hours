<!DOCTYPE html>
<html>
    @include('front.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 @include('front.partials.Navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('front.partials.Sidebar')
    <!-- Content Header (Page header) -->
@include('front.partials.ContentHeader')
    <!-- /.content-header -->
  
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        @yield('content')
     
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- footer -->
@include('front.partials.footer')
   <!--/ end footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!--script    -->
@include('front.partials.script')
</body>
</html>
