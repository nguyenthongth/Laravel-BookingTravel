<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
  @include('Layout-user.head_css')
  </head>
  <body class="default-page">
    <div class="preloader" id="pageLoad">
      <div class="holder">
        <div class="coffee_cup"></div>
      </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
      <div class="page-wrapper">
        <!-- main header -->
        @include('Layout-user.header')
        <!-- main container -->
        @yield('content-tour-detail')
      </div>
      <!-- main footer -->
        @include('Layout-user.footer')
    </div>
   <!--script-->
    @include('Layout-user.foot_script')
    @yield('script')
  </body>


</html>
