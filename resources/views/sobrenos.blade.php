<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Equilíbrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --primary-green: #364f4a;
            --primary-brown: #967552;
            --light-green: #c5d5d1;
            --light-brown: #c9a98a;
            --accent-pink: #ffcccc;
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
            background-color: #364f4a;
            padding: 1.2rem 0;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar.scrolled {
            padding: 0.8rem 0;
            background-color: #364f4a;
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

        .logo-image {
    height: 50px;          /* Adjust based on your navbar height */
    width: auto;           /* Maintain aspect ratio */
    display: block;        /* Remove inline spacing */
    object-fit: contain;   /* Keep the logo fully visible */
    margin: 0 auto;        /* Center if needed */
}


        .btn-agendar {
            background: linear-gradient(135deg, var(--primary-brown), #7d5d42);
            color: white;
            border: none;
            padding: 0.7rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(150, 117, 82, 0.3);
        }

        .btn-agendar:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(150, 117, 82, 0.5);
        }

        /* ============================================
           PAGE HEADER
           ============================================ */
        .page-header {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-brown) 100%);
            padding: 150px 0 80px;
            margin-top: 76px;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.3;
        }

        .page-header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .page-header p {
            font-size: 1.3rem;
            color: var(--light-green);
            position: relative;
            z-index: 1;
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
           STORY SECTION
           ============================================ */
        .story-section {
            padding: 6rem 0;
            background: white;
        }

        .story-content {
            max-width: 900px;
            margin: 0 auto;
        }

        .story-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 20px;
        }

        .story-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-brown), var(--primary-green));
        }

        .story-text {
            font-size: 1.15rem;
            line-height: 1.9;
            color: #4a5568;
            margin-bottom: 1.5rem;
        }

        .highlight-box {
            background: linear-gradient(135deg, var(--light-green), #d5e5e1);
            padding: 2.5rem;
            border-radius: 20px;
            margin: 3rem 0;
            border-left: 5px solid var(--primary-green);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .highlight-box h4 {
            color: var(--primary-green);
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .highlight-box p {
            color: #4a5568;
            line-height: 1.8;
            margin: 0;
        }

        /* ============================================
           VALUES SECTION
           ============================================ */
        .values-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--light-green) 0%, #d5e5e1 100%);
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            color: var(--primary-green);
            margin-bottom: 3rem;
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
            background: linear-gradient(90deg, var(--primary-brown), var(--primary-green));
            border-radius: 2px;
        }

        .value-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            height: 100%;
            transition: all 0.4s;
            border: 2px solid transparent;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-brown));
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(54, 79, 74, 0.2);
            border-color: var(--primary-green);
        }

        .value-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-brown));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: white;
            transition: all 0.4s;
        }

        .value-card:hover .value-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .value-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 1rem;
        }

        .value-text {
            color: #4a5568;
            line-height: 1.8;
        }



        
/* ============================================
   MVV SECTION
   ============================================ */
.mvv-section {
    padding: 6rem 0;
    background: linear-gradient(135deg, #ffffff 0%, var(--accent-pink) 50%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.mvv-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: -50%;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(197, 213, 209, 0.3) 0%, transparent 70%);
    animation: moveBackground 15s linear infinite;
}

.mvv-card {
    background: white;
    border-radius: 30px;
    padding: 3rem;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid var(--light-green);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.mvv-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, transparent, var(--primary-green), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s;
}

.mvv-card::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(54, 79, 74, 0.1) 0%, transparent 70%);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.mvv-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 25px 50px rgba(54, 79, 74, 0.2);
    border-color: var(--primary-green);
}

.mvv-card:hover::before {
    transform: translateX(100%);
}

.mvv-card:hover::after {
    width: 400px;
    height: 400px;
}

.mvv-icon {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    margin: 0 auto 2rem;
    transition: all 0.5s;
    position: relative;
    z-index: 1;
}

.mvv-card:hover .mvv-icon {
    transform: scale(1.15) rotate(360deg);
}

