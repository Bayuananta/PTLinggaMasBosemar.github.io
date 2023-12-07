<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT LINGGA MAS BOSEMAR</title>
    {{-- <link href="{{ asset('/assets/style.css')}}" rel="stylesheet" /> --}}
    <link href="{{ asset('/assets/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/features.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/about.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/footer.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/fontawesome.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/brands.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/solid.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
    @yield('stylesheet')
</head>

<body>
    {{-- START NAVBAR --}}
    <nav class="navbar">
        <div class="navbar-wrapper container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('images/logo.jpg')}}" alt="logo" height="60px" class="logo"/>
            </a>
            <div class="navbar-content">
                <a href="{{route('index')}}" class="navbar-item">Home</a>
                <a href="{{route('contact')}}" class="navbar-item btn">Contact</a>
                <a href="{{route('login')}}" class="btn navbar-button" type="button">Login</a>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.about-image').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 10000,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });
    });
</script>
</html>