@extends('layouts.site')

@section('title')
    <title>Quem Somos</title>
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
                                        <li class="current-menu-item current-menu-ancestor"><a href="{{route('quemsomos')}}">Quem Somos</a></li>
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
                <h1 class="page-title">Quem Somos</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Quem Somos</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="about-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-30 mb-lg-0">
                    <div class="ot-heading">
                        <span>Nosso Propósito</span>
                        <h2 class="main-heading">Manifesto</h2>
                    </div>
                    <div class="space-5"></div>
                    <p class="text-justify">Nossa missão é criar, planejar e executar experiências de tecnologia com
                        comprometimento e excelência. Ecoar as suas emoções é o que nos motiva. Com a busca
                        incessante em estudo e pesquisa, buscamos promover um mercado ético e sustentável.</p>
                    <p class="text-justify"><em class="text-dark"><strong>Queremos ser lembrados por entregar
                                serviços de alta qualidade e soluções criativas para os mais diversos
                                desafios.</strong></em></p>
                    <p class="text-justify">Tecnologia, inovação, pessoas, responsabilidade social e uma profunda
                        paixão pelo que fazemos é o que nos move. Servir com dedicação e competência… Inspirar
                        empresas e pessoas… Oferecer insights, referências e conhecimento são o nosso propósito.</p>
                    <p class="text-justify"><em class="text-dark"><strong>Somos a BOX Visual
                                Experience.</strong></em></p>
                    <p class="text-justify"><em class="text-dark"><strong>;-)</strong></em></p>
                    <div class="space-20"></div>
                    <!-- <div class="video-popup style-2">
                         <div class="btn-inner">
                             <a style="background-color: #0669bf;" class="btn-play" href="https://www.youtube.com/watch?v=lfDZJqSrIuk">
                                 <i class="flaticon-play"></i>
                                 <span style="border-color: #0669bf;" class="circle-1"></span>
                                 <span style="border-color: #0669bf;" class="circle-2"></span>
                             </a>
                         </div>
                         <span>Confira Nosso Showcase</span>
                     </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st1">
                                <div class="overlay">
                                    <h4 style="cursor: default;">Dedicação</h4>
                                </div>
                                <img src="{{asset('images/site/dedicacao730x730.jpg')}}" alt="Dedicação">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st2">
                                <div class="overlay">
                                    <h4 style="cursor: default;">Competência</h4>
                                </div>
                                <img src="{{asset('images/site/competencia730x730.jpg')}}" alt="Competência">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st3">
                                <div class="overlay">
                                    <h4 style="cursor: default;">Inovação</h4>
                                </div>
                                <img src="{{asset('images/site/inovacao730x730.jpg')}}" alt="Inovação">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a class="ot-image-box v3 st4 mb-0">
                                <div class="overlay">
                                    <h4 style="cursor: default;">Paixão</h4>
                                </div>
                                <img src="{{asset('images/site/paixao730x730.jpg')}}" alt="Paixão">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-v5">
        <div class="overlay overlay-image-about5"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="pabout-left">
                        <img src="{{asset('images/site/historia665x493.jpg')}}" alt="Nossa História">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pabout-right">
                        <div class="ot-heading">
                            <span>Quem Somos</span>
                            <h2 class="main-heading">Somos uma empresa de tecnologia visual focada em eventos</h2>
                        </div>
                        <h5>Nossa História</h5>
                        <p class="text-justify">Nossa jornada começa lá atrás, quando desmontávamos as coisas sem
                            sabem ao certo como faríamos para deixar novamente funcionando (desculpa mãe), passamos
                            por toda revolução digital, fomos usuários de todas as versões de sistemas operacionais
                            conhecidos, assistimos os telefones perderem os fios, equipamentos diminuírem e se
                            aglutinarem... Viajamos com bandas, nos casamos, vieram os filhos... Mantendo sempre o
                            brilho nos olhos nunca deixamos de estudar, aprender e trabalhar muito. Hoje mais
                            maduros, paramos de estragar as coisas e temos uma jornada que já dura 28 anos, sempre
                            relacionando arte e tecnologia. Um dia, encorajados por amigos nasceu a Box e desde 2018
                            atuamos na produção de conteúdo e soluções técnicas. O que mudou? NADA. Continuamos
                            curiosos, apaixonados e agora responsáveis. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading">
                        <span>Nosso Time</span>
                        <h2 class="main-heading">A Equipe Box Visual Experience</h2>
                    </div>
                    <div class="space-5"></div>
                    <p>Nosso time está pronto para encarar qualquer desafio <br> e prover soluções para as mais
                        variadas demandas.</p>
                    <div class="space-20"></div>
                </div>
            </div>
            <div class="row no-margin">
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('images/site/mari.jpg')}}">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-left">
                            <h4>Mariana Konrath</h4>
                            <span>A Mariana é uma de nossas líderes de relacionamento com os clientes e de busca a novos negócios. Seu papel é, através de seu conhecimento e experiência conectar marcas e pessoas em eventos inesquecíveis.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('images/site/bruna720x987.jpg')}}">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-left">
                            <h4>Bruna Salmeri</h4>
                            <span>A Bruna Salmeri é quem faz a nossa operação toda andar do jeito certo. Seu trabalho é manter tudo em ordem pra garantir uma entrega de nível alto.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('images/site/samuel720x987.jpg')}}">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-left">
                            <h4>Samuel Vieira</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('images/site/conrado720x987.jpg')}}">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="linkedin.com" class="linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-left">
                            <h4>Conrado Aveline</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 no-padding">
                    <div class="team-wrap v3">
                        <div class="team-thumb">
                            <img src="{{asset('images/site/pablo720x987.jpg')}}">
                            <div class="team-social flex-middle">
                                <div>
                                    <a rel="nofollow" href="https://www.linkedin.com/in/pablo-salmeri-7814a2140/"
                                       class="linkedin"><i class="fab fa-twitter"></i></a>
                                    <a rel="nofollow" href="https://www.linkedin.com/in/pablo-salmeri-7814a2140/"
                                       class="linkedin"><i class="fab fa-facebook"></i></a>
                                    <a rel="nofollow" href="instagram.com" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-left">
                            <h4>Pablo Salmeri</h4>
                            <span>O Pablo Salmeri é nosso grande maestro. Ele ajuda a fazer cada experiência acontecer de um jeito incrível, um profissional dedicado que traz expertise para trabalhar com qualquer tecnologia.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="s-counter4">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="100" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Projetos</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-lg-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="850" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Eventos Concluídos</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center mb-4 mb-sm-0">
                                <div class="ot-counter text-white">
                                    <div>
                                        <span class="num" data-to="30" data-time="2000">0</span>
                                        <span>+</span>
                                    </div>
                                    <h6 class="text-white">Clientes</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
