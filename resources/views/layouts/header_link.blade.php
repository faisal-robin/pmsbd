<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PMS | Admin</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="{{ asset('public/admin_asset/build/css/intlTelInput.css') }}" rel="stylesheet">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/plugins/summernote/summernote-bs4.css') }}">
  <link href="{{ asset('public/admin_asset/dist/css/dropzone.css') }}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <script src="{{ asset('public/admin_asset/plugins/jquery-ui/jquery-ui.css') }}"></script>
  <!-- jQuery -->
   <script src="{{ asset('public/admin_asset/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
   <script src="{{ asset('public/admin_asset/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('public/admin_asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin_asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/admin_asset/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/admin_asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed @if(request()->is(['pos'])) sidebar-collapse @endif">
