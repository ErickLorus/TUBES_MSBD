<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Crush it Able The most popular Admin Dashboard template and ui kit">
<meta name="author" content="PuffinTheme the theme designer">

<link rel="shortcut icon" href="{{ asset('image/logoa.png')}}" type="image/x-icon">

<title>Admin MCW</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{{ asset('plugins/charts-c3/c3.min.css')}}"/>
<link rel="stylesheet" href="{{ asset('plugins/jvectormap/jvectormap-2.0.3.css')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

<!-- Core css -->
<link rel="stylesheet" href="{{ asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{ asset('css/theme4.css')}}" id="stylesheet"/>
<link rel="stylesheet" href="{{ asset('css/theme5.css')}}" id="stylesheet"/>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body class="font-opensans">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<!-- Start main html -->
<div id="main_content">

    <!-- Small icon top menu -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="{{ asset('images/user.png')}}" alt=""/></a>
                    <a href="/admin" class="nav-link icon"><i class="fa fa-home"></i></a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa fa-navicon"></i></a>
                </div>            
            </div>
        </div>
    </div>

    @include('layout.sidebar')

    <div class="page">
    @yield('content')

    <div class="section-body">
        @include('layout.footer')
    </div>
</div>
</div>



<!-- jQuery and bootstrtap js -->
<script src="{{ asset('bundles/lib.vendor.bundle.js')}}"></script>

<!-- start plugin js file  -->
<script src="{{ asset('bundles/counterup.bundle.js')}}"></script>
<script src="{{ asset('bundles/apexcharts.bundle.js')}}"></script>
<script src="{{ asset('bundles/c3.bundle.js')}}"></script>

<!-- Start core js and page js -->
<script src="{{ asset('js/core.js')}}"></script>
<script src="{{ asset('js/index4.js')}}"></script>
</body>
</html>