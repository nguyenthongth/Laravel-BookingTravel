<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('upload/images/favicon.ico') }}" type="image/x-icon" />
     {{-- <script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script> --}}
    <title>@yield('title')</title>
    @include('Layout.head_css')
    @yield('custom_css')
</head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">

        <!-- include header-->
        @include('Layout.header')
        <!-- end include header-->

        <!-- content -->
        <div class="page-container">
            <!-- include sidebar menu-->
            @include('Layout.sidebar')
            <!-- end include sidebar menu -->

            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            {{-- <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div> --}}
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
					 @yield('page_content')
                </div>
            </div>
            <!-- end page content -->
        </div>
        <!-- end content -->
          
        <!-- include footer-->
        @include('Layout.footer')
        <!-- end include footer-->

    </div>
    {{-- @yield('page_content') --}}
    @include('Layout.foot_script')
    @yield('custom_js')
</body>

</html>