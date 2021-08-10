

<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from mentoring-html.dreamguystech.com/template-1/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 02:32:42 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Mentoring - Dashboard</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/admin/img/favicon.png") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/css/bootstrap.min.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/plugins/fontawesome/css/fontawesome.min.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/plugins/fontawesome/css/all.min.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/css/feather.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/plugins/morris/morris.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/plugins/datatables/datatables.min.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/admin/css/style.css") }}">
      <!--[if lt IE 9]>
      <script src="{{ asset("assets/admin/js/html5shiv.min.js") }}"></script>
      <script src="{{ asset("assets/admin/js/respond.min.js") }}"></script>
      <![endif]-->
   </head>
   <body>
      <div class="main-wrapper">
            @include('admin.admin_layouts.header')
            @include('admin.admin_layouts.sidebar')
            @yield('admin_content')
      </div>
      <script src="{{ asset("assets/admin/js/jquery-3.5.1.min.js") }}"></script>
      <script src="{{ asset("assets/admin/js/popper.min.js") }}"></script>
      <script src="{{ asset("assets/admin/js/bootstrap.min.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/slimscroll/jquery.slimscroll.min.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/raphael/raphael.min.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/morris/morris.min.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/apexchart/apexcharts.min.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/apexchart/dsh-apaxcharts.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/datatables/jquery.dataTables.min.js") }}"></script>
      <script src="{{ asset("assets/admin/plugins/datatables/datatables.min.js") }}"></script>
      <script src="{{ asset("assets/admin/js/script.js") }}"></script>





   </body>
</html>

