<!DOCTYPE html>
<html>
  
<!-- Mirrored from html.waituk.com/entrada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 07:08:12 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
   @include('Layout-user.head_css')
  </head>
  <body>
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
        <!-- main banner -->
       @yield('content')
      </div>
      <!-- main footer -->
      @include('Layout-user.footer')
    </div>
   <!--script-->
    @include('Layout-user.foot_script')
    @yield('script')
  </body>

</html>
