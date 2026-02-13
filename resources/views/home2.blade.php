<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equilíbrio - Consultório Psicológico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
      /* ============================================
   CSS VARIABLES
   ============================================ */
:root {
    --primary-dark: #1f7b00;
    --primary-green: #364f4a;
    --light-green: #c5d5d1;
    --accent-pink: #ffcccc;
    --accent-brown: #967552;
    --text-dark: #2d3748;
}


/* ============================================
   GLOBAL STYLES
   ============================================ */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: var(--text-dark);
    overflow-x: hidden;
}


/* ============================================
   NAVIGATION
   ============================================ */
.navbar {
  /*  background-color: rgba(31, 123, 0, 0.95);*/
  background-color:  #364f4a;
    padding: 1.2rem 0;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
}

.navbar.scrolled {
    padding: 0.8rem 0;
    /*background-color: rgba(31, 123, 0, 0.98);*/
    background-color:  #364f4a;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
}

.navbar-brand {
    font-size: 1.8rem;
            font-weight: 700;
            color: white !important;
            letter-spacing: 0.5px;
            transition: transform 0.3s;
            font-style: italic;
}

.navbar-brand:hover {
    transform: scale(1.05);
}

.nav-link {
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 500;
    margin: 0 1rem;
    transition: all 0.3s;
    position: relative;
}

.logo-image {
    height: 50px;          /* Adjust based on your navbar height */
    width: auto;           /* Maintain aspect ratio */
    display: block;        /* Remove inline spacing */
    object-fit: contain;   /* Keep the logo fully visible */
    margin: 0 auto;        /* Center if needed */
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    width: 0;
    height: 2px;
    background: var(--accent-pink);
    transition: all 0.3s;
    transform: translateX(-50%);
}

.nav-link:hover::after {
    width: 80%;
}

.nav-link:hover {
    color: var(--accent-pink) !important;
}

.dropdown-menu {
    background-color:  #364f4a;
    border: none;
    border-radius: 10px;
    backdrop-filter: blur(8px);
}

.dropdown-item {
    color: #fff;
    transition: background 0.3s ease;
}

.dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.15);
}


/* ============================================
   BUTTONS
   ============================================ */
.btn-agendar {
    background: linear-gradient(135deg, var(--primary-green), #2a3f3b);
    color: white;
    border: none;
    padding: 0.7rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(54, 79, 74, 0.3);
    position: relative;
    overflow: hidden;
}

.btn-agendar::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s;
}

.btn-agendar:hover::before {
    left: 100%;
}

.btn-agendar:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 25px rgba(54, 79, 74, 0.5);
}


/* ============================================
   HERO SECTION
   ============================================ */

   .hero-section {
    margin-top: 90px;
}
.hero-slide {
    position: relative;
    height: 650px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(10, 10, 10, 0.55);
}

.hero-content {
    position: relative;
    z-index: 10;
    color: white;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    color: white;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.hero-subtitle {
    font-size: 1.3rem;
    color: var(--light-green);
    line-height: 1.6;
    margin-bottom: 2rem;
    max-width: 400px;
    text-shadow: 
        2px 2px 4px rgba(0, 0, 0, 0.8),
        -1px -1px 2px rgba(0, 0, 0, 0.6);
    background: rgba(0, 0, 0, 0.2);
    padding: 2px 2px;
    border-radius: 8px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.hero-silhouette {
    position: absolute;
    right: 10%;
    bottom: 0;
    width: 350px;
    height: 500px;
    background: linear-gradient(180deg, transparent 0%, rgba(54, 79, 74, 0.3) 100%);
    clip-path: ellipse(45% 50% at 50% 100%);
    animation: float 6s ease-in-out infinite;
}


/* ============================================
   ABOUT SECTION
   ============================================ */
.about-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, var(--light-green) 0%, #d5e5e1 100%);
    position: relative;
}

.about-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(to bottom, white, transparent);
}

.about-content {
    animation: fadeInLeft 1s ease-out;
}

.about-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 1rem;
}

.about-subtitle {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-green);
    margin-bottom: 2rem;
    position: relative;
    display: inline-block;
}

