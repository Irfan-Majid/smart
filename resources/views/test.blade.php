<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 DatePicker</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/css/bootstrap.min.css') !!}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/icon/themify-icons/themify-icons.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{url('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/icon/icofont/css/icofont.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/css/jquery-ui.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') !!}">

    @yield('style')
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/bower_components/animate.css/css/animate.css') !!}">

    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/custom.css')}}">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('theme/css/bootstrap.min.css') !!}">

{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<input id="datepicker" width="276" />
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

<script src="{{asset('theme/bower_components/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('theme/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('theme/bower_components/popper.js/js/popper.min.js')}}"></script>
<script src="{{asset('theme/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('theme/bower_components/jquery/js/jquery.min.js')}}/assets/pages/widget/excanvas.js "></script>--}}
<!-- jquery slimscroll js -->
<script src="{{asset('theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('theme/bower_components/modernizr/js/modernizr.js')}}"></script>
<script src="{{asset('theme/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<!-- slimscroll js -->
<script src="{{asset('theme/js/SmoothScroll.js')}}"></script>
<script src="{{asset('theme/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Chart js -->

@yield('script')
<script src="{!! asset('theme/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('theme/pages/data-table/js/data-table-custom.js') !!}"></script>

<!-- menu js -->
<script src="{{asset('theme/js/pcoded.min.js')}}"></script>
<script src="{{asset('theme/js/vertical/vertical-layout.min.js')}}"></script>
<script src="{{asset('theme/js/script.js')}}"></script>
</body>
</html>