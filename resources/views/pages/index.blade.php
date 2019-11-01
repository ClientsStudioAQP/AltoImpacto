@extends('pages.layout')

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/unite-gallery.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ug-theme-default.css')}}">
@section('content')
    <div class="go-cotization-button">
        <a href="#">
            <h2>Cotiza tu Proyecto</h2>
        </a>
    </div>

    <div class="welcome-container" id="welcome-section">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xs-12">
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
            <div class="col-md-5 d-none d-sm-block orange-image-container">
                <img class="orange-img" src="{{asset('/img/orange-pic.png')}}" alt="">
            </div>
        </div>
        <br><br><br><br>
    </div>

    <div class="row description-services" id="description-services-section">
        <div class="col-md-4 d-none d-sm-block hand-card">
            <img src="{{asset('/img/mano-tarjeta.png')}}" alt="">
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="title-description">
                <h1 class="align-right text-white cocogose-black">LE SACAMOS EL JUGO </h1>
                <h2 class="align-right brandon-black text-white ">A tu Proyecto</h2>
            </div>
            <div class="row ">
                <div class="col-md-4 col-xs-12">
                    <div class="image-description image-hand-pen">
                        <img src="{{asset('/img/vectors/mano-lapiz.png')}}" alt="">
                    </div>
                    <div class="title-description-skills">
                        <h3>Direccionamiento</h3>
                        <h4>Estratégico</h4>
                        <h5>Saber a donde apuntamos es vital</h5>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="image-description image-foco">
                        <img src="{{asset('/img/vectors/foco.png')}}" alt="">
                    </div>
                    <div class="title-description-skills foco-title">
                        <h3>Creatividad</h3>
                        <h4>Publicitaria</h4>
                        <h5>Te brinda una solución alternativa</h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="team-container">
                        <div class="image-description image-brain">
                            <img src="{{asset('/img/vectors/cerebro.png')}}" alt="">
                        </div>
                        <div class="title-description-skills brain-title">
                            <h3>Equipo</h3>
                            <h4>innovador</h4>
                            <h5>Contamos con el personal idoneo</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="message-about">
        <div class="row justify-content-center">
            <div class="col-md-5 d-none d-sm-block">
                <div class="about-img-container">
                    <img src="{{asset('/img/vectors/idea1.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
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
                <div class="regtangle-type-1">
                    <i class="fa fa-square-full"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="clients-container" id="portfolio-section">
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
        <div class="row description-portfolio">
            <div class="col-md-5 col-xs-12">
                <div class="title-portfolio">
                    <h1>Nuestros Proyectos</h1>
                    <h2>Nuestra mejor cara</h2>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 d-flex justify-content-center">
                <div class="text-description-portfolio">
                    <p>
                        Asumimos cada uno de los proyecto como un
                        reto, para superarnos como agencia
                        publicitaria y claro está cubrir las expectativas
                        de nuestros clientes, ya que en el desarrollo le
                        ponemos nuestro “TOQUE”.
                    </p>
                    <p>
                        Toque que nos da la experiencia de estar en
                        un mercado tan competitivo, a continuación
                        observa un poco de nosotros.
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="stamp-phrase">
                    <p class="block-simple-text">
                        Cada Proyecto
                    </p>
                    <p class="block-resalt-text">
                        un reto
                    </p>
                    <p class="block-simple-text go-right">
                        y lo asumimos
                    </p>
                    <br>
                    <p class="points-separator">
                        .....................................
                    </p>
                </div>
            </div>
        </div>

        <div class="gallery-portfolio">
            <div class="row">
                <div id="gallery" class="" >
                    @foreach($proyectos as $proyecto)
                        @if($proyecto->photos->count() > 0)
                            <a href="{{ $proyecto->link_post }}" target="_blank" class="ug-tile-icon ug-icon-link">
                                <img src="{{ $proyecto->photos->first()->url }}" alt="{{ $proyecto->name }}">
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="contact-section">
        <div class="cotization-form-container">
            <div class="col-md-11">
                <div class="row cotization-panel">
                    <div class="col-md-1 d-none d-sm-block"></div>
                    <div class="col-md-11">
                        <div class="row d-flex justify-content-endt">
                            <div class="col-md-4 d-none d-sm-block form-img-airplane">
                                <img src="{{ asset('/img/avion-naranja.png') }}" alt="">
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="form-container">
                                    <div class="form-title">
                                        <h1>Coticemos tu proyecto</h1>
                                        <p>Déjanos tus datos y nosotros nos comunicaremos contigo</p>
                                    </div>
                                    <div class="form-panel">
                                        <div class="title-form-data">
                                            <h3>Tus datos</h3>
                                        </div>
                                        <form action="{{ route('contacto') }}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <input name="name" type="text" class="form-control-custom" />
                                                <label>Nombre</label>
                                            </div>

                                            <div class="input-group">
                                                <input name="email" type="email" class="form-control-custom" />
                                                <label>Email</label>
                                            </div>

                                            <div class="input-group">
                                                <textarea name="description" class="form-control-custom"></textarea>
                                                <label>Describe tu proyecto</label>
                                            </div>

                                            <button class="cotization-button-form">Email</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row localization-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1609.493572767948!2d-71.5587422350836!3d-16.371801528402923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a61e01850e3%3A0x87aa9753b7e36f7e!2sALTO%20IMPACTO%20Publicidad%20Integral!5e0!3m2!1ses!2spe!4v1572565595835!5m2!1ses!2spe" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="col-md-3 d-none d-sm-block ">
            <div class="complete-adress">
                <div class="phones-container">
                    <div class="icon-container">
                        <i class="fa fa-mobile-phone"></i>
                    </div>
                    <div class="phone-data-container">
                        <h5>955 321 321 • (054)52 65 75</h5>
                    </div>
                </div>
                <div class="emails-container">
                    <div class="icon-container">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="email-data-container">
                        <h5>info@altoimpactoperu.com </h5>
                        <h5>leduan.banda@altoimpactoperu.com</h5>
                    </div>

                </div>
                <div class="address-container">
                    <div class="icon-container">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <div class="email-data-container">
                        <h5>Urb. Real Felipe A-6 Cerro Colorado</h5>
                    </div>
                </div>

                <a href="#">
                    <div class="cotization-plus">
                        <div class="data-cotization">
                            <h5>Coticemos tu proyecto</h5>
                            <span>ahora</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="row card-estrategy-direction justify-content-center">
        <div class=" col-md-9">
            <div class="row no-gutters items-container-card">
                <div class="col-md-5 img-container">
                    <img src="{{ asset('/img/vectors/lapiz-b.png') }}" alt="">
                </div>
                <div class="col-md-7">
                    <div class="text-container-card">
                        <div class="row">
                            <div class="title-resalt">
                                <h1>Dirección</h1>
                            </div>
                            <div class="title-normal">
                                <h1>Estratégica</h1>
                            </div>
                        </div>
                        <div class="content-card">
                            <p>Estamos enfocados en diseñar y ejecutar soluciones para nuestros
                                clientes, orientadas a cubrir y superar cualquier necesidad, creando
                                una solución con garantía de resultados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row card-estrategy-direction justify-content-center">
        <div class=" col-md-9">
            <div class="row no-gutters items-container-card">
                <div class="col-md-5 img-container">
                    <img src="{{ asset('/img/vectors/foco-b.png') }}" alt="">
                </div>
                <div class="col-md-7" >
                    <div class="text-container-card" style=" margin-top: 20px">
                        <div class="row">
                            <div class="title-resalt">
                                <h1>Creatividad</h1>
                            </div>
                            <div class="title-normal">
                                <h1>Publicitaria</h1>
                            </div>
                        </div>
                        <div class="content-card">
                            <p>Atraer tu atencion</p>
                            <p>
                                Nos aseguramos de que su empresa llegue a transmitir un mensajea
                                su consumidor potencial de una manera original e innovadora.
                            </p>
                            <p>
                                Utilizando la creatividad para conectar y hacer más atractiva
                                toda tu comunicación.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row card-estrategy-direction justify-content-center">
        <div class=" col-md-9">
            <div class="row no-gutters items-container-card">
                <div class="col-md-5 img-container">
                    <img src="{{ asset('/img/vectors/cerebro-b.png') }}" alt="">
                </div>
                <div class="col-md-7" >
                    <div class="text-container-card" style=" margin-top: 20px">
                        <div class="row">
                            <div class="title-resalt">
                                <h1>Equipo</h1>
                            </div>
                            <div class="title-normal">
                                <h1>Innovador</h1>
                            </div>
                        </div>
                        <div class="content-card">
                            <p>En ALTO IMPACTO ofrecemos a nuestros clientes un equipo creativo
                                y multidisciplinario, con talento y experiencia en el desarrollo de nuevas oportunidades, que mejoren la
                                experiencia de sus consumidores</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row graphic-design justify-content-center">
        <div class="col-md-10 my-auto">
            <div class="items-explanation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="img-container-graphic-design">
                                    <img src="{{ asset('/img/vectors/sr1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="text-explanation graphic-design-explanation">
                                    <h1>
                                        DISEÑO GRÁFICO
                                    </h1>
                                    <h4>
                                        CREATIVIDAD. VISIÓN. IMAGINACIÓN
                                    </h4>
                                    <p>
                                        Desarrollamos gráficamente cada uno de los proyecto gracias
                                        a que somos capaces de comunicar de forma visual su trabajo
                                        haciendo uso de diferentes herramientas de retoque gráfico,
                                        herramientas de producción, técnicas de expresión gráfica y
                                        diferentes tipos de softwares acorde a la coyuntura digital.
                                        La creación de marca, el diseño de piezas publicitarias y la
                                        gestión de redes sociales son las bases de nuestra solución
                                        integral.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row print-description justify-content-center">
        <div class="col-md-10 my-auto">
            <div class="items-explanation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5 col-xs-12">
                                <div class="text-explanation graphic-design-explanation">
                                    <h1>
                                        IMPRESIONES
                                    </h1>
                                    <h4>
                                        RAPIDEZ.CALIDAD.CANTIDAD
                                    </h4>
                                    <p>
                                        Gracias a nuestra moderna maquinaria podemos
                                        brindarte una impresión
                                        con gráficos de gran
                                        duración con excepcional calidad de imagen, sobre el
                                        soporte que desee, rígidos y flexibles.
                                    </p>
                                    <p>
                                        Así mismo utilizamos materiales A1, lo que nos
                                        permite entregarle un producto final con garantía de
                                        durabilidad, y acorde a sus exigencias.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <div class="img-container-graphic-design">
                                    <img src="{{ asset('/img/vectors/sr1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row confections-instalations justify-content-center">
        <div class="col-md-10 my-auto">
            <div class="items-explanation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="img-container-graphic-design">
                                    <img src="{{ asset('/img/vectors/sr1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="text-explanation graphic-design-explanation">
                                    <h1>
                                        CONFECCIONES E INSTALACIONES
                                    </h1>
                                    <h4>
                                        ESTRUCTURAS EN GENERAL
                                    </h4>
                                    <p>
                                        Ofrecemos la elaboración e instalación de estructura
                                        publicitaria a pequeña y gran escala adaptándonos al
                                        espacio que dispone. y brindandote soluciones para tu
                                        negocio.
                                    </p>
                                    <p>
                                        Contamos con un equipo de profesionales especializados
                                        con experiencia en la instalacion de dichas estructuras.
                                    </p>
                                    <p>
                                        BASTIDORES, TOLDOS, PANELES, UNIPOLARES,TOTEM,
                                        VALLAS PUBLICITARIAS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row activations-btl justify-content-center">
        <div class="col-md-10 my-auto">
            <div class="items-explanation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="img-container-graphic-design">
                                    <img src="{{ asset('/img/vectors/sr-5.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="text-explanation graphic-design-explanation">
                                    <h1>
                                        ACTIVACIONES BTL
                                    </h1>
                                    <h4>
                                        ACTIVA TU MARCA EN CUALQUIER LUGAR
                                    </h4>
                                    <p>
                                        Haz que las emociones y sentimientos sean tu mayor imagen
                                        de marca.
                                    </p>
                                    <p>
                                        Nuestro marketing BTL crea un canal de comunicación directo
                                        entre el posible consumidor y la marca, así como una respuesta
                                        más inmediata y sustancialmente mas efectiva.
                                    </p>
                                    <p>
                                        Gracias a nuestras activaciones logramos que el consumidor
                                        experimienta viva una experiencia única, generando
                                        FIDELIZACIÓN y VENTAS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row advertising-advice justify-content-center">
        <div class="col-md-10 my-auto">
            <div class="items-explanation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="text-explanation graphic-design-explanation">
                                    <h1>
                                        ASESORÍA PUBLICITARIA
                                    </h1>
                                    <h4>
                                        TODA NUESTRA EXPERIENCIA A TU DISPOSICIÓN
                                    </h4>
                                    <p>
                                        Nos encargamos de detectar debilidades y distracciones de
                                        tu negocio. Visualizamos la situación real en que se
                                        encuentra en relación con el mercado y la competencia.
                                    </p>
                                    <p>
                                        Analizamos los riesgos internos y externos de tu compañía y
                                        diseñamos un plan de estrategias publicitarias acorde a tus
                                        necesidades y objetivos.
                                    </p>
                                    <p>
                                        Nuestro objetivo: Crear soluciones innovadoras para tu
                                        negocio.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="img-container-graphic-design">
                                    <img src="{{ asset('/img/vectors/sr-6.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ceo-discurso justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <img src="#" alt="">
                </div>
                <div class="col-md-8 my-auto">
                    <div class="ceo-discurso-mark">
                        <div class="ceo-discurso-text">
                            <h1>Leduan Banda Zuñiga</h1>
                            <h2>C.E.O</h2>
                            <p>
                                Iniciamos nuestras labores en Arequipa la ciudad Blanca, como una decisión de
                                cambiar la forma en hacer publicidad en el Sur del país.
                            </p>
                            <p>
                                La combinación entre experiencia y juventud han hecho que apostemos por iniciar
                                una agencia diferente, con mucha personalidad enfocada básicamente en dar un
                                excelente servicio a nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mision-vision justify-content-center">
        <div class="mision-container">
            <div class="col-md-5">
                <h2>Misión</h2>
                <p>
                    Brindar soluciones innovadoras e integrales en
                    Publicidad y Marketing a nuestros clientes para
                    logar el éxito de sus campañas.
                </p>
            </div>
        </div>
        <div class="vision-container">
            <div class="col-md-4">
                <h2>Visión</h2>
                <p>
                    Ser la Agencia líder e innovadora en el rubro
                    de la Publicidad Integral con los más altos
                    parámetros de calidad y dando a nuestros
                    clientes un eficiente resultado.
                </p>
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
                tiles_include_padding: false,
                tile_textpanel_title_text_align: "center",
                gallery_theme: "tiles",			//choose gallery theme (if more then one themes includes)
                gallery_width:"100%",				//gallery width
                gallery_min_width: "100%",				//gallery minimal width when resizing
                gallery_background_color: "#ffffff",
                theme_appearance_order: "shuffle",
                tile_enable_overlay: true,			//enable tile color overlay (on mouseover)
                tile_overlay_opacity: 0.4,			//tile overlay opacity
                tile_overlay_color: "#f66000",
                tile_textpanel_bg_opacity: 0.8,		 	//textpanel background opacity
                tile_textpanel_bg_color:"#f66000"
            });
        });

        $(function(){

            $('.form-control-custom').each(function(){
                changeState($(this));
            });

            $('.form-control-custom').on('focusout', function(){
                changeState($(this));
            });

            function changeState($formControl){
                if($formControl.val().length > 0){
                    $formControl.addClass('has-value');
                }
                else{
                    $formControl.removeClass('has-value');
                }
            }
        });

    </script>
@endpush
