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
    @yield('content')

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
    <script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
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
    <script src="{{asset('js/index.js')}}"></script>

    @if(count($errors) > 0)
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#aContact").trigger('click');
            }, 2000);
            // $(".login").removeClass('active');
            // $(".register").addClass('active');

            // $("#login").removeClass('active');
            // $("#register").addClass('active');
        });
    </script>
    @endif
</body>

</html>