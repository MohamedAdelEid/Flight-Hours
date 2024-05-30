<!DOCTYPE html>
<html>
    @include('back.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 @include('back.partials.Navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('back.partials.Sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
<p>         
</p>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        @yield('content')
     
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- footer -->
@include('back.partials.footer')
   <!--/ end footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!--script    -->
@include('back.partials.script')
</body>
</html>
