<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148340732-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-148340732-1');
    </script>

    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>Anderson Developer</title>
    <meta name="description" content="Anderson Alves - Developer">
    <!-- External CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/et-line.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plyr.css')}}">
    <!-- Custom CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400%7CUbuntu:400,700%7COpen+Sans" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/icone.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/icone.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icone.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icone.png')}}">
</head>

<body>
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

    <footer>
        <div class="logo-social-area section-padding">
            <div class="container text-center">
                <a class="logo logo-footer wow fadeInDown" data-wow-duration="1.5s" href="#">
                    <img src="{{asset('images/logo2.png')}}" alt="Site Logo" id="imgFooter">
                </a>
                <div class="socials wow fadeInUp" data-wow-duration="1.5s">
                    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5585988355751" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/andersondeveloper/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <!-- Footer logo and social media button -->

        <!-- Footer copyrgiht and navigation -->
        <div class="copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <p class="copyright">Copyright 2019, <a href="#">Anderson Developer</a>. Todos os direitos reservados</p>
                    </div>
                </div>
            </div>
            <!-- Footer copyrgiht and navigation -->
            <div class="whatsapp">
                <a href="https://api.whatsapp.com/send?phone=5585988355751" target="_blank"><img class="whatsapp" src="https://logospng.org/download/whatsapp/logo-whatsapp-verde-icone-ios-android-1024.png" /></a>
            </div>
    </footer>


    <!-- Script -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.localScroll.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/plyr.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/sendMail.js')}}"></script>
</body>

</html>