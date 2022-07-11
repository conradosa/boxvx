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

<style>
    :root {
        --image-comparison-slider-width: min(80vw, 800px);
        --image-comparison-slider-handle-width: 50px;
    }

    #image-comparison-slider {
        position: relative;
        width: var(--image-comparison-slider-width);
        overflow: hidden;
        border-radius: 0.5rem;
        box-shadow: -7px 5px 16px 1px rgba(56, 86, 122, 0.6);
        cursor: col-resize;
    }

    #image-comparison-slider img {
        display: block;
        width: var(--image-comparison-slider-width);
        height: auto;
        max-height: 80vh;
        object-fit: cover;
        pointer-events: none;
        user-select: none;
    }

    #image-comparison-slider .img-wrapper {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
        transform: translateZ(0); /* This is in order to fix a Firefox bug, related to the 3D tilt effect */
        /* transition: 0.25s cubic-bezier(.03,.98,.52,.99); */
    }

    #image-comparison-slider .img-wrapper img {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
    }

    #image-comparison-slider .label {
        position: absolute;
        top: 1rem;
        z-index: 3;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.33);
        border-radius: 0.25rem;
        padding: 0.5rem 0.75rem;
        font-size: 0.85rem;
        text-align: center;
        letter-spacing: 1px;
        user-select: none;
        opacity: 0;
        transition: 0.25s cubic-bezier(.68, .26, .58, 1.22);
    }

    #image-comparison-slider:hover .label {
        opacity: 1;
    }

    #image-comparison-slider .label.label-before {
        left: 1rem;
    }

    #image-comparison-slider .label.label-after {
        right: 1rem;
        background-color: #0780eb;
    }

    #image-comparison-slider .handle {
        position: absolute;
        top: 0;
        left: calc(50% - var(--image-comparison-slider-handle-width) / 2);
        width: var(--image-comparison-slider-handle-width);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        user-select: none;
        z-index: 2;
        /* transition: 0.25s cubic-bezier(.03,.98,.52,.99); */
    }

    #image-comparison-slider .handle-line {
        width: 2px;
        flex-grow: 1;
        background-color: #fff;
    }

    #image-comparison-slider .handle-circle {
        width: var(--image-comparison-slider-handle-width);
        height: var(--image-comparison-slider-handle-width);
        color: #fff;
        border: 2px solid #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        /* background-color: rgba(0,0,0,0.5); */
    }

    @media (max-width: 800px) {
        :root {
            --image-comparison-slider-width: 90vw;
        }
    }
</style>

<body class="royal_preloader">
<div id="page" class="site">
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
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
