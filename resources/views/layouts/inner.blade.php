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
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
        }
        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #pac-input {
            /*background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;*/
            width: 260px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        .pac-container {
            font-family: Roboto;
        }
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

@include('layouts.footer-inner')

<script src="{{ asset('js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<script>

    function initMap() {
        var input = document.getElementById('pac-input');


        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            document.getElementById('placeInfo').innerHTML = '<div><strong>' + place.name + '</strong><br>' + address;
            followLocation(input.value);
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsU59UkjuUqV5p18eHfPHivkFVdb80ERc&libraries=places&callback=initMap" async defer></script>
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
    function followLocation(loc){
        $.ajax({
            type: 'GET',
            url: '{{ route('follow_location') }}',
            data: {'location':loc},
            datatype: 'html',
            success: function(data) {
                if(data.success == true) {
                    $('#follow_places').html(data.html);
                }
            }
        });
    }
    $('.delete-location').on('click',function(){
        var location_id = $(this).attr("data-content");
        $.ajax({
            type: 'GET',
            url: '{{ route('unfollow_location') }}',
            data: {'location_id':location_id},
            datatype: 'html',
            success: function(data) {
                if(data.success == true) {
                    $('#follow_places').html(data.html);
                }
            }
        });
    });
</script>
</body>
</html>
