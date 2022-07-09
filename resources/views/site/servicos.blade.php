@extends('layouts.site')

@section('title')
    <title>Serviços</title>
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
                                    <a href="">
                                        <img src="{{asset('images/logo small.png')}}" alt="Box Visual Experience" class="">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col menu-col">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu">
                                        <li>
                                            <a href="">Home</a>
                                        </li>
                                        <li><a href="{{route('quemsomos')}}">Quem Somos</a></li>
                                        <li class="menu-item-has-children current-menu-item current-menu-ancestor"><a href="{{route('servicos')}}">Serviços</a>
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
                            <li><a href="{{route('quemsomos')}}">Quem Somos</a></li>
                            <li class="menu-item-has-children current-menu-item current-menu-ancestor"><a href="{{route('servicos')}}">Serviços</a>
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
        <div class="page-header flex-middle">
            <div class="container">
                <div class="inner flex-middle">
                    <h1 class="page-title">Serviços</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Serviços</li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mb-4 mb-sm-0">
                        <div class="ot-heading mb-0">
                            <span>Nossos serviços</span>
                            <h2 class="main-heading">Oferecemos uma variedade<br>de soluções:</h2>
                        </div>
                    </div>
                </div>
                <div class="space-55"></div>
            </div>
        </section>
        <section id="motions" class="support-i7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="support-content-i7">
                            <h2 class="title-i7 style-medium-i7"><strong>Motions Graphics</strong></h2>
                            <div class="space-10"></div>
                            <p class="text-justify">
                                Os <b>Motions Graphics</b> são peças de animação ou filmagem digital que criam a ilusão
                                de
                                movimento ou rotação e geralmente são combinados com áudio para uso em projetos de
                                multimídia. Os <b>Motions Graphics</b> são uma forma excepcional de se comunicar com o
                                espectador e podem adicionar profundidade à história.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="support-img-i7">
                            <img src="{{asset('images/site/motions1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="videosinstitucionais" class="testimonial-i6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0 align-self-center">
                        <div class="testi-i6-img">
                            <img src="{{asset('images/site/institucionais.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="ot-heading s2">
                            <span>Comunicação</span>
                            <h2 class="main-heading">Vídeos Institucionais</h2>
                        </div>
                        <div class="space-35"></div>
                        <div class="testi-simple-i6">
                            <p class="text-justify">O Vídeo Institucional é uma das ferramentas mais consagradas de
                                comunicação, seja para
                                apresentar a sua empresa, divulgar os produtos e serviços ou aumentar as vendas. Os
                                vídeos institucionais que produzimos tem como foco expressar a essência e identidade da
                                sua empresa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="transmissoes" class="support-i7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="support-content-i7">
                            <h2 class="title-i7 style-medium-i7"><strong>Captação e Transmissões</strong></h2>
                            <div class="space-10"></div>
                            <p class="text-justify">A transmissão pode ocorrer tanto a partir de conteúdos pré-gravados
                                como a partir de
                                interações ao vivo. Na modalidade ao vivo, a gravação e a transmissão do conteúdo para o
                                público ocorrem de maneira simultânea.
                                <b>A BOX conta com estúdio completo para esse tipo de transmissão</b>.
                            </p>
                            <div class="space-30"></div>
                            <ul class="pl-0 style-2">
                                <li class="pb-1"><i class="fas fa-check"></i> Web Transmissões;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Transmissão Broadcast;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Lives;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Eventos Remotos;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Realidade Virtual, Aumentada e Mista.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="support-img-i7">
                            <img src="{{asset('images/site/transmicoes924x874.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pacotesgraficos" class="testimonial-i6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0 align-self-center">
                        <div class="testi-i6-img">
                            <img src="{{asset('images/site/graficos.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="ot-heading s2">
                            <span>Design</span>
                            <h2 class="main-heading">Pacotes Gráficos para Transmissões (lives)</h2>
                        </div>
                        <div class="space-35"></div>
                        <div class="testi-simple-i6">
                            <ul class="pl-0 style-2">
                                <li class="pb-1"><i class="fas fa-check"></i> Identidade visual do evento;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Vinhetas e screensavers para os blocos;
                                </li>
                                <li class="pb-1"><i class="fas fa-check"></i> Tela regressiva de transmissão;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Tela de intervalo;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Tela mosca (logo no canto da tela);</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Tela GC (lower thirds) e PPT’s com design,
                                    montagem e operação.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="edicao" class="support-i7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="support-content-i7">
                            <h2 class="title-i7 style-medium-i7"><strong>Edição</strong></h2>
                            <div class="space-30"></div>
                            <ul class="pl-0 style-2">
                                <li class="pb-1"><i class="fas fa-check"></i> Edição completa de vídeos;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Locução e efeitos;</li>
                                <li class="pb-1"><i class="fas fa-check"></i> Sound design e trilhas.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="support-img-i7">
                            <img src="{{asset('images/site/edicao.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="telas" class="space-100"></div>
        <section class="about-home6">
            <div class="about-overlay-6 overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 align-self-center">
                        <div class="about-img-6">
                            <img src="{{asset('images/site/telas701x701.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="about-desc-6">
                            <div class="ot-heading s2">
                                <span>Visibilidade</span>
                                <h2 class="main-heading">Telas de Grande Porte</h2>
                                <br>
                            </div>
                            <div class="space-30"></div>
                            <ul class="pl-0 style-2">
                                <li><i class="fas fa-check"></i> Painéis de Led</li>
                                <li><p style="font-weight: normal;" class="text-justify">Poder Visual, imagens de alta
                                        qualidade e nitidez.
                                        É um grande diferencial na composição de palco.
                                    </p></li>
                                <li><i class="fas fa-check"></i> Mappings</li>
                                <li><p style="font-weight: normal;" class="text-justify">A Projeção mapeada é também
                                        conhecida como video
                                        mapping, é a técnica que permite que qualquer superfície, mesmo as irregulares
                                        como: paredes, automóveis, praças e prédios, se tornem uma tela de mídia.
                                    </p></li>
                                <li><i class="fas fa-check"></i> Multiprojeção</li>
                                <li><p style="font-weight: normal;" class="text-justify">São serviços que empregamos
                                        mais do que um projetor,
                                        com sobreposição de imagens, sobre qualquer superfície, não precisando ter
                                        elementos para mapeamento para projetar.
                                    </p></li>
                            </ul>
                            <div class="space-35"></div>
                            <!-- <div class="video-popup style-2">
                                 <div class="btn-inner">
                                     <a style="background-color: #0669bf;" class="btn-play" href="https://vimeo.com/94686522"><i class="flaticon-play"></i>
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
        <section class="support-i7" id="estudioimersao">
            <div class="space-100"></div>
            <div class="about-overlay-6 overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 align-self-center">
                        <div class="about-img-6">
                            <img src="{{asset('images/site/estudioimersao808x687.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="about-desc-6">
                            <div class="ot-heading s2">
                                <span>Virtual Production</span>
                                <h2 class="main-heading">Estúdio de Imersão</h2>
                                <br>
                            </div>
                            <div class="space-30"></div>
                            <ul class="pl-0 style-2">
                                <li><i class="fas fa-check"></i> Tecnologia Virtual Chroma ®</li>
                                <li><p style="font-weight: normal;" class="text-justify">O cenário virtual é uma
                                        tecnologia que recria espaços com <b>modelagem 3D</b>.
                                    </p></li>
                                <li><i class="fas fa-check"></i> Realidade Aumentada (AR)</li>
                                <li><p style="font-weight: normal;" class="text-justify">Realidade Aumentada (RA) ou
                                        (AR) a integração de elementos ou informações virtuais a visualizações do mundo
                                        real através de uma câmera e com o uso de sensores de movimento como giroscópio
                                        e acelerômetro.
                                    </p></li>
                                <li><i class="fas fa-check"></i> Realidade Virtual (VR)</li>
                                <li><p style="font-weight: normal;" class="text-justify">Realidade virtual é uma
                                        tecnologia de interface entre um usuário e um sistema operacional através de
                                        recursos gráficos 3D ou imagens 360º, cujo objetivo é criar a sensação de
                                        presença em um ambiente virtual diferente do real.
                                    </p></li>
                                <li><i class="fas fa-check"></i> Realidade Mista (MR)</li>
                                <li><p style="font-weight: normal;" class="text-justify">Realidade mista ou realidade
                                        híbrida é a tecnologia que une características da realidade virtual com a
                                        realidade aumentada. Esta insere objetos virtuais no mundo real e permite a
                                        interação do usuário com os objetos, produzindo novos ambientes nos quais itens
                                        físicos e virtuais coexistem e interagem em tempo real.
                                    </p></li>
                                <li><i class="fas fa-check"></i> Realidade Extendida (XR)</li>
                                <li><p style="font-weight: normal;" class="text-justify">XR é um termo genérico usado
                                        para agrupar tecnologias, como Realidade Virtual, Realidade Aumentada e
                                        Realidade Mista.
                                    </p></li>
                            </ul>
                            <div class="space-35"></div>
                            <!-- <div class="video-popup style-2">
                                 <div class="btn-inner">
                                     <a style="background-color: #0669bf;" class="btn-play" href="https://vimeo.com/94686522"><i class="flaticon-play"></i>
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
    </div>
@endsection
