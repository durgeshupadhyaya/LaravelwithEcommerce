<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title') - E-Commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ url('public/css/front.css') }}" rel="stylesheet">
</head>

<body>
<div class="banner-top container-fluid" id="home">

    @include('front.includes.header')

</div>

@include('flash::message')
@include('errors.list')

@yield('content')

@include('front.includes.footer')

</body>

</html>
