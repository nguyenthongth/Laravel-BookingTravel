<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('upload/images/favicon.ico') }}" type="image/x-icon" />
    <title>@yield('title')</title>
    {{-- <script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script> --}}
    @include('Layout.head_css')
    @yield('custom_css')
</head>

<body>
    @yield('page_content')
    @include('Layout.foot_script')
    @yield('custom_js')
</body>

</html>