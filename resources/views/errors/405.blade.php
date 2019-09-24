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
                <li class="active"><a href="#banner">405</a></li>
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
                    <div class="col-md-12">
                        <div class="banner-text-content">
                            <h1 class="banner-title">Ops 405!</h1>
                            <p class="banner-text"> Método não é permitido! É necessário a submissão de um formulário ou de uma requisição!</p>
                        </div>
                    </div>
                    <div class="col-md-5 hidden-sm hidden-xs">
                        <div class="mock right-style">
                            <!-- <img class="front-mock wow fadeInUp" data-wow-duration="1.5s" src="https://cdn.shopify.com/s/files/1/0322/6897/files/404-permalink.png?432866230176278629" alt="mock front" style="width: 75% !important;"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

@endsection