@extends('layouts.painel')
@section('content')
<!-- Preloader -->
<div class="loader-wrap" id="loader-wrap">
    <div class="cssload-loader"></div>
</div>
<!-- Preloader End -->
<!-- Navigation -->
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="60">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="images/logo3.png" class="imagemLogo" alt="Site Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right" id="one-page-nav">
                <li><a href="{{URL::previous()}}">Voltar</a></li>
                <li class="active"><a href="#banner">Contato</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Navigation End -->

<!-- Banner Area -->
<div id="banner" class="banner">
    <div class="banner-item banner-1 steller-parallax" data-stellar-background-ratio="0.5">
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="banner-text-content">
                            <h1 class="banner-title">Obrigado!</h1>
                            <p class="banner-text"> Muito obrigado por entrar em contato. Isso significa muito para mim, assim como você! Aprecio pelo tempo que tens disponível para nos comunicar. Obrigado por ser você.
                                Te enviei um email para mais informações, e brevemente entrarei em contato.</p>
                        </div>
                    </div>
                    <div class="col-md-5 hidden-sm hidden-xs">
                        <div class="mock right-style">
                            <img class="front-mock wow fadeInUp" data-wow-duration="1.5s" src="https://www.stickpng.com/assets/images/5aa78e207603fc558cffbf19.png" alt="mock front" style="width: 75% !important;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

@endsection