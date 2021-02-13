<!DOCTYPE html>
<html>
<link>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/summernote/summernote-bs4.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('backend.layouts.header')

    @include('backend.layouts.sidebar')

   @yield('content')
        @include('backend.layouts.footer')

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('backend')}}/plugins/select2/js/select2.full.min.js"></script>

<script src="{{asset('backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('backend')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('backend')}}/plugins/sparklines/sparkline.js"></script>
<script src="{{asset('backend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('backend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{asset('backend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{asset('backend')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('backend')}}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('backend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{asset('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{asset('backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{asset('backend')}}/dist/js/adminlte.js"></script>
<script src="{{asset('backend')}}/dist/js/pages/dashboard.js"></script>
<script src="{{asset('backend')}}/dist/js/demo.js"></script>
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
        @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<script type="text/javascript">
    $(function () {
        $('.select2').select2();
    })
</script>
</body>
</html>
