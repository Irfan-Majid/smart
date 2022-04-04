<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parking Management</title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
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


</head>

<body>
<!-- Pre-loader start -->
{{--<div class="theme-loader">--}}
{{--    <div class="loader-track">--}}
{{--        <div class="loader-bar"></div>--}}
{{--    </div>--}}
{{--</div>--}}