<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/AIDesktop.css')}}">
    <link rel="stylesheet" href="{{asset('/css/AIResponsive.css')}}">
    <script src="https://kit.fontawesome.com/6e4a5b8031.js" crossorigin="anonymous"></script>

    @stack('styles')

    <title>{{  config('app.name') }}</title>
</head>
<body>
<div class="container-fluid">
    <header>
        <div class="logo-plain">
            <img src="{{asset('/img/log-alto.png')}}" alt="">
        </div>
        <div class="button_container" id="toggle" onclick="onclickMenu()">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
        <div class="overlay" id="overlay">
            <div class="logo">
                <a href="#" class="">
                    <img src="{{asset('/img/logo-blanco.png')}}" alt="">
                </a>
            </div>
            <nav class="overlay-menu">
                <ul id="navList" onclick="myFunction(event)">
                    <li class="active"><a href="#welcome-section">Nosotros</a></li>
                    <li><a href="#description-services-section" onclick="onclickItem()">Servicios</a></li>
                    <li><a href="#portfolio-section">Portafolio</a></li>
                    <li><a href="#contact-section">Contacto</a></li>
                    <li class="social-links">
                        <a href="https://www.facebook.com/altoimpactopublicidad/" target="_blank">
                            <img src="{{asset('/img/icons/fa.png')}}" alt="">
                        </a>
                        <a href="https://twitter.com/altoimpactoperu" target="_blank">
                            <img src="{{asset('/img/icons/twi.png')}}" alt="">
                        </a>
                        <a href="https://www.instagram.com/explore/locations/113247568703671/alto-impacto-publicidad-integral/" target="_blank">
                            <img src="{{asset('/img/icons/ins.png')}}" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="cotization-link">
                <a href="#contact-section">
                    <h4>COTIZEMOS TU PROYECTO</h4>
                    <img src="img/avion.png" alt="">
                </a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer >
        <div class="row footer-pages">
            <div class="col-4">
                <div class="copyrigth">
                    <h5>&copy; 2019 By Alto Impacto</h5>
                </div>
            </div>

            <div class="col-4">
                <div class="button-cotization text-center ">
                    <a href="#" class="button-outline">
                        <h4>Cotiza tu proyecto</h4>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="social-links-footer">
                    <a href="https://twitter.com/altoimpactoperu" target="_blank">
                        <img src="{{asset('/img/icons/twi.png')}}" alt="">
                    </a>
                    <a href="https://www.facebook.com/altoimpactopublicidad/" target="_blank">
                        <img src="{{asset('/img/icons/fa.png')}}" alt="">
                    </a>
                    <a href="https://www.instagram.com/explore/locations/113247568703671/alto-impacto-publicidad-integral/" target="_blank">
                        <img src="{{asset('/img/icons/ins.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script >
    var menu = document.getElementById("toggle");
    var overlay = document.getElementById("overlay");

    function onclickMenu(){
        menu.classList.toggle('active');
        overlay.classList.toggle('open');
    }

    function onclickItem(){
        overlay.classList.remove('open');
        menu.classList.remove('active');
    }

    function myFunction(e) {
        if (document.querySelector('#navList li.active') !== null) {
            document.querySelector('#navList li.active').classList.remove('active');
        }
        e.target.parentNode.className = "active";
    }

</script>

<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/notify.js')}}" ></script>
@if( session()->has('flash'))
    <script>
        $.notify("{{ session('flash') }}", "success");
    </script>
@endif
@stack('scripts')
</body>
</html>
