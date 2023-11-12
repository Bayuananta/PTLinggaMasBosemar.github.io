<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT LINGGA MAS BOSEMAR</title>
    <link href="{{ asset('assets/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/about.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/brands.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/solid.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    {{-- START NAVBAR --}}
    <nav class="navbar">
        <div class="navbar-wrapper container">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('images/logo.jpg')}}" alt="logo" height="60px" class="logo"/>
            </a>
            <div class="navbar-content">
                <a href="{{route('index')}}" class="navbar-item">Home</a>
                <button class="navbar-item btn">Contact</button>
                <button class="btn navbar-item" type="button">Register</button>
                <button class="btn navbar-button" type="button">Login</button>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>