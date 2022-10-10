<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description"
        content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('backend/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('backend/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="{{ asset('backend/assets/css/codebase.min.css') }}">

    <!-- Page JS Plugins CSS -->
    @yield('header-inc')
</head>

<body>

    <!-- Page Container -->
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        <!-- Sidebar -->
        @include('backend._inc.sidebar')
        <!-- END Sidebar -->

        <!-- Header -->
        @include('backend._inc.header')
        <!-- END Header -->

        <!-- Main Container -->
        @yield('main-container')
        <!-- END Main Container -->

        <!-- Footer -->
        @include('backend._inc.footer')
        <!-- END Footer -->

    </div>
    <!-- END Page Container -->

    <script src="{{ asset('backend/assets/js/codebase.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    @yield('footer-inc')
</body>

</html>