.about-subtitle::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 60px;
    height: 3px;
    background: var(--accent-pink);
}

.about-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #4a5568;
    margin-bottom: 2rem;
}

.about-image-wrapper {
    position: relative;
    animation: fadeInRight 1s ease-out;
}

.about-image {
    border-radius: 20px;
    box-shadow: 0 15px 50px rgba(54, 79, 74, 0.25);
    width: 100%;
    height: 600px;
    object-fit: cover;
    object-position: center;
    border: 4px solid white;
    transition: transform 0.5s, box-shadow 0.5s;
}

.about-image:hover {
    transform: scale(1.02) rotate(-1deg);
    box-shadow: 0 20px 60px rgba(54, 79, 74, 0.35);
}

.about-image-wrapper::before {
    content: '';
    position: absolute;
    top: -20px;
    right: -20px;
    width: 150px;
    height: 150px;
    background: var(--accent-pink);
    border-radius: 20px;
    z-index: -1;
    opacity: 0.5;
}



/* ============================================
   SERVICES SECTION
   ============================================ */
.servicos-section {
    padding: 6rem 0;
    background: white;
    position: relative;
}

.servicos-section::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(197, 213, 209, 0.2) 0%, transparent 70%);
    border-radius: 50%;
}

.servicos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.servico-card {
    background: linear-gradient(135deg, #ffffff 0%, var(--light-green) 100%);
    border-radius: 25px;
    padding: 2.5rem;
    position: relative;
    overflow: hidden;
    transition: all 0.4s;
    border: 2px solid transparent;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.servico-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--primary-green), var(--accent-brown));
    opacity: 0;
    transition: opacity 0.4s;
}

.servico-card::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    transform: scale(0);
    transition: transform 0.6s;
}

.servico-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 50px rgba(54, 79, 74, 0.2);
    border-color: var(--primary-green);
}

.servico-card:hover::before {
    opacity: 0.05;
}

.servico-card:hover::after {
    transform: scale(1);
}

.servico-icon-wrapper {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-green), var(--accent-brown));
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    transition: all 0.4s;
    box-shadow: 0 5px 20px rgba(54, 79, 74, 0.2);
    position: relative;
    z-index: 1;
}

.servico-card:hover .servico-icon-wrapper {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, var(--primary-dark), var(--primary-green));
    box-shadow: 0 8px 30px rgba(31, 123, 0, 0.4);
}

.servico-icon {
    font-size: 2rem;
    color: white;
}

.servico-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 1rem;
    position: relative;
    z-index: 1;
}

.servico-description {
    color: #000000;
    line-height: 1.8;
    position: relative;
    z-index: 1;
}


/* ============================================
   SECTION TITLES
   ============================================ */
.section-title {
    font-size: 2.8rem;
    font-weight: 700;
    text-align: center;
    color: var(--primary-dark);
    margin-bottom: 1rem;
    position: relative;
    display: inline-block;
    left: 50%;
    transform: translateX(-50%);
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--accent-pink), var(--primary-green));
    border-radius: 2px;
}


/* ============================================
   FOOTER
   ============================================ */
footer {
    background:  #364f4a; /*linear-gradient(135deg, var(--primary-dark) 0%, #165d00 100%);*/
    color: white;
    padding: 3rem 0 1.5rem;
    margin-top: 4rem;
    position: relative;
}

footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--accent-pink), transparent);
}

footer h5 {
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: var(--accent-pink);
    position: relative;
    padding-bottom: 10px;
}

footer h5::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background: var(--accent-pink);
}

footer p {
    color: var(--light-green);
    line-height: 1.8;
}

footer i {
    color: var(--light-green);
    transition: color 0.3s, transform 0.3s;
}

footer i:hover {
    color: var(--accent-pink);
    transform: scale(1.2);
}

footer hr {
    border-color: var(--light-green) !important;
    opacity: 0.3;
}


/* ============================================
   ANIMATIONS
   ============================================ */
@keyframes pulse {
    0%, 100% {
        opacity: 0.5;
    }
    50% {
        opacity: 0.8;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes moveBackground {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(100%);
    }
}


/* ============================================
   SCROLL ANIMATIONS
   ============================================ */
.scroll-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
}

