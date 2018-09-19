<!DOCTYPE html>
<html lang="en">

    <!--================================================================================
            Item Name: Materialize - Material Design Admin Template
            Version: 3.1
            Author: GeeksLabs
            Author URL: http://www.themeforest.net/user/geekslabs
    ================================================================================ -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{!! config('config.application_name') ? : config('constants.default_title') !!}</title>

        <!-- Favicons-->
        <link rel="icon" href="{{asset('materialize/images/favicon/favicon-32x32.png')}}" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->
        <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="{{asset('materialize/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <!--<link href="{{asset('materialize/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">-->
        <link href="{{asset('materialize/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


        {!! Html::style('assets/vendor/icheck/skins/flat/blue.css') !!}
        {!! Html::style('assets/vendor/toastr/toastr.min.css') !!}
         {!! Html::style('assets/vendor/tags/tags.css') !!}
         {{--{!! Html::style('assets/vendor/select2/select2.min.css') !!}
         {!! Html::style('assets/vendor/select2/select2-bootstrap.min.css') !!}--}}
    </head>

    <body>
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
