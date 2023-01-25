 <?php 
 $get_url = explode('admin/',Request::url());

 $curr_conn = '1';
 //  $current_route = explode('@', Route::currentRouteAction());
 $current_route =  explode('\admin',Route::currentRouteAction());
 if(!empty($current_route[1])){
   $curr_conn = explode('@',$current_route[1]);
  }
//  if(!empty($current_route[1])){
//  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/fontawesome-free/css/all.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  {{-- File Css --}}
  <link rel="stylesheet" href="{{ asset('/admin-assets/css/style.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/template/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('/template/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/template/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  {{-- Get Image Path --}}
   <!-- Select 2 Header  -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
 <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet">
      {{-- SweetAlert --}}
      
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Toastr -->
    <!-- TOASTR -->
    <link rel="stylesheet" href="{{ asset('public/template/plugins/toastr/toastr.min.css') }} ">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  @if (Session::has('flash-success'))
  <p class="admin-toastr" onclick="toastr_success('{{ session('flash-success')}}')"></p>
  @endif
  @if (Session::has('flash-error'))
  <p class="admin-toastr" onclick="toastr_danger('{{ session('flash-error')}}')"></p>
  @endif
  
  {{-- @if(Session::has('flash-success'))
            <span class="admin-toastr"
                onclick="toastr_alert('Success','{{ session()->get('flash-error') }}','error')"></span>
        @elseif(Session::has('flash-error'))
            <span class="admin-toastr"
                onclick="toastr_alert('Error','{{ session()->get('flash-success') }}','success')"></span>
        @endif --}}

   @if(Session::has('flash-success'))
    <script>
        swal("Success","{{Session::get('flash-success')}}","success");
    </script>
    @elseif(Session::has('flash-error'))
    <script>
        swal("Error", "{{Session::get('flash-error')}}", "error");
    </script>
    @endif 
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        @csrf
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('/template/dist/img/user2-160x160.jpg') }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="{{ asset('/template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                      Demi
                    </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="{{route('admin.getProfile',['update-profile'])}}" class="btn btn-default btn-flat">Profile</a>
                    <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat float-right">Sign out</a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link @if(!empty($current_route[0] == '\Illuminate\Routing\ViewController')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li> --}}
          </li>
        </ul>
      </nav>

      {{-- User Management Sidebar --}}
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item has-treeview menu-open ">
            <a href="#" class="nav-link nav-link @if($curr_conn[0] == "\RecruitingController" || $curr_conn[0] == "\JobSeekerController" )) active @endif">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.jobseeker.index')}}" class="nav-link @if(!empty( $curr_conn[0] == "\JobSeekerController")) active @endif">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>Employee</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item ">
                    <a href="{{route('admin.recruiting.index')}}" class="nav-link @if($curr_conn[0] == "\RecruitingController")) active @endif">
                        <i class="nav-icon fas fa-edit"></i>
                    <p>Recruiter</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
    {{--Page Managment  --}}
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link nav-link @if($curr_conn[0] == "\PageController") active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pages management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.page.homePage')}}" class="nav-link  @if($get_url[1] == "home-page")) active @endif">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>Home Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>ContactUs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>AboutUs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>FAQ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.page.index',['privacy'])}}" class="nav-link @if($get_url[1] == "policy-page,privacy")) active @endif">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>Privacy policy</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.page.index',['terms_conditions'])}}" class="nav-link @if($get_url[1] == "policy-page,terms_conditions")) active @endif">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>terms & conditions</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      {{-- Admin Setting --}}
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link @if($curr_conn[0] == "\ProfileController") active @endif">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                Admin setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.getProfile',['update-password'])}}" class="nav-link @if($get_url[1] == "profile/update-password") active @endif">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>Change password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                    <p>Paypal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                    <p>Stripe</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link ">
                        <i class="nav-icon fas fa-tree"></i>
                    <p>ETC</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @yield('content');

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{ asset('/admin-assets/js/adminjs.js')}}"></script>
<!-- jQuery -->
<script src="{{ asset('/template/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('/template/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('/template/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('/template/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('/template/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/template/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/template/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('/template/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('/template/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('public/template/plugins/toastr/toastr.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/template/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/template/dist/js/demo.js')}}"></script>

<!-- NOTIFY TOASTER -->
<script src="{{ asset('/template/plugins/toastr/pnotify.js')}}"></script>
<script src="{{ asset('/template/plugins/toastr/notify.js')}}"></script>

{{-- select 2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>


<script>
  $(function () {
   $('select').each(function () {
      $(this).select2({
         tags:true,
         theme: 'bootstrap4',
         width: 'style',
         placeholder: $(this).attr('placeholder'),
     });
     $(".select_data").select2({
       tags:false,
       theme: 'bootstrap4',
       placeholder: $(this).attr('placeholder'),
     })
   });
 });
 </script>
   <script>
    $(document).ready(function() {
        $('.textarea').summernote();
    });
  </script>
</body>
</html>
