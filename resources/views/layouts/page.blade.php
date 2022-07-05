<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href={{ asset("assets/css/navigation.css") }}>
    <link rel="stylesheet" href={{ asset("assets/css/messages.css") }}>
    @yield('styles')

</head>
<body class="page-template">
    <div class="processing">
        <div class="spinner"></div>
        <div class="text">
            Please wait
        </div>
    </div>
    <div class="navigation-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="brand bg-primary">
                <a href="/"><img src={{asset("assets/images/logo.png")}} alt="Logo"></a>
            </div>
            <div id="menu">
                <ion-icon name="menu" size="large"></ion-icon>
            </div>
            <div class="links ">
                <div id="close">
                    <ion-icon name="close" size="large"></ion-icon>
                </div>
                <div class="link"><a href="/#about">ABOUT</a></div>
                <div class="link"><a href="/#work">OUR WORK</a></div>
                <div class="link dropdown_parent">
                    <a href="#">RESOURCES</a>
                    <div class="dropdown">
                        <div class="dropdown_link">
                            <a href={{url("/resources/documents")}}>Documents &amp; Reports</a>
                        </div>
                        <div class="dropdown_link">
                            <a href={{url("/resources/videos")}}>Videos</a>
                        </div>
                        <!--<div class="dropdown_link">-->
                        <!--    <a href={{ url('/resources/images') }}>Gallery</a>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="link bg-primary" id="action"><a href="/join">TAKE ACTION</a></div>
                <div class="link mobile">
                    <a href="/donate">
                        <ion-icon name="wallet-outline" size="large"></ion-icon> Donate
                    </a>
                </div>
                <div class="link bg-secondary">
                    <a href="/donate" title="Donate" id="donate"> 
                        <ion-icon name="wallet-outline" size="large"></ion-icon> 
                    </a>
                </div>
                </div>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <footer>
            <div class="activism">
                <h3>Contact Details</h3>
                <div class="links">
                    <address>
                      <div class="link"><a href="">Hse.#: 63, Olympics Road <br> Off Faanofa Road, Kokomlemle </a> </div>
                      <div class="link"><a href="">Private Mail Bag 145, Accra-North Ghana </a> </div>
                      <div class="link"><a href="mailto:info@amnestyghana.org">info@amnestyghana.org</a> </div>
                      <div class="link"><a href="tel:+233302220814">+233 (0) 302220814</a></div>
                    </address>
                </div>
            </div>


            <div class="who-we-are">
                <h3>WHO WE ARE</h3>
                <div class="links">
                    <div class="link"><a href="/#about">About us</a></div>
                    <div class="link"><a href="/#work">Our Work</a></div>
                    <div class="link"><a href="/#contact">Contact</a></div>
                    <div class="link"><a href="/join">Become an Official Member</a></div>
                    <!--<div class="link">-->
                    <!--    <a class="btn-flex md-btn-primary" href="/donate">-->
                    <!--        <ion-icon name="wallet-outline" size="small"></ion-icon> Donate-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>
            </div>


            <div class="campaigns">
                <h3>Social Media</h3>
                <div class="links">
                    <div class="link"><a target="_blank" class="flex" href="https://web.facebook.com/amnestyghana"> <ion-icon name="logo-facebook" size="small"></ion-icon> Facebook</a></div>
                    <div class="link"><a target="_blank" class="flex" href="https://www.instagram.com/amnesty_ghana"><ion-icon name="logo-instagram" size="small"></ion-icon> Instagram</a></div>
                    <div class="link"><a target="_blank" class="flex" href="https://www.twitter.com/amnestyghana"><ion-icon name="logo-twitter" size="small"></ion-icon> Twitter</a></div>
                    <div class="link"><a target="_blank" class="flex" href="https://www.youtube.com/channel/UCQSBqsyvKETC9E3HJrGNi1A"><ion-icon name="logo-youtube" size="small"></ion-icon> Youtube</a></div>
                </div>
            </div>
           
            <div class="mail-list">
                <h3>JOIN OUR MAILING LIST</h3>
                <div class="links">
                  <form class="subscribe">
                    <input type="email" placeholder="Enter Email" class="sub-email" required>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="button">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                  </form>
                </div>
            </div>
        </footer>


    </div>
    <script src={{asset("/assets/js/messages.js")}}></script>
    <script src={{asset("/assets/js/menu.js")}}></script>
    <!--{{-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> --}}-->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <script src={{asset("/assets/js/subscribe.js")}}></script>
    <script src={{asset("/assets/js/downloader.js")}}></script>
    @yield('scripts')
</body>
</html>
