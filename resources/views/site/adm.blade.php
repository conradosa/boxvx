@extends('layouts.adm')

@section('title')
    <title>Administrador</title>
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
                                        <img src="{{asset('images/logo small.png')}}" alt="Box Visual Experience"
                                             class="">
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
                                        <li><a href="">Jobs</a></li>
                                        -->
                                        @if(Auth::check())
                                            <li class="current-menu-item current-menu-ancestor"><a href="{{route('admin')}}">Administrador</a></li>
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
                                <li class="current-menu-item current-menu-ancestor"><a href="{{route('admin')}}">Administrador</a></li>
                                <li><a href="{{route('logout')}}">Sair</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">
        <div class="container">
            <br>
            <center>
                <div class="col-md-3">
                    <button style="height: 100%;" type="button" id="btn_qtd" name="btn_qtd"
                            onclick="window.location.assign('criarjob.php')" class="btn-block btn-sm btn btn-primary">
                        Criar um Job
                    </button>
                </div>
                <br>
                <div class="col-md-3">
                    <button style="height: 100%;" type="button" id="btn_qtd" name="btn_qtd"
                            onclick="window.location.assign('editarjob.php')" class="btn-block btn-sm btn btn-primary">
                        Editar um Job
                    </button>
                </div>
                <br>
                <div class="col-md-3">
                    <button style="height: 100%;" type="button" id="btn_qtd" name="btn_qtd"
                            onclick="window.location.assign('deletarjob.php')" class="btn-block btn-sm btn btn-primary">
                        Deletar um Job
                    </button>
                </div>
            </center>
            <br>
        </div>
    </div>
@endsection
