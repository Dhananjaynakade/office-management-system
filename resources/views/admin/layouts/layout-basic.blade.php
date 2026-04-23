<!DOCTYPE html>
<html>
<head>
    <title>Office Management System</title>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap' rel='stylesheet' type='text/css'>
    <script src="{{asset('/assets/admin/js/core/pace.js')}}"></script>
    <link href="{{ asset('/assets/admin/css/laraspace.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/admin/css/modern-custom.css') }}" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('admin.layouts.partials.favicons')
    @yield('styles')
</head>
<body class="layout-default skin-default">
    @include('admin.layouts.partials.laraspace-notifs')

    <div id="app" class="site-wrapper">
        @include('admin.layouts.partials.header')
        <div class="mobile-menu-overlay"></div>
        @include('admin.layouts.partials.sidebar',['type' => 'default'])

        @yield('content')

        @include('admin.layouts.partials.footer')
        @if(config('laraspace.skintools'))
            @include('admin.layouts.partials.skintools')
        @endif
    </div>

    <script src="{{asset('/assets/admin/js/core/plugins.js')}}"></script>
    <script src="{{asset('/assets/admin/js/demo/skintools.js')}}"></script>
    <script src="{{asset('/assets/admin/js/core/app.js')}}"></script>
    @yield('scripts')
</body>
</html>
