<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Scada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/navigation.css">
    @yield('styles')

</head>
<body>
    <div class="navigation-bar">
        <nav>
            <div class="brand bg-primary">Logo</div>
            <div class="links">
                <div class="link"><a href="/about">About</a></div>
                <div class="link"><a href="#">Our Work</a></div>
                <div class="link"><a href="#">News &amp; Stories</a></div>
                <div class="link"><a href="#">Tools &amp; Reports</a></div>
                <div class="link bg-primary"><a href="#">Take Action</a></div>
                <div class="link bg-secondary"><a href="#" title="Donate"> <ion-icon name="wallet-outline" size="large"></ion-icon></a></div>
            </div>
        </nav>
    </div>

