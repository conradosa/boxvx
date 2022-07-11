@extends('layouts.site')

@section('title')
    <title>Mentoria</title>
@endsection

@section('content')
    <header id="site-header" class="site-header header-style-2 header-fullwidth sticky-header header-static">
        <div class="octf-main-header">
            <div class="octf-area-wrap">
                <div class="container-fluid octf-mainbar-container">
                    <div class="octf-mainbar">
                        <div class="octf-mainbar-row octf-row">
                            <div class="octf-col logo-col">
                                <div id="site-logo" class="site-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('images/logo small.png')}}" alt="Box Visual Experience" class="">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col menu-col">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu">
                                        <li>
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li><a href="{{route('quemsomos')}}">Quem Somos</a></li>
                                        <li class="menu-item-has-children"><a href="{{route('servicos')}}">Serviços</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('servicos').'#motions'}}">Motions Graphics</a>
                                                <li><a href="{{route('servicos').'#videosinstitucionais'}}">Vídeos
                                                        Institucionais</a>
                                                <li><a href="{{route('servicos').'#transmissoes'}}">Captação e Transmissões</a>
                                                <li><a href="{{route('servicos').'#pacotesgraficos'}}">Pacotes Gráficos</a>
                                                <li><a href="{{route('servicos').'#edicao'}}">Edição</a>
                                                <li><a href="{{route('servicos').'#telas'}}">Telas de Grande Porte</a>
                                                <li><a href="{{route('servicos').'#estudioimersao'}}">Estúdio de Imersão</a>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children current-menu-item current-menu-ancestor"><a href="{{route('mentoria')}}">Mentoria</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('mentoria').'#cursos'}}">Cursos</a></li>
                                                <li><a href="{{route('mentoria').'#consultoria'}}">Consultoria</a></li>
                                                <li><a href="{{route('mentoria').'#direcaotecnica'}}">Direção Técnica</a></li>
                                            </ul>
                                        </li>
                                        <!--
                                        <li name="jobs"><a href="">Jobs</a></li>
                                        -->
                                        @if(Auth::check())
                                            <li><a href="{{route('admin')}}">Administrador</a></li>
                                            <li><a href="{{route('logout')}}">Sair</a></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                            <div class="octf-col cta-col text-right">
                                <div class="octf-btn-cta">
                                    <div class="octf-header-module">
                                        <div class="btn-cta-group contact-header">
                                            <i class="fas fa-phone"></i>
                                            <div class="cinfo-header">
                                                <span>WhatsApp</span>
                                                <span class="main-text"><a
                                                        href="https://api.whatsapp.com/send?phone=555195585116&text=Ol%C3%A1!%20%3A-)"
                                                        target="_blank">(51) 995-585-116</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_mobile">
            <div class="container">
                <div class="mlogo_wrapper clearfix">
                    <div class="mobile_logo">
                        <a href="">
                            <img src="{{asset('images/logo.svg')}}" alt="Box Visual Experience">
                        </a>
                    </div>
                    <div id="mmenu_toggle">
                        <button></button>
                    </div>
                </div>
                <div class="mmenu_wrapper">
                    <div class="mobile_nav collapse">
                        <ul id="menu-main-menu" class="mobile_mainmenu">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="current-menu-item current-menu-ancestor"><a href="{{route('quemsomos')}}">Quem Somos</a></li>
                            <li class="menu-item-has-children"><a href="{{route('servicos')}}">Serviços</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('servicos').'#motions'}}">Motions Graphics</a>
                                    <li><a href="{{route('servicos').'#videosinstitucionais'}}">Vídeos Institucionais</a>
                                    <li><a href="{{route('servicos').'#transmissoes'}}">Captação e Transmissões</a>
                                    <li><a href="{{route('servicos').'#pacotesgraficos'}}">Pacotes Gráficos</a>
                                    <li><a href="{{route('servicos').'#edicao'}}">Edição</a>
                                    <li><a href="{{route('servicos').'#telas'}}">Telas de Grande Porte</a>
                                    <li><a href="{{route('servicos').'#estudioimersao'}}">Estúdio de Imersão</a>
                                </ul>
                            </li>
                            <li class="menu-item-has-children current-menu-item current-menu-ancestor"><a href="{{route('mentoria')}}">Mentoria</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('mentoria').'#cursos'}}">Cursos</a></li>
                                    <li><a href="{{route('mentoria').'#consultoria'}}">Consultoria</a></li>
                                    <li><a href="{{route('mentoria').'#direcaotecnica'}}">Direção Técnica</a></li>
                                </ul>
                            </li>
                            <!--
                            <li><a href="">Jobs</a></li>
                            -->
                            @if(Auth::check())
                                <li><a href="{{route('admin')}}">Administrador</a></li>
                                <li><a href="{{route('logout')}}">Sair</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">
        <div class="page-header flex-middle">
            <div class="container">
                <div class="inner flex-middle">
                    <h1 class="page-title">Mentoria</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Mentoria</li>
                    </ul>
                </div>
            </div>
        </div>
        <section id="cursos" class="portfolio-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Cursos </h3>
                        <blockquote>
                            <p>Capacitação nas mais diversas áreas e softwares relacionados ao setor audiovisual.</p>
                        </blockquote>
                        <div id="consultoria" class="simple-slider owl-theme owl-carousel">
                            <div class="projects-slide-item">
                                <img src="{{asset('images/site/cursos1.jpg')}}" alt="">
                            </div>
                            <div class="projects-slide-item">
                                <img src="{{asset('images/site/cursos2.jpg')}}" alt="">
                            </div>
                        </div>
                        <h3>Consultoria </h3>
                        <blockquote>
                            <p>Profissionais qualificados, que irão levantar suas necessidades, através de análises e
                                processos, e assim então recomendar soluções e melhorias.</p>
                        </blockquote>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset('images/site/consultoria.jpg')}}" alt="" class="single-project-img">
                    </div>
                </div>
                <div class="row" id="direcaotecnica">
                    <div class="col-md-12">
                        <h3>Direção Técnica </h3>
                        <blockquote>
                            <p>Profissionais capacitados com grande experiência que irão projetar, planejar e entregar
                                as necessidades técnicas do seu evento.
                            </p>
                        </blockquote>
                        <div class="simple-slider owl-theme owl-carousel">
                            <div class="projects-slide-item">
                                <img src="{{asset('images/site/direcao1.jpg')}}" alt="">
                            </div>
                            <div class="projects-slide-item">
                                <img src="{{asset('images/site/direcao2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
