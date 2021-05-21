<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>#cookie Blog</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="{{ asset('backend/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
       {{-- header --}}
       @include('backend.layout.header')
        {{-- tool --}}
       @include('backend.layout.tool')

        <div class="app-main">
            {{-- menu-bar --}}
            @include('backend.layout.menu_bar')

            {{-- content --}}
            {{-- @include('backend.layout.content_home') --}}
            @yield('content')
            {{-- ------- --}}
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('backend/assets/scripts/main.js') }}"></script>
</body>

</html>