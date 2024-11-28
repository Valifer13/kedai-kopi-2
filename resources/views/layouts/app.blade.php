<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kedai Kopi | @yield('title')</title>
    <link rel="icon" href="{{ asset('03_images/icon.png') }}" type="image/gif" sizes="16x16">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{ asset('css/coloring.css') }}" type="text/css">

    <!-- css for scheme color -->
    <link rel="stylesheet" href="{{ asset('css/colors/cream.css') }}" type="text/css" id="colors">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/03_custom.css') }}" type="text/css">

    <!-- Slider Revolution Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rev-settings.css') }}">
</head>
<body>
    <div id="wrapper">
        @include('partials.navbar')
    
        @yield('content')
    
        @include('partials.footer')
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>

    <!-- RS5.0 Core JS Files -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    
    <script>
        jQuery(document).ready(function () {
            // revolution slider
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                delay: 3500,
                navigation: {
                    arrows: { enable: true }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 600,
                disableProgressBar: "on"
            });
        });
    </script>
</body>
</html>