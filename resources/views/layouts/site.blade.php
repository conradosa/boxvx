<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="Description"
          content="Nossa missão é criar, planejar e executar eventos com comprometimento e excelência. Ecoar as suas emoções e experiências é o que nos motiva. Com a busca incessante em estudo e pesquisa, buscamos promover um mercado ético e sustentável. Queremos ser lembrados por entregar serviços de alta qualidade e soluções criativas para os mais diversos desafios.">
    @yield('title')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/royal-preload.css')}}"/>
</head>

<body class="royal_preloader">
<div id="page" class="site">
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <footer id="site-footer" class="site-footer footer-v2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('images/logo3.png')}}" alt="Logo Box">
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info box-style2 ft-contact-info">
                        <div class="box-icon"><i class="flaticon-world-globe"></i></div>
                        <p>Rua Catumbi, 301 - Medianeira, Porto Alegre - RS</p>
                        <h6>Endereço</h6>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info box-style2 ft-contact-info">
                        <div class="box-icon"><i class="flaticon-envelope"></i></div>
                        <p>contato@boxvx.com</p>
                        <h6>E-mail</h6>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info box-style2 ft-contact-info">
                        <div class="box-icon"><i class="flaticon-phone-1"></i></div>
                        <p><a style="color: white;"
                              href="https://api.whatsapp.com/send?phone=555195585116&text=Ol%C3%A1!%20%3A-)"
                              target="_blank">(51) 995-585-116</a></p>
                        <h6>WhatsApp</h6>
                    </div>
                </div>
            </div>
            <div class="space-65"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('quemsomos')}}">Quem Somos</a></li>
                            <li><a href="{{route('servicos')}}">Serviços</a></li>
                            <li><a href="{{route('mentoria')}}">Mentoria</a></li>
                            <!--
                            <li><a href="">Jobs</a></li>
                            -->
                        </ul>
                    </div>
                    <div class="space-20"></div>
                    <p class="copyright-text v2">Copyright © 2022 Box Visual Experience.</p>
                    <div class="space-26"></div>
                    <div class="ft-list-icon">
                        <a class="twitter" href="https://www.youtube.com/channel/UC-sItm9dJBybPYLAhremIkA"><i
                                class="fab fa-youtube"></i></a>
                        <a class="facebook" href="https://www.facebook.com/boxvisualexperience"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="linkedin" href="https://www.linkedin.com/company/box-visual-experience"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="instagram" href="https://www.instagram.com/boxvisualexperience/"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/easypiechart.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/header-mobile.js')}}"></script>
<script src="{{asset('js/royal_preloader.min.js')}}"></script>
<script>
    window.jQuery = window.$ = jQuery;
    (function ($) {
        "use strict";
        Royal_Preloader.config({
            mode: 'logo',
            logo: 'images/cubo.png',
            logo_size: [100, 115],
            showProgress: false,
            showPercentage: false,
            text_colour: '#37549c',
            background: '#ffffff'
        });
    })(jQuery);
</script>
</body>
</html>
