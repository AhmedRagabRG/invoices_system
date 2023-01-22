<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    @yield('title')

    @include('components.head')
</head>

<body class="app sidebar-mini ltr light-mode">

@include('components.navbar')

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
</div>

<div class="page">

    <div class="page-main">
        @include('components.navbar')

        @include('components.sidebar')

        @yield('content')
    </div>

    @include('components.slidebar')

    @include('components.country-selector')

    @include('components.footer')

</div>

    @include('components.footer-script')
</body>

</html>
