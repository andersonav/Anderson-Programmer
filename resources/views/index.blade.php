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
                <li><a href="#banner">Home</a></li>
                <li><a href="#feature">Software</a></li>
                <li><a href="#screenshot">Portifólio</a></li>
                <li><a href="#support">Sobre Mim</a></li>
                <li><a href="#contact" id="aContact">Contato</a></li>
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
                                <a class="btn btn-lg" href="javascript:void(0)" id="solicitarAtendimento">Solicitar atendimento já</a>
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
                            <p class="intro-content">Auxilio na manutenção do seu computador, desde a estrutura lógica até a física, cuidando sempre da sua tecnologia.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="intro-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <div class="intro-icon">
                                <span class="icon-code"><i class="fa fa-code"></i></span>
                            </div>
                            <h4 class="intro-title">Desenvolvimento</h4>
                            <p class="intro-content">Ajudo a aumentar e inovar seu negócio, desenvolvendo de forma desafiadora plataformas do tipo mobile e web. </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="intro-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                            <div class="intro-icon">
                                <span class="icon-chat"></span>
                            </div>
                            <h4 class="intro-title">Tutoria</h4>
                            <p class="intro-content">Realizo serviços de tutoria, dando suporte a pessoas que querem dar inicio na programação, por meio de dicas, fases e acompanhamento.</p>
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
                            <img src="{{asset('images/screenshot/andersondev1.PNG')}}" alt="App Screenshot">
                            <img src="{{asset('images/screenshot/annajessica1.PNG')}}" alt="App Screenshot">
                            <img src="{{asset('images/screenshot/annajessica2.PNG')}}" alt="App Screenshot">
                            <img src="{{asset('images/screenshot/annajessica3.PNG')}}" alt="App Screenshot">
                            <img src="{{asset('images/screenshot/andersondev2.PNG')}}" alt="App Screenshot">
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
                        <h3 class="section-title">Sobre Mim</h3>
                        <p class="section-subtext">Conheça nos mínimos detalhes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="support-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#historia" aria-controls="historia" role="tab" data-toggle="tab"><span class="icon-book-open"></span>História</a></li>
                        <li role="presentation"><a href="#missao" aria-controls="missao" role="tab" data-toggle="tab"><span class="icon-target"></span>Missão</a></li>
                        <li role="presentation"><a href="#clientes" aria-controls="clientes" role="tab" data-toggle="tab"><span class="icon-profile-male"></span>Clientes</a></li>
                        <li role="presentation"><a href="#contrato" aria-controls="contrato" role="tab" data-toggle="tab"><span class="icon-clipboard"></span>Contrato</a></li>
                        <li role="presentation"><a href="#cronograma" aria-controls="cronograma" role="tab" data-toggle="tab"><span class="icon-hourglass"></span>Cronograma</a></li>
                        <li role="presentation"><a href="#duvidas" aria-controls="duvidas" role="tab" data-toggle="tab"><span class="icon-quote"></span>Dúvidas</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="historia">
                            <div class="pane-content">
                                <div class="installation-steps">
                                    <div class="installation-step full">
                                        <p class="step-title">1. História</p>
                                        <p class="step-content">Sou desenvolvedor Full Stack com mais de 5 anos de experiência, com espírito de liderança, comprometimento, confiabilidade
                                            e há a necessidade de soluções melhores e inovadores para negócios. Tendo em vista a organização, um melhor atendimento e tecnologias de ponta para o desenvolvimento
                                            de sistemas e aplicativos. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="missao">
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
                                            da melhor maneira possível, porque estou aqui para ajudá-lo a
                                            tornar-se grande, serei um companheiro para o sucesso.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="clientes">
                            <div class="pane-content">
                                <div class="installation-steps">
                                    <div class="installation-step full">
                                        <p class="step-title">1. IFCE Maracanaú</p>
                                        <p class="step-content">"E quando os estudantes criam soluções para os próprios problemas? É com essa filosofia que a Coordenação de Tecnologia da Informação do @ifcemaracanauoficial vem desafiando bolsistas a desenvolverem soluções para automatizar rotinas administrativas da unidade. Já foram desenvolvidas sete soluções entre aplicativos e sistemas.
                                            Entre as mais recentes soluções está a reativação da ouvidoria do campus, por meio de um sistema desenvolvido pelo aluno do curso de Ciência da Computação, Anderson Alves."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="contrato">
                            <div class="pane-content">
                                <div class="installation-steps">
                                    <div class="installation-step full">
                                        <p class="step-title">1. Como funciona?</p>
                                        <p class="step-content">É trabalhado mediante a necessidade apresentada
                                            pelo cliente, não importa qual, se envolve logística, dinâmica e
                                            computação, te ajudarei da melhor forma possível. A organização é a base para um projeto de sucesso,
                                            e os contratos refletem isso, tudo que for acordado, será
                                            transcrito para o contrato, o mesmo irá ser separado por fases de
                                            evolução e destacado inicio e fim de desenvolvimeto, sendo tudo
                                            transparente e de forma organizada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="cronograma">
                            <div class="pane-content">
                                <div class="installation-steps">
                                    <div class="installation-step">
                                        <p class="step-title">1. Vamos entender mais sobre isso?</p>
                                        <p class="step-content">Organizar as atividades, garantir que elas sejam executadas
                                            dentro dos prazos estipulados, distribuí-las entre os responsáveis,
                                            são todas coisas bem importantes para planejar qualquer projeto. Por isso é importante ter um cronograma planejado de todos os projetos, serviços, além de proporcionar confiança para os clientes.</p>
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

                        <div role="tabpanel" class="tab-pane fade" id="duvidas">
                            <div class="pane-content">
                                <div class="installation-steps">
                                    <div class="installation-step">
                                        <p class="step-title">1. Como solicitar orçamento?</p>
                                        <p class="step-content">Muito simples, basta entrar em contato via email, informando sua necessidade. Logo que possivel entrarei em contato. </p>
                                    </div>
                                    <div class="installation-step">
                                        <p class="step-title">2. Quais as formas de pagamento?</p>
                                        <p class="step-content">Para efetuar seu pagamento, você terá disponível como opções: débito, crédito e dinheiro.
                                        </p>
                                    </div>
                                    <div class="installation-step">
                                        <p class="step-title">3. Como funciona o serviço de hospedagem?</p>
                                        <p class="step-content">Serviço de hospedagem é incluso no pacote com o orçamento do projeto. Além de ter a possibilidade de hospedagem para sistemas de terceiros.</p>
                                    </div>
                                    <div class="installation-step">
                                        <p class="step-title">4. Vale a pena trabalhar com você?</p>
                                        <p class="step-content">Sim, além do bom atendimento, presto um ótimo serviço usando tecnologias atuais que darão uma visualização melhor para seu negócio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


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
                    <div class="col-md-6 col-xs-12">
                        <div class="section-header style-2">
                            <h3 class="section-title">Contato</h3>
                            <p class="section-subtext">Entre em contato comigo e mude o rumo da sua história.</p>
                        </div>
                        <form id="contactForm" class="contact-form" action="{{route('send-mail')}}" method="post">
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <p>
                                <input id="name" type="text" name="name" placeholder="Seu nome">
                            </p>
                            @if($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                            <p>
                                <input id="phone" type="text" name="phone" placeholder="Seu telefone">
                            </p>
                            @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            <p>
                                <input id="email" type="email" name="email" placeholder="Seu e-mail">
                            </p>
                            @if($errors->has('subject'))
                            <span class="help-block">
                                <strong>{{ $errors->first('subject') }}</strong>
                            </span>
                            @endif
                            <p>
                                <input id="subject" type="text" name="subject" placeholder="Título da proposta">
                            </p>
                            @if($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                            @endif
                            <p>
                                <textarea id="message" name="message" placeholder="Faça brevemente uma descrição da sua proposta" rows="5"></textarea>
                            </p>
                            <button type="submit" class="btn btn-lg btnEnviarEmail"><i class="fa fa-paper-plane"></i> Enviar</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact area end -->
</div>

@endsection