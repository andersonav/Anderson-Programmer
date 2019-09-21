<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>Anderson Developer</title>
    <meta name="description" content="EDEV - Engine Developers">
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
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo3.png" class="imagemLogo" alt="Site Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="one-page-nav">
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#feature">Software</a></li>
                    <li><a href="#screenshot">Portifolio</a></li>
                    <li><a href="#support">Sobre Nós</a></li>
                    <li><a href="#contact">Contato</a></li>
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
                                <h1 class="banner-title">Seja inovador, ágil <br />e entre em contato!</h1>
                                <p class="banner-text">Seu sonho faz parte do meu objetivo.</p>
                                <div class="button-group">
                                    <a class="btn btn-lg" href="#"><i class="fa fa-whatsapp"></i>Solicitar atendimento</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <div class="mock right-style">
                                <img style="margin-left:-70%;" class="back-mock wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="1s" src="images/computador.png" alt="mock back">
                                <img class="front-mock wow fadeInUp" data-wow-duration="1.5s" src="images/mocks/banner-mock-front.png" alt="mock front">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <div class="main-wrap">

        <!-- Intro Section -->
        <div class="section section-padding">
            <div class="container">
                <div class="intros">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="intro-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                                <div class="intro-icon">
                                    <span class="icon-tools-2"></span>
                                </div>
                                <h4 class="intro-title">Hadware &amp; Software</h4>
                                <p class="intro-content">Auxilio em toda a manutenção do seu computador, desde a estrutura lógica até a física, cuidando sempre da sua tecnologia.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="intro-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="intro-icon">
                                    <span class="icon-code"><i class="fa fa-code"></i></span>
                                </div>
                                <h4 class="intro-title">Desenvolvimento</h4>
                                <p class="intro-content">Ajudarei a chegar em todos os seus objetivos, desenvolvendo de forma inovadora plataformas do tipo mobile e plataformas web. </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="intro-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                                <div class="intro-icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <h4 class="intro-title">Tutoria</h4>
                                <p class="intro-content">Também realizo serviços de tutoria, dando suporte a pessoas que querem dar inicio na programação, por meio de dicas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Intro section end -->

        <!-- Features -->
        <div id="feature" class="section section-padding offwhite-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="section-title">Software</h3>
                            <p class="section-subtext">Desenvolvimento de sistemas web responsivos e plataformas mobile</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                                <span class="icon-tools-2"></span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Manutenção de Sistemas</h4>
                                <p>Trabalho com a manutenção de sistemas em qualquer plataforma</p>
                            </div>
                        </div>
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                                <span class="icon-speedometer"></span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Framework</h4>
                                <p>Utilização de framework para um desenvolvimento rápido e organizado, tendo assim uma maior eficácia</p>
                            </div>
                        </div>
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                                <span class="icon-aperture"></span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Responsividade</h4>
                                <p>Todos os sistemas são adequados a qualquer tela, possibilitando o seu uso em qualquer dispositivo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center hidden-sm hidden-xs">
                        <div class="mock wow fadeInUp" data-wow-duration="1.5s"><img class="img-responsive" src="images/mocks/1.png" alt="..."></div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                                <span class="icon-chat"></span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Diálogo</h4>
                                <p>É realizada uma interação dinâmica entre o desenvolvedor e o cliente, flexibilizando sempre o melhor atendimento</p>
                            </div>
                        </div>
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Qualidade</h4>
                                <p>São utilizados os melhores frameworks de cada linguagem, fornecendo assim, sistemas de alta qualidade</p>
                            </div>
                        </div>
                        <div class="feature wow fadeInUp" data-wow-duration="1.5s">
                            <div class="feature-icon">
                                <span class="icon-layers"></span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Organização</h4>
                                <p>São adotados tecnologias atuais para melhorar a organização dos projetos, tendo em vista rapidez e eficiência dos mesmos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------- Screenshot --------------->
        <div id="screenshot" class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center">
                            <h2 class="section-title">Portifólio</h2>
                            <p class="section-sub">Alguns trabalhos realizados</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="screen-mock"></div>
                        <div class="screenshot-wrap">
                            <div class="owl-carousel screenshot-carousel" id="screenshot-carousel">
                                <!--<img src="images/screenshot/tlini.png" alt="App Screenshot">-->
                                <img src="{{asset('images/screenshot/barbearia.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/barbearia2.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/tlini.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/clickbuy.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/inicioclickbuy.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/adminclickbuy.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/modalclickbuy.png')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/radio2.jpeg')}}" alt="App Screenshot">

                                <img src="{{asset('images/screenshot/radio1.jpeg')}}" alt="App Screenshot">
                                <img src="{{asset('images/screenshot/radio3.jpeg')}}" alt="App Screenshot">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot end -->

        <!-- Supports -->
        <div id="support" class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center">
                            <h3 class="section-title">Sobre Nós</h3>
                            <p class="section-subtext">Conheça nos mínimos detalhes</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="support-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#some-secret-02" aria-controls="some-secret-02" role="tab" data-toggle="tab"><span class="icon-target"></span>História</a></li>
                            <li role="presentation"><a href="#some-secret-03" aria-controls="some-secret-03" role="tab" data-toggle="tab"><span class="icon-target"></span>Missão</a></li>
                            <li role="presentation"><a href="#installation" aria-controls="installation" role="tab" data-toggle="tab"><span class="icon-clipboard"></span>Contrato</a></li>
                            <!--<li role="presentation"><a href="#video-docs" aria-controls="video-docs" role="tab"-->
                            <!--data-toggle="tab"><span class="icon-video"></span>Vídeo<br />Explanação</a></li>-->
                            <li role="presentation"><a href="#general-faq" aria-controls="general-faq" role="tab" data-toggle="tab"><span class="icon-quote"></span>Dúvidas</a></li>
                            <li role="presentation"><a href="#some-secret-01" aria-controls="some-secret-01" role="tab" data-toggle="tab"><span class="icon-hourglass"></span>Cronograma</a></li>

                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="installation">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. Como funciona?</p>
                                            <p class="step-content">É trabalhado mediante a necessidade apresentada
                                                pelo cliente, não importa qual, se envolve logística, dinâmica e
                                                computação, te ajudarei da melhor forma possível.</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">2. Com funciona o CONTRATO?</p>
                                            <p class="step-content">A organização é a base para um projeto de sucesso,
                                                e os contratos refletem isso, tudo que for acordado, será
                                                transcrito para o contrato, o mesmo irá ser separado por fases de
                                                evolução e destacado inicio e fim de desenvolvimeto, sendo tudo
                                                transparente e de forma organizada.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="video-docs">
                                <div class="pane-content">
                                    <div class="row">
                                        <div class="col-sm-6 xs-bottom-30">
                                            <div class="plyr-video">
                                                <div data-type="youtube" data-video-id="xODCdqTWzRo"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="plyr-video">
                                                <div data-type="youtube" data-video-id="u_ft2nVi6_g"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="general-faq">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. Como solicitar orçamento?</p>
                                            <p class="step-content">Muito simples, basta entrar em contato via email, informando sua necessidade. Logo que possivel entraremos em contato. </p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">2. Quais as formas de pagamento?</p>
                                            <p class="step-content">Para efetuar seu pagamento, você terá disponível como opções: débito, crédito e dinheiro.
                                            </p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">3. Como funciona o serviço de hospedagem?</p>
                                            <p class="step-content">Não é fornecido hospedagem para sistemas de terceiros, somente para sistemas produzidos pelo mesmo.</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">4. Vocês trabalham com desenvolvimento desktop?</p>
                                            <p class="step-content">Sim, trabalhamos com todo tipo de desenvolvimento de sistemas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="some-secret-01">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. Vamos entender mais sobre isso?</p>
                                            <p class="step-content">Organizar as atividades, garantir que elas sejam executadas
                                                dentro dos prazos estipulados, distribuí-las entre os responsáveis,
                                                são todas coisas bem importantes para planejar qualquer projeto. Por isso a EDEV tem um cronograma planejado de todos os projetos, serviços, além de proporcionar confiança para os clientes.</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">2. Em que um planejamento pode ser importante?</p>
                                            <p class="step-content">Dentro da gestão de projetos, cronograma é um conceito-chave. Ele é um dos principais responsáveis por não deixar que alguns problemas apareçam,
                                                como: mudança do escopo, falta de comunicação e atrasos nas entregas. Afinal, um projeto tem início, meio e fim e
                                                para determinar o que acontecerá em cada etapa é preciso de um planejamento.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in active" id="some-secret-02">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. História</p>
                                            <p class="step-content">Sou um desenvolvedor Full Stack com mais de 5 anos de experiência, com espírito de liderança, comprometimento, confiabilidade
                                                 e há a necessidade de soluções melhores e inovadores para negócios. Tendo em vista a organização, um melhor atendimento e tecnologias de ponta para o desenvolvimento
                                                de sistemas. </p>
                                        </div>
                                        <!-- <div class="installation-step">
                                            <p class="step-title">2. Filosofia</p>
                                            <p class="step-content">A nossa filosofia é criar o tipo de site que a
                                                maioria das empresas querem: fácil de encontrar, elegante e atraente,
                                                carregamento rápido, móvel ágil e fácil de comprar.</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="some-secret-03">
                                <div class="pane-content">
                                    <div class="installation-steps">
                                        <div class="installation-step">
                                            <p class="step-title">1. Missão</p>
                                            <p class="step-content">Projetar todo o nosso processo e produtos em
                                                torno de fornecer uma melhor viabilidade para o cliente. Garanto que será uma experiência
                                                rápida, fácil e sem complicações. Exercer sempre um melhor atendimento para o cliente.</p>
                                        </div>
                                        <div class="installation-step">
                                            <p class="step-title">2. O que é preciso para iniciar um trabalho?</p>
                                            <p class="step-content">Primeiro vontade de obter sucesso, tudo será feito
                                                da melhor maneira possível, porque estamos aqui para ajudá-lo a
                                                tornar-se grande, serei um companheiro para o sucesso.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Features In -->
        <div class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                        <div class="section-header text-center style-2">
                            <h3 class="section-title">Referências</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="client-logo" href="#"><img src="{{asset('images/client/logo-1.png')}}" alt="Client Logo"></a>
                    <a class="client-logo" href="#"><img src="{{asset('images/client/logo-2.png')}}" alt="Client Logo"></a>
                    <a class="client-logo" href="#"><img src="{{asset('images/client/logo-3.png')}}" alt="Client Logo"></a>
                    <a class="client-logo" href="#"><img src="{{asset('images/client/logo-4.png')}}" alt="Client Logo"></a>
                    <a class="client-logo" href="#"><img src="{{asset('images/client/logo-5.png')}}" alt="Client Logo"></a></div>
            </div>
        </div>
        <!-- Features In End -->

        <!-- Contact area -->
        <div id="contact" class="section contact-area">
            <div class="map-wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 right-image hidden-sm hidden-xs steller-parallax" data-stellar-background-ratio="0.5">
                            <div class="overlay-black"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-wrap text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <div class="section-header style-2">
                                <h3 class="section-title">Contato</h3>
                                <p class="section-subtext">Entre em contato conosco e mude o rumo da sua história.</p>
                            </div>
                            <form id="contactForm" class="contact-form" action="#" method="post">
                                <p>
                                    <input id="name" type="text" name="name" placeholder="Nome" required>
                                </p>
                                <p>
                                    <input id="email" type="email" name="email" placeholder="E-mail" required>
                                </p>
                                <p>
                                    <input id="subject" type="text" name="subject" placeholder="Título" required>
                                </p>
                                <p>
                                    <textarea id="message" name="message" placeholder="Sua Mensagem" rows="5" required></textarea>
                                </p>
                                <button type="button" class="btn btn-lg btnEnviarEmail"><i class="fa fa-paper-plane"></i> Enviar</button>
                                <p class="input-success">Mensagem enviada com sucesso!</p>
                                <p class="input-error">Desculpe, ocorreu uma falha ao enviar a mensagem, tente
                                    novamente mais tarde!</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact area end -->
    </div>

    <footer>

        <!-- Footer Subscribe -->
        <!-- <div class="subscription-area section-padding theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="wow fadeInLeft" data-wow-duration="1.5s">Subscribe to the<br/>newsletter</h3>
                        </div>
                        <div class="col-md-6">
                            <form class="subscription wow fadeInRight" data-wow-duration="1.5s" action="#" method="post">
                                <input type="email" name="email" placeholder="Enter your mail here" required>
                                <button type="submit">Submit</button>
                                <p class="newsletter-success"></p>
                                <p class="newsletter-error"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Footer Subscribe -->

        <!-- Footer logo and social media button -->
        <div class="logo-social-area section-padding">
            <div class="container text-center">
                <a class="logo logo-footer wow fadeInDown" data-wow-duration="1.5s" href="#">
                    <img src="{{asset('images/logo2.png')}}" alt="Site Logo">
                </a>
                <div class="socials wow fadeInUp" data-wow-duration="1.5s">
                    <a href="https://www.facebook.com/enginedevelopers/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/edevoficial/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a>
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
                        <!-- </div>
                            <div class="col-md-6 col-xs-12">
                                <ul class="footer-nav">
                                    <li><a href="#">Termos &amp; Codições</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div> -->
                    </div>
                </div>
            </div>
            <!-- Footer copyrgiht and navigation -->
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/sendMail.js')}}"></script>
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
</body>

</html>