.mvv-icon.missao {
    background: linear-gradient(135deg, var(--primary-green) 0%, #165d00 100%);
    color: white;
    box-shadow: 0 10px 30px rgba(31, 123, 0, 0.3);
}

.mvv-icon.visao {
    background: linear-gradient(135deg, var(--primary-green) 0%, #165d00 100%);
    color: white;
    box-shadow: 0 10px 30px rgba(54, 79, 74, 0.3);
}

.mvv-icon.objetivo {
    background: linear-gradient(135deg, var(--primary-green) 0%, #165d00 100%);
    color: white;
    box-shadow: 0 10px 30px rgba(150, 117, 82, 0.3);
}

.mvv-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-dark);
    margin-bottom: 1.5rem;
    text-align: center;
    position: relative;
    z-index: 1;
}

.mvv-text {
    font-size: 1.1rem;
    line-height: 1.9;
    color: #4a5568;
    text-align: center;
    position: relative;
    z-index: 1;
}



        /* ============================================
           TEAM SECTION
           ============================================ */
        .team-section {
            padding: 6rem 0;
            background: white;
        }

        .team-intro {
            max-width: 800px;
            margin: 0 auto 4rem;
            text-align: center;
        }

        .team-intro p {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #4a5568;
        }

        .team-member {
            text-align: center;
            margin-bottom: 3rem;
        }

        .team-photo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.5rem;
            border: 5px solid var(--light-green);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: all 0.4s;
        }

        .team-member:hover .team-photo {
            transform: scale(1.05);
            border-color: var(--primary-green);
            box-shadow: 0 15px 40px rgba(54, 79, 74, 0.25);
        }

        .team-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
        }

        .team-role {
            font-size: 1.1rem;
            color: var(--primary-brown);
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .team-bio {
            color: #4a5568;
            line-height: 1.8;
            max-width: 600px;
            margin: 0 auto;
        }

        /* ============================================
           CTA SECTION
           ============================================ */
        .cta-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-brown) 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: var(--light-green);
        }

        .btn-cta {
            background: white;
            color: var(--primary-green);
            border: none;
            padding: 1rem 3rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            background: var(--light-brown);
            color: white;
        }

        /* ============================================
           FOOTER
           ============================================ */
        footer {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-brown) 100%);
            color: white;
            padding: 3rem 0 1.5rem;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--light-green), transparent);
        }

        footer h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--light-brown);
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
            background: var(--light-brown);
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

        /* ============================================
           ANIMATIONS
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
            .page-header h1 {
                font-size: 2.5rem;
            }

            .story-title,
            .section-title {
                font-size: 2rem;
            }

            .team-photo {
                width: 200px;
                height: 200px;
            }

            .cta-title {
                font-size: 2rem;
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
                        <a class="nav-link" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/sobrenos">Sobre Nós</a>
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="text-center">
                <h1 class="scroll-animate">NOSSA RAZÃO DE SER</h1>
                <p class="scroll-animate">Dedicados a promover o equilíbrio emocional e o bem-estar de cada pessoa</p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
<section class="story-section">
    <div class="container">
        <div class="story-content scroll-animate">
            <h2 class="story-title">A Nossa Jornada</h2>

            <p class="story-text">
                Em Moçambique, a saúde mental enfrenta uma crise silenciosa, mas devastadora. Segundo a Organização Mundial da Saúde (OMS), o país está entre os 10 do mundo com maior taxa de suicídio, estimada em 40 mortes por 100 mil habitantes, e a maioria das vítimas são jovens entre 15 e 25 anos, a faixa etária que representa mais de 65% da população e que impulsiona o futuro do país. Muitos desses jovens crescem sem orientação emocional, expostos a ambientes familiares rígidos ou pouco afetivos, sem acesso a apoio psicológico, e acabam encontrando refúgio em comportamentos de risco. Essa realidade não afeta apenas indivíduos: reflete-se em famílias, comunidades e organizações, prejudicando produtividade, coesão social e desenvolvimento humano.
            </p>

            <p class="story-text">
                Foi diante dessa realidade que a fundadora sentiu-se chamada a agir. Dra Dercia Rita B. Massingue, psicóloga clínica e Inovadora Social. Desde cedo testemunhou amigos e colegas perderem-se para drogas e comportamentos autodestrutivos, enquanto famílias lidavam com padrões educativos rígidos e pouco apoio emocional. Essas experiências a mostraram que a saúde mental não pode ser um privilégio distante; ela é essencial para que cada pessoa encontre equilíbrio e propósito. Assim nasceu o Consultorio Psicologico EQUILIBRIO, com o objectivo de criar caminhos de cuidado, orientação e referência positiva para jovens, adultos e organizações.
            </p>

            <p class="story-text">
                No Consultorio Psicologico Equilibrio, transformamos desafios em soluções concretas. Oferecemos apoio psicológico acessível, ferramentas práticas e ambientes de aprendizagem emocionalmente saudáveis, ajudando cada pessoa a desenvolver resiliência, autoconhecimento e bem-estar. Acreditamos que investir na saúde mental é uma estratégia de transformação social e desenvolvimento humano. Quando indivíduos encontram equilíbrio, famílias encontram harmonia e organizações tornam-se mais produtivas e conscientes toda a sociedade ganha.
            </p>

            <p class="story-text">
                Estamos aqui para mudar a narrativa da saúde mental em Moçambique: para que jovens, adultos e comunidades não apenas sobrevivam, mas floresçam, com suporte, orientação e modelos de referência positivos.
            </p>

        </div>
    </div>
</section>


    <!-- MVV Section -->
      <section class="mvv-section" id="missao">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Missão, Visão e Objetivo</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 scroll-animate">
                    <div class="mvv-card">
                        <div class="mvv-icon missao">
                            <i class="bi bi-compass"></i>
                        </div>
                        <h3 class="mvv-title">Missão</h3>
                        <p class="mvv-text">
                            Ser um farol de esperança e guia compassivo para os nossos clientes, oferecendo atendimento
                            psicológico, treinamento de habilidades psicossociais e orientação vocacional para ajudá-los
                            a alcançar equilíbrio e potencial máximo.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 scroll-animate">
                    <div class="mvv-card">
                        <div class="mvv-icon visao">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3 class="mvv-title">Visão</h3>
                        <p class="mvv-text">
                            Ser o ponto de Equilíbrio na jornada de nossos clientes. Reconhecido como um centro de
                            excelência em atendimento psicológico, treinamento de habilidades psicossociais e orientação
                            vocacional, inovador e inclusivo.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 scroll-animate">
                    <div class="mvv-card">
                        <div class="mvv-icon objetivo">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="mvv-title">Objetivo</h3>
                        <p class="mvv-text">
                            Promover uma sociedade mais saudável, humana e Equilibrada, contribuindo ativamente para o
                            bem-estar mental e emocional de indivíduos, famílias e organizações.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Os Nossos Valores</h2>
                <p class="lead text-muted">Princípios que guiam cada ação e decisão</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 scroll-animate">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-balance-scale"></i>
                        </div>
                        <h4 class="value-title">Equilíbrio</h4>
                        <p class="value-text">
                            Promovemos harmonia entre mente, corpo e emoções, guiando cada pessoa para encontrar seu próprio ponto de equilíbrio.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 scroll-animate">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h4 class="value-title">Empatia</h4>
                        <p class="value-text">
                            Compreendemos profundamente as emoções e experiências de cada pessoa, oferecendo um ambiente de verdadeiro acolhimento.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 scroll-animate">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-hand-holding-heart"></i>
                        </div>
                        <h4 class="value-title">Cuidado</h4>
                        <p class="value-text">
                            Cada interação é realizada com atenção genuína ao bem-estar físico, emocional e mental dos nossos clientes.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 scroll-animate">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-person-hearts"></i>
                        </div>
                        <h4 class="value-title">Humanidade</h4>
                        <p class="value-text">
                            Valorizamos a essência humana em cada relação, tratando todos com dignidade, respeito e compaixão.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 scroll-animate">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-ear"></i>
                        </div>
                        <h4 class="value-title">Escuta Ativa</h4>
                        <p class="value-text">
                            Ouvimos atentamente não apenas as palavras, mas também as emoções e necessidades não expressas de cada pessoa.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 scroll-animate">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4 class="value-title">Inovação</h4>
                        <p class="value-text">
                            Mantemo-nos atualizados com as mais recentes abordagens terapêuticas, integrando novas metodologias ao nosso trabalho.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">A Nossa Equipa</h2>
            </div>
            <div class="team-intro scroll-animate">
                <p>
                   <p>
A nossa equipa é formada por profissionais qualificados e dedicados ao bem-estar dos nossos clientes. 
Contamos com <strong>Psicóloga Clínica e Inovadora Social</strong>, <strong>Médica Geral</strong>, 
<strong>Psiquiatra</strong> e <strong>Psicanalista</strong>, que atuam de forma integrada, ética e humanizada. 
Juntos, promovemos um ambiente de cuidado, respeito e transformação.
</p>
    </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 scroll-animate">
                    <div class="team-member">
                        <img src="{{  asset('img/FOR SPECIAL ACTIVITIES.jpg') }}" alt="Psicóloga" class="team-photo">
                        <h3 class="team-name">Dra. Dércia Rita Nhaca</h3>
                        <p class="team-role">Psicóloga Clínica | Fundadora</p>
                        <p class="team-bio">
                            Psicóloga clínica dedicada a promover a saúde mental e o equilíbrio interior. Especializada em psicoterapia individual, familiar e de casal, com abordagens inovadoras e personalizadas baseadas em evidência científica. Sua missão é ser um farol de esperança, ajudando pessoas a alcançarem seu potencial máximo e viverem com propósito e plenitude.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-animate">
                <h2 class="cta-title">Pronto para Começar a Sua Jornada?</h2>
                <p class="cta-text">Não está sozinho. Estamos aqui para caminhar contigo, ao teu ritmo.</p>
                <button class="btn btn-cta">Agendar Consulta</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Equilíbrio</h5>
                    <p>Consultório Psicológico<br>Não estás sozinha(o). Estamos aqui para caminhar contigo, ao teu ritmo.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contacto</h5>
                    <p>
                        <i class="bi bi-telephone me-2"></i> +258 84 736 1470<br>
                        <i class="bi bi-envelope me-2"></i> consultorio.equilibrio@gmail.com<br>
                        <i class="bi bi-geo-alt me-2"></i> Maputo, Moçambique
                    </p>
                    <div class="mt-2">
                        <a href="#" target="_blank" class="me-3 text-decoration-none">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="https://www.instagram.com/psicologa_clinica_mz_" target="_blank" class="me-3 text-decoration-none">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="#" target="_blank" class="text-decoration-none">
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

        // Add stagger delay to value cards
        document.querySelectorAll('.value-card').forEach((card, index) => {
            card.parentElement.style.transitionDelay = `${index * 0.1}s`;
        });

          // Add stagger delay to MVV cards
        document.querySelectorAll('.mvv-card').forEach((card, index) => {
            card.parentElement.style.transitionDelay = `${index * 0.15}s`;
        });
    </script>
</body>

</html>