.scroll-animate.animated {
    opacity: 1;
    transform: translateY(0);
}


/* ============================================
   MEDIA QUERIES
   ============================================ */
@media (min-width: 992px) {
    .navbar .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }
}



@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .hero-section::after {
        width: 100%;
        opacity: 0.3;
    }

    .hero-silhouette {
        display: none;
    }

    .about-title,
    .about-subtitle {
        font-size: 2rem;
    }

    .section-title {
        font-size: 2.2rem;
    }

    .servicos-grid {
        grid-template-columns: 1fr;
    }
}
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/Logotipo.png') }}" alt="Psicóloga profissional"
                        class="logo-image">
                <span> &nbsp; Equilíbrio</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item">
                        <a class="nav-link" href="/sobrenos">Sobre Nós</a>
                    </li>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
       data-bs-toggle="dropdown" aria-expanded="false">
        Tipos de Terapia
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="/servicos#particulares">Para Particulares</a></li>
    <li><a class="dropdown-item" href="/servicos#educacional">Psicologia Educacional</a></li>
    <li><a class="dropdown-item" href="/servicos#empresas">Programa para Empresas</a></li>
</ul>
</li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagamentoDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-credit-card me-1"></i> Formas de Pagamento
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagamentoDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-university me-2"></i> Banco
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-mobile-alt me-2"></i> Mpesa
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-wallet me-2"></i> Emola
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Entrar</a>
                    </li>
                    <li class="nav-item ms-3">
                        <button class="btn btn-agendar">Agendar Consulta</button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
  <section id="heroCarousel" class="carousel slide carousel-fade hero-section" data-bs-ride="carousel" data-bs-interval="3000">

    <!-- Indicators (Dots) -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active hero-slide" data-image="{{ asset('img/3.PLATFORM CHECK (1).jpg') }}" >
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 hero-content">
                        <h1 class="hero-title">
                            Encontre o seu<br>caminho para o<br>equilíbrio
                        </h1>
                        <p class="hero-subtitle">
                            A Equilíbrio oferece apoio psicológico personalizado para o ajudar a superar desafios e a viver uma vida mais plena.
                        </p>
                        <button class="btn btn-agendar btn-lg">Agendar Consulta</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item hero-slide" data-image="{{ asset('img/9931.jpg') }}">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 hero-content">
                        <h1 class="hero-title">Cuide da sua mente<br>e do seu bem-estar</h1>
                        <p class="hero-subtitle">
                            Sessões de terapia para todas as idades com foco no seu crescimento emocional.
                        </p>
                        <button class="btn btn-agendar btn-lg">Agendar Consulta</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item hero-slide"  data-image="{{ asset('img/ACOLHIMENTO_2_1.jpg') }}">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 hero-content">
                        <h1 class="hero-title">Apoio profissional<br>quando mais precisa</h1>
                        <p class="hero-subtitle">
                            Ajudamos a ultrapassar ansiedade, stress e outros desafios emocionais.
                        </p>
                        <button class="btn btn-agendar btn-lg">Agendar Consulta</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</section>


    <!-- About Section -->
    <section class="about-section" id="sobre">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 about-content scroll-animate">
                    <h2 class="about-title">Sobre Nós:</h2>
                    <h3 class="about-subtitle">A Sua Jornada<br>Começa Aqui</h3>
                    <p class="about-text">
                        Na Equilíbrio, acreditamos que todos merecem encontrar a paz interior. A nossa equipa de
                        psicólogos dedicados está empenhada em fornecer um espaço seguro e de apoio, onde a nossa missão
                        é guiar, a nossa visão é inspirar e os nossos valores são o pilar da sua confiança.
                    </p>
                    <button class="btn btn-agendar">Conheça a nossa história</button>
                </div>
                <div class="col-lg-6 about-image-wrapper scroll-animate">
                    <img src="{{ asset('img/FOR SPECIAL ACTIVITIES.jpg') }}" alt="Psicóloga profissional"
                        class="about-image">
                </div>
            </div>
        </div>
    </section>

    <!-- MVV Section -->
  

    <!-- Services Section -->
    <section class="servicos-section" id="servicos">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossos Serviços</h2>
                <p class="lead text-muted">Soluções completas para o seu bem-estar e desenvolvimento</p>
            </div>
            <div class="servicos-grid">
                <div class="servico-card scroll-animate"
                    >
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-person-heart servico-icon"></i>
                    </div>
                    <h4 class="servico-title"
                        >
                        Psicoterapia Individual</h4>
                    <p class="servico-description">
                        Atendimento personalizado focado nas suas necessidades específicas, promovendo autoconhecimento
                        e crescimento pessoal.
                    </p>
                </div>
                <div class="servico-card scroll-animate"
                    >
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-people servico-icon"></i>
                    </div>
                    <h4 class="servico-title"
                        >
                        Terapia Familiar e de Casal</h4>
                    <p class="servico-description">
                        Fortalecimento de vínculos e resolução de conflitos, promovendo relacionamentos saudáveis e
                        harmoniosos.
                    </p>
                </div>
                <div class="servico-card scroll-animate"
                   >
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-diagram-3 servico-icon"></i>
                    </div>
                    <h4 class="servico-title"
                        >
                        Terapia em Grupo</h4>
                    <p class="servico-description">
                        Espaço de apoio mútuo e compartilhamento de experiências para crescimento coletivo.
                    </p>
                </div>
                <div class="servico-card scroll-animate"
                    >
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-building servico-icon"></i>
                    </div>
                    <h4 class="servico-title"
                        >
                        Workshops e Formação</h4>
                    <p class="servico-description">
                        Identificação e seleção de talentos alinhados aos valores e necessidades da sua organização.
                    </p>
                </div>
                <!--  <div class="servico-card scroll-animate">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-mortarboard servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Formações Corporativas</h4>
                    <p class="servico-description">
                        Capacitações em liderança, comunicação, coesão de equipas e desenvolvimento organizacional.
                    </p>
                </div>
                <div class="servico-card scroll-animate">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-signpost-2 servico-icon"></i>
                    </div>
                    <h4 class="servico-title" >Orientação Vocacional</h4>
                    <p class="servico-description">
                        Apoio na descoberta de aptidões e escolhas profissionais alinhadas ao propósito e potencial de cada indivíduo.
                    </p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Equilíbrio</h5>
                    <p>Consultório Psicológico<br>Não estás sozinha(o). Estamos aqui para caminhar
                        contigo, ao teu ritmo.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contacto</h5>
                    <p>
                        <i class="bi bi-telephone me-2"></i> +258 84 736 1470<br>
                        <i class="bi bi-envelope me-2"></i> consultorio.equilibrio@gmail.com<br>
                        <i class="bi bi-geo-alt me-2"></i> Maputo, Moçambique
                    </p>
                    <div class="mt-2">
                        <a href="https://www.facebook.com/seu-perfil" target="_blank"
                            class="me-3 text-decoration-none text-dark">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="https://www.instagram.com/psicologa_clinica_mz_?igsh=cnk5bW11dmE1YXZx&utm_source=qr" target="_blank"
                            class="me-3 text-decoration-none text-dark">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="https://www.youtube.com/seu-canal" target="_blank"
                            class="text-decoration-none text-dark">
                            <i class="bi bi-youtube fs-5"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Horário de Atendimento</h5>
                    <p>
                        Segunda - Sexta: 08h - 20h<br>
                        Sábado: 08h - 13h<br>
                        Domingo: Fechado
                    </p>
                </div>
            </div>
            <hr style="border-color: rgba(197, 213, 209, 0.3);">
            <div class="text-center">
                <p>&copy; 2025 Consultório Equilíbrio. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = target.offsetTop - navbarHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add stagger delay to service cards
        document.querySelectorAll('.servico-card').forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });

        // Add stagger delay to MVV cards
        document.querySelectorAll('.mvv-card').forEach((card, index) => {
            card.parentElement.style.transitionDelay = `${index * 0.15}s`;
        });
    </script>
    <script>
    document.querySelectorAll('.hero-slide').forEach(slide => {
        const img = slide.getAttribute('data-image');
        slide.style.backgroundImage = `url('${img}')`;
    });
</script>

</body>

</html>
