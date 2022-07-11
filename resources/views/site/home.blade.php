@extends('layouts.site')

@section('title')
    <title>Box Visual Experience</title>
@endsection

@section('content')
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
    <header id="site-header" class="site-header header-style-2 header-fullwidth sticky-header header-static">
        <div class="octf-main-header">
            <div class="octf-area-wrap">
                <div class="container-fluid octf-mainbar-container">
                    <div class="octf-mainbar">
                        <div class="octf-mainbar-row octf-row">
                            <div class="octf-col logo-col">
                                <div id="site-logo" class="site-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('images/logo small.png')}}" alt="Box Visual Experience"
                                             class="">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col menu-col">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu">
                                        <li class="current-menu-item current-menu-ancestor">
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li><a href="{{route('quemsomos')}}">Quem Somos</a></li>
                                        <li class="menu-item-has-children"><a href="{{route('servicos')}}">Serviços</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('servicos').'#motions'}}">Motions Graphics</a>
                                                <li><a href="{{route('servicos').'#videosinstitucionais'}}">Vídeos
                                                        Institucionais</a>
                                                <li><a href="{{route('servicos').'#transmissoes'}}">Captação e
                                                        Transmissões</a>
                                                <li><a href="{{route('servicos').'#pacotesgraficos'}}">Pacotes
                                                        Gráficos</a>
                                                <li><a href="{{route('servicos').'#edicao'}}">Edição</a>
                                                <li><a href="{{route('servicos').'#telas'}}">Telas de Grande Porte</a>
                                                <li><a href="{{route('servicos').'#estudioimersao'}}">Estúdio de
                                                        Imersão</a>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="{{route('mentoria')}}">Mentoria</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('mentoria').'#cursos'}}">Cursos</a></li>
                                                <li><a href="{{route('mentoria').'#consultoria'}}">Consultoria</a></li>
                                                <li><a href="{{route('mentoria').'#direcaotecnica'}}">Direção
                                                        Técnica</a></li>
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
                                                        target="_blank">(51) 9558-5116</a></span>
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
                        <a href="{{route('home')}}">
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
                            <li class="current-menu-item current-menu-ancestor">
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
                            <li class="menu-item-has-children"><a href="{{route('mentoria')}}">Mentoria</a>
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
        <section class="home2-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left mb-4 mb-lg-0">
                        <img src="{{asset('images/site/524x577.png')}}" alt="Time Box"/>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="home2-top-right">
                            <p class="small-text">Criar, Planejar & Executar</p>
                            <img src="{{asset('images/box.png')}}" height="50%" width="70%" alt="Box Visual Experience"><br><br>
                            <p style="color: black;" class="text-justify sub-text">Nossa missão é criar, planejar e
                                executar experiências de tecnologia com comprometimento e excelência. Ecoar as suas
                                emoções é o que nos motiva. Com a busca incessante em estudo e pesquisa, buscamos
                                promover um mercado ético e sustentável.</p>
                            <!-- <div class="video-popup style-2">
                                 <div class="btn-inner">
                                     <a style="background-color: #0669bf;" class="btn-play" href="https://vimeo.com/94686522"><i style="color: white;" class="flaticon-play"></i>
                                         <span style="border-color: #0669bf;" class="circle-1"></span>
                                         <span style="border-color: #0669bf;" class="circle-2"></span>
                                     </a>
                                 </div>
                                 <span>Confira Nosso Showcase</span>
                             </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-industris">
            <div class="container">
                <div class="col-md-12 text-center">
                    <div class="ot-heading">
                        <span>Dedicação, competência & inspiração</span>
                        <h2 class="main-heading">Conheça um pouco mais sobre <br>nossos clientes:</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="ot-industries">
                    <div class="owl-carousel owl-theme industries-inner ot-industries-slider">

                        <div class="indus-item">
                            <a href="http://www.capacita.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/capacita.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Capacitá Eventos</h6>
                                        <div class="itext">
                                            Há 25 anos no mercado, a Capacitá se tornou sinônimo de referência no
                                            segmento de eventos criativos, tecnológicos e inovadores.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="indus-item">
                            <a>
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/emotion.jpg')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Emotion</h6>
                                        <div class="itext">
                                            As emoções movem o mundo.
                                            Elas são o combustível para uma vida vivida de forma plena.
                                            Somos um blend de mulheres que acredita no potencial de viver novas emoções
                                            e
                                            carregar um residual positivo dessa experiência.
                                            Nós acreditamos em fazer história e, quando produzimos um evento, o nosso
                                            foco é ficar na sua memória.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="indus-item">
                            <a href="http://inventaevento.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/inventa.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Inventa Eventos</h6>
                                        <div class="itext">
                                            Sempre proporcionando experiências, felicidade e energia boa! Gerando
                                            impacto positivo nas pessoas e movidos pela alegria ao ver seus clientes
                                            felizes nos eventos.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="indus-item">
                            <a href="https://respiraeventos.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/respira.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Respira Eventos</h6>
                                        <div class="itext">
                                            A Respira Eventos conta com o propósito de criar grandes momentos, trazer
                                            inovação aos eventos corporativos e sociais, provocando emoções e
                                            criatividade.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--
                        <div class="indus-item">
                            <a href="http://www.bluemint.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="images/parceiros/bluemint.png" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Bluemint</h6>
                                        <div class="itext">
                                            Eventos diferenciados, momentos únicos, experiências inesquecíveis, perfil apurado e resultados garantidos.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        -->
                        <!--
                        <div class="indus-item">
                            <a href="https://www.voeideias.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="images/parceiros/voeideias.png" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Voe Ideias</h6>
                                        <div class="itext">
                                            Agência de live marketing.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        -->
                        <div class="indus-item">
                            <a href="https://www.facebook.com/fcincoeventoscorporativos/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/fcinco.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>F Cinco Eventos</h6>
                                        <div class="itext">
                                            Promotora de eventos corporativos.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="indus-item">
                            <a href="https://www.facebook.com/armazemcriativoeventos">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/armazemcriativo.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Armazém Criativo</h6>
                                        <div class="itext">
                                            Produtora de eventos com destaque no mercado.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="indus-item">
                            <a href="https://www.yarabrasil.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/yara.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Yara</h6>
                                        <div class="itext">
                                            Fundada em 1905 para resolver a fome emergente na Europa, hoje, a Yara tem
                                            uma presença mundial, com cerca de 15 mil funcionários e vendas para mais de
                                            160 países.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="indus-item">
                            <a href="https://www.sabemi.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/sabemi.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Sabemi</h6>
                                        <div class="itext">
                                            Com quase 50 anos de mercado e destacada atuação nas atividades de seguros,
                                            serviços financeiros e previdência, a Sabemi está presente em mais de 20
                                            estados brasileiros e DF.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="indus-item">
                            <a href="https://compassouol.com/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/compass.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Compasso UOL</h6>
                                        <div class="itext">
                                            Com mais de 4.000 profissionais de diferentes vivências que compartilham
                                            suas paixões e habilidades para alcançar resultados de excelência,
                                            construindo juntos histórias incríveis.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="indus-item">
                            <a href="https://www.lojasrenner.com.br/">
                                <div class="item-inner">
                                    <div class="overlay"></div>
                                    <div class="i-image">
                                        <img src="{{asset('images/parceiros/renner.png')}}" alt=""/>
                                    </div>
                                    <div class="iinfo">
                                        <h6>Renner</h6>
                                        <div class="itext">
                                            A Lojas Renner S.A. teve seu início em 1922, com o começo das atividades
                                            fabris do então Grupo A. J. Renner.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-inner-about">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="left-img">
                                <div id="image-comparison-slider">
                                    <img src="{{asset('images/gif/verde.png')}}" alt="Antes">
                                    <div class="img-wrapper">
                                        <img src="{{asset('images/gif/produzido.png')}}" alt="Depois">
                                    </div>
                                    <span class="label label-before">Antes</span>
                                    <span class="label label-after">Depois</span>
                                    <div class="handle">
                                        <div class="handle-line"></div>
                                        <div class="handle-circle">
                                            <i class="fas fa-chevron-left"></i>
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                        <div class="handle-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="right-content">
                                <div class="ot-heading">
                                    <span>Novidade no Mercado</span>
                                    <h2 class="main-heading">TECNOLOGIA <br>VIRTUAL CHROMA®</h2>
                                </div>
                                <p class="text-justify">O cenário virtual é uma tecnologia inovadora que recria espaços
                                    com <b>modelagem 3D</b>. Com algumas câmeras estáticas conseguimos fazer uma
                                    infinidade de movimentos em qualquer perspectiva.</p>
                                <p><em class="text-dark"><strong>Desde sobrevoar um oceano a movimentos com travelings,
                                            gruas e spiders. Equipamentos que fisicamente têm altíssimo custo.</strong></em>
                                </p>
                                <div class="space-20"></div>
                                <div class="ot-button">
                                    <a href="{{url('/serviços'.'#estudioimersao')}}" class="octf-btn octf-btn-primary">Saiba
                                        Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-technology">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="technology-left">
                            <div class="ot-heading">
                                <span class="text-primary-light">Serviços</span>
                                <h3 class="main-heading text-white">Nosso time está pronto para encarar qualquer desafio
                                    e prover soluções para as mais variadas demandas</h3>
                            </div>
                            <ul class="style-none text-white">
                                <li><i class="fas fa-check"></i> Web Transmissões</li>
                                <li><i class="fas fa-check"></i> Eventos Remotos</li>
                                <li><i class="fas fa-check"></i> Telas de Grande Porte</li>
                                <li><i class="fas fa-check"></i> Realidade Virtual, Aumentada e Mista</li>
                                <li><i class="fas fa-check"></i> Soluções personalizadas</li>
                            </ul>
                        </div>
                        <br>
                        <div class="ot-button">
                            <a href="{{route('servicos')}}" class="octf-btn octf-btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a class="tech-box text-center">
                                    <div class="icon-main"><span class="fas fa-vr-cardboard"></span></div>
                                    <h5>Óculos VR</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a class="tech-box text-center">
                                    <div class="icon-main"><span class="flaticon-idea"></span></div>
                                    <h5>Conteúdo</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a class="tech-box text-center">
                                    <div class="icon-main"><span class="fas fa-paint-brush"></span></div>
                                    <h5>Edição</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a class="tech-box text-center">
                                    <div class="icon-main"><span class="fas fa-video"></span></div>
                                    <h5>Mappings</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a class="tech-box text-center">
                                    <div class="icon-main"><span class="fas fa-file"></span></div>
                                    <h5>Projetos</h5>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <a class="tech-box text-center">
                                    <div class="icon-main"><span class="fas fa-broadcast-tower"></span></div>
                                    <h5>Broadcast</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-case-study">
            <div class="container">
                <div class="cta-h2">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 mb-4 mb-md-0">
                            <div class="ot-heading">
                                <span style="color: white;">Precisando de algum desses serviços?</span>
                                <h2 class="main-heading">Entre em contato!</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 align-self-end">
                            <div class="ot-button text-center text-md-right">
                                <a href="https://api.whatsapp.com/send?phone=555195585116&text=Ol%C3%A1!%20%3A-)"
                                   target="_blank" class="octf-btn octf-btn-primary">Clique Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ot-heading mb-0">
                            <span>Eventos recentes</span>
                            <h2 class="main-heading">Conheça nosso trabalho!</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <p class="mb-0">Estamos sempre buscando inspirar empresas e pessoas, oferecendo insights,
                            referências e conhecimento. Fique por dentro dos nossos eventos mais recentes.</p>
                    </div>
                    <div class="col-lg-2 align-self-end">
                        <div class="ot-button">
                            <a href="jobs.php" class="btn-details"><i class="flaticon-right-arrow-1"></i>SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-filter-wrapper pt-50">
                            <div class="projects-grid projects-style-1 projects-col3 projects-no-gaps">
                                <div class="project-item design ideas">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="">
                                                <img src="" alt="">
                                            </a>
                                        </div>
                                        <div class="portfolio-info ">
                                            <a class="overlay" href=""></a>
                                            <div class="portfolio-info-inner">
                                                <h5><a href=""></a></h5>
                                                <p class="portfolio-cates">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="row pt-110">
                    <div class="col-md-3 col-sm-6 col-6 mb-4 sb-sm-0">
                        <div class="ot-counter">
                            <div>
                                <span class="num" data-to="100" data-time="2000">0</span>
                                <span>+</span>
                            </div>
                            <h6>Projetos</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-4 sb-sm-0">
                        <div class="ot-counter">
                            <div>
                                <span class="num" data-to="850" data-time="2000">0</span>
                                <span>+</span>
                            </div>
                            <h6>Eventos Concluídos</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="ot-counter">
                            <div>
                                <span class="num" data-to="30" data-time="2000">0</span>
                                <span>+</span>
                            </div>
                            <h6>Clientes</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
