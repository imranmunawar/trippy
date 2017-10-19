<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        .hero-article,
        .hero-article .carousel-inner .active img
        {
            height: 600px;
        }
        .singup-wraper.singup-wraper {
            width: 350px;
        }
        a.navbar-brand {color:#37a000; font-weight: bold; font-size:30px;}
        a.navbar-brand span{color:#333;}
    </style>
</head>
<body class="homepage">


@include('layouts.header')

@yield('content')

@include('layouts.footer')

<script src="{{ asset('js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- Toggle Side Menu -->
<script>
    $(document).ready(function(){
        $(".submenu-link").click(function(){
            $('.sub-menu-open').slideToggle(function(){
            });
        });

        $('.employeedd').click(function(){
            $('.sub-dropdown').slideToggle(function(){
            });
        });
    });
</script>

<!-- masonry plugin -->
<script src="{{ asset('js/libs/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/libs/imagesloaded.pkgd.min.js') }}"></script>

<script type="text/javascript">
    var $grid = $('.product-section__products');
    $grid.masonry({itemSelector: '.product-box', fitWidth: true, gutter: 10
    });

    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });

</script>

<!-- tabs for sign up and sign in-->
<script type="text/javascript">
    $('#signUp a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('.signin-toggle').on('click',function(){
        $('.singup-wraper').fadeToggle(300);
        $('.search-wraper').hide();
    })

    $('.search-toggle').on('click',function(){
        $('.search-wraper').fadeToggle(300);
        $('.singup-wraper').hide();
    })

    $('.browse_toggle').on('click',function(){
        $('.nav__list').slideToggle(300);
    })


    $('.navbar-toggle').on('click',function(){
        $('.main-menu-mobile').slideToggle(200, function(){
                }
        );
    });
</script>

<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="js/jquery.dropdown.js"></script>

<!--Notification Modules-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#headNotification').on('click', function () {
            $('#notification').toggle();
            $('#msg-notification').hide();
        });
    });
</script>

<!--Notification Modules-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#headMessages').on('click', function () {
            $('#msg-notification').toggle();
            $('#notification').hide();
        });
    });
</script>

</body>
</html>
