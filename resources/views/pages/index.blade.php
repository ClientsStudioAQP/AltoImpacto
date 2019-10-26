@extends('pages.layout')

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/unite-gallery.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ug-theme-default.css')}}">
@endpush

@section('content')



    <div class="go-cotization-button">
        <a href="#">
            <h2>Cotiza tu Proyecto</h2>
        </a>
    </div>


    <div class="welcome-container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="semi-big-title align-right cocogose-black text-orange ">PUBLICIDAD INTEGRAL</h1>
                <div class="row">
                    <div class="push-right"></div>
                    <div class="slider-description carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2 class="medium-subtitle align-right cocogose-black ">Creatividad</h2>
                            </div>
                            <div class="carousel-item">
                                <h2 class="medium-subtitle align-right cocogose-black ">Estrategia</h2>
                            </div>
                            <div class="carousel-item">
                                <h2 class="medium-subtitle align-right cocogose-black">Diseño Grafico</h2>
                            </div>
                            <div class="carousel-item">
                                <h2 class="medium-subtitle align-right cocogose-black">Planeamiento</h2>
                            </div>
                            <div class="carousel-item">
                                <h2 class="medium-subtitle align-right cocogose-black">Publicidad</h2>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-4 orange-image-container">
                <img class="orange-img" src="{{asset('/img/orange-pic.png')}}" alt="">
            </div>
        </div>
        <br><br><br><br>
    </div>

    <div class="row description-services">
        <div class="col-4 hand-card">
            <img src="{{asset('/img/mano-tarjeta.png')}}" alt="">
        </div>
        <div class="col-8">
            <div class="title-description">
                <h1 class="align-right text-white cocogose-black">LE SACAMOS EL JUGO </h1>
                <h2 class="align-right brandon-black text-white ">A tu Proyecto</h2>
            </div>
            <div class="row ">
                <div class="col-md-4 image-description">
                    <img src="{{asset('/img/vectors/mano-lapiz.png')}}" alt="">
                    <div class="title-description-skills">
                        <h4>Direccionamiento Estratégico</h4>
                        <h5>Saber a donde apuntamos es vital</h5>
                    </div>

                </div>

                <div class="col-md-4 image-description">
                    <img src="{{asset('/img/vectors/foco.png')}}" alt="">
                    <div class="title-description-skills" style="width: 73%;">
                        <h4>Creatividad Publicitaria</h4>
                        <h5>Le damos una solución</h5>
                    </div>
                </div>
                <div class="col-md-4 image-description">
                    <img src="{{asset('/img/vectors/cerebro.png')}}" alt="">
                    <div class="title-description-skills" style="width: 70%;">
                        <h4 class="ml-lg-5">Equipo innovador</h4>
                        <h5>Grupo con experiencia</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="message-about">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="about-img-container">
                    <img src="{{asset('/img/vectors/idea1.png')}}" alt="">
                </div>
            </div>
            <div class="col-5">
                <div class="about-title-container">
                    <h1>Hola, somos</h1>
                    <h2>Alto Impacto</h2>
                </div>
                <div class="about-text-container">
                    <p>Somos una Agencia de Publicidad Integral, con más de 8 años,
                        de experiencia ofreciendo la atención personalizada a clientes
                        de diferentes rubros, para ello contamos con personal debidamente
                        capacitado acompañado de Maquinaria de última generación
                        que nos permite estar a la altura de sus expectativas. <br></p>

                    <p>Iniciamos nuestras labores en Arequipa la ciudad Blanca, como
                        una decisión de cambiar la forma en hacer publicidad en el Sur
                        del país. La combinación entre experiencia y juventud han
                        hecho que apostemos por iniciar una agencia diferente, con
                        mucha personalidad enfocada básicamente en dar un excelente
                        servicio a nuestros clientes.</p>

                </div>

            </div>
        </div>
    </div>

    <div class="clients-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="clients-list">
                    <div class="clients-title">
                        <h2>Nuestros Clientes</h2>
                    </div>
                    <div class="first-row">
                        <img src="{{asset('/img/clients/kr.png')}}" alt="">
                        <img src="{{asset('/img/clients/caja.png')}}" alt="">
                        <img src="{{asset('/img/clients/club.png')}}" alt="">
                        <img src="{{asset('/img/clients/city.png')}}" alt="">
                    </div>
                    <div class="second-row">
                        <img src="{{asset('/img/clients/credinka.png')}}" alt="">
                        <img src="{{asset('/img/clients/capriccio.png')}}" alt="">
                        <img src="{{asset('/img/clients/incamo.png')}}" alt="">
                        <img src="{{asset('/img/clients/ucsm.png')}}" alt="">
                    </div>
                    <div class="third-row">
                        <img src="{{asset('/img/clients/socosani.png')}}" alt="">
                        <img src="{{asset('/img/clients/britany.png')}}" alt="">
                        <img src="{{asset('/img/clients/dimaco.png')}}" alt="">
                        <img src="{{asset('/img/clients/hapy.png')}}" alt="">
                    </div>
                    <div class="fourth-row">
                        <img src="{{asset('/img/clients/sanpablo.png')}}" alt="">
                        <img src="{{asset('/img/clients/cultural.png')}}" alt="">
                        <img src="{{asset('/img/clients/imperium.png')}}" alt="">
                        <img src="{{asset('/img/clients/real.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-container">
        <div class="row">
            <video src="https://www.videvo.net/videvo_files/converted/2015_10/preview/Typing_light_01_Videvo.mov82329.webm" controls >
            </video>
        </div>
    </div>

    <div class="portfolio-container">
        <div class="description-portfolio">
            <div class="row">
                <div class="col-6">
                    <div class="title-portfolio">
                        <h1>Nuestros Proyectos</h1>
                        <h2>Nuestra mejor cara</h2>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-description-portfolio">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad asperiores assumenda dignissimos dolorem dolorum error,
                            esse est inventore laboriosam laborum nemo odio omnis perspiciatis, provident quae quis sit soluta?Lorem ipsum dolor sit amet,
                            consectetur  adipisicing elit. Accusantium ad asperiores assumenda dignissimos dolorem dolorum error,  esse est inventore laboriosam
                            laborum nemo odio omnis perspiciatis, provident quae quis sit soluta?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-portfolio">
            <div class="row">
                <div id="gallery" class="" >

                        @foreach($proyectos as $proyecto)
                            <a href="{{ $proyecto->link_post }}" target="_blank" class="ug-tile-icon ug-icon-link">
                                <img src="{{asset('/img/proyectos/credinka.jpg')}}" alt="{{ $proyecto->name }}">
                            </a>
                        @endforeach

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/credinka.jpg')}}" alt="Pluma Publicitaria Credinka">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/fia.jpg')}}" alt="Presentes en la Fia 2019">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/rosatel.jpg')}}" alt="Letrero Rosatel">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/panamericana.jpg')}}" alt="Banner para Panamericana">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/rumi.jpg')}}" alt="Activacion Rumi">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/supermix.jpg')}}" alt="BTL para Supermix">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/ucsm.jpg')}}" alt="Activacion Universidad Catolica Santa Maria">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/ucsm2.jpg')}}" alt="Teatro Universidad Catolica Santa Maria">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="{{asset('/img/proyectos/vinil_perforado.jpg')}}" alt="Vinil Perforado">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="http://unitegallery.net/newimages/image10.jpg" alt="Titulo Imagen 10">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="http://unitegallery.net/newimages/image11.jpg" alt="Titulo Imagen 11">
                        </a>

                        <a href="google.com" target="_blank" class="ug-tile-icon ug-icon-link">
                            <img src="http://unitegallery.net/newimages/image12.jpg" alt="Titulo Imagen 12">
                        </a>
                    </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')
    <script src="{{asset('/js/unitegallery.js')}}"></script>
    <script src="{{asset('/js/ug-theme-tiles.js')}}"></script>
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#gallery").unitegallery({
                tile_enable_action: true,			//enable icons in mouseover mode
                tile_show_link_icon: true,
                tile_enable_textpanel: true,
                tile_textpanel_title_text_align: "center",
                gallery_theme: "tiles",			//choose gallery theme (if more then one themes includes)
                gallery_width:"90%",				//gallery width
                gallery_min_width: "100%",				//gallery minimal width when resizing
                gallery_background_color: "#ffffff",
                tile_enable_overlay: true,			//enable tile color overlay (on mouseover)
                tile_overlay_opacity: 0.4,			//tile overlay opacity
                tile_overlay_color: "#f66000",
                tile_textpanel_bg_opacity: 0.8,		 	//textpanel background opacity
                tile_textpanel_bg_color:"#f66000"
            });
        });

    </script>
@endpush
