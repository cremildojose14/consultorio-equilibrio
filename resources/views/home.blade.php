<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equilíbrio - Consultório Psicológico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-dark: #2c4a52;
            --primary-blue: #4a90e2;
            --accent-green: #1f7b00;
            --text-dark: #2d3748;
            --bg-light: #f7fafc;
        }

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

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(44, 74, 82, 0.95);
            padding: 1.2rem 0;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .navbar.scrolled {
            padding: 0.8rem 0;
            background-color: rgba(44, 74, 82, 0.98);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: white !important;
            letter-spacing: 0.5px;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            color: rgba(255,255,255,0.9) !important;
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
            background: var(--primary-blue);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .nav-link:hover {
            color: white !important;
        }

        .btn-agendar {
            background: linear-gradient(135deg, var(--primary-blue), #3a7bc8);
            color: white;
            border: none;
            padding: 0.7rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-agendar::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-agendar:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-agendar:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(74, 144, 226, 0.5);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #2c4a52 0%, #1a2f38 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            right: -20%;
            top: 50%;
            transform: translateY(-50%);
            width: 60%;
            height: 150%;
            background: radial-gradient(circle, rgba(74, 144, 226, 0.1) 0%, transparent 70%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: translateY(-50%) scale(1); opacity: 0.5; }
            50% { transform: translateY(-50%) scale(1.1); opacity: 0.8; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeInUp 1s ease-out;
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

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--primary-blue), #5ba3ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 500px;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .hero-buttons {
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .hero-floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(74, 144, 226, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .floating-circle:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            right: 10%;
            animation-delay: 0s;
        }

        .floating-circle:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            right: 20%;
            animation-delay: 2s;
        }

        .floating-circle:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 40%;
            right: 30%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* About Section */
        .about-section {
            padding: 8rem 0;
            background-color: var(--bg-light);
            position: relative;
            overflow: hidden;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom right, white 49%, transparent 50%);
        }

        .section-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .section-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .about-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .about-subtitle {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
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
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-green));
            border-radius: 2px;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 2rem;
        }

        .about-image {
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .about-image:hover {
            transform: scale(1.05) rotate(2deg);
        }

        /* MVV Section */
        .mvv-section {
            padding: 8rem 0;
            background: linear-gradient(135deg, #f7fafc 0%, #e8f4f8 100%);
            position: relative;
            overflow: hidden;
        }

        .mvv-section::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom right, var(--bg-light) 49%, transparent 50%);
        }

        .mvv-card {
            background: white;
            border-radius: 30px;
            padding: 3rem;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
        }

        .mvv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, transparent, var(--primary-blue), transparent);
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
            background: radial-gradient(circle, rgba(74, 144, 226, 0.1), transparent);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .mvv-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
            border-color: var(--primary-blue);
        }

        .mvv-card:hover::before {
            transform: translateX(100%);
        }

        .mvv-card:hover::after {
            width: 500px;
            height: 500px;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .mvv-icon.visao {
            background: linear-gradient(135deg, var(--accent-green) 0%, #2d6a4f 100%);
            color: white;
            box-shadow: 0 10px 30px rgba(31, 123, 0, 0.4);
        }

        .mvv-icon.objetivo {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #3a7bc8 100%);
            color: white;
            box-shadow: 0 10px 30px rgba(74, 144, 226, 0.4);
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

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            color: var(--text-dark);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        /* Serviços Section */
        .servicos-section {
            padding: 8rem 0;
            background: white;
            position: relative;
            overflow: hidden;
        }

        .servicos-section::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom right, #e8f4f8 49%, transparent 50%);
        }

        .servicos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .servico-card {
            background: linear-gradient(135deg, #ffffff 0%, var(--bg-light) 100%);
            border-radius: 25px;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid #e2e8f0;
            cursor: pointer;
        }

        .servico-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-green));
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
            background: radial-gradient(circle, rgba(255,255,255,0.1), transparent);
            transform: scale(0);
            transition: transform 0.6s;
        }

        .servico-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0,0,0,0.2);
            border-color: var(--accent-green);
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
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-green));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: all 0.4s;
            position: relative;
            z-index: 1;
        }

        .servico-card:hover .servico-icon-wrapper {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 15px 40px rgba(74, 144, 226, 0.4);
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
            color: #4a5568;
            line-height: 1.8;
            position: relative;
            z-index: 1;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #2c4a52 0%, #1a2f38 100%);
            color: white;
            padding: 4rem 0 1.5rem;
            margin-top: 4rem;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom right, white 49%, transparent 50%);
        }

        footer h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--primary-blue);
            border-radius: 2px;
        }

        footer p {
            color: rgba(255,255,255,0.8);
            line-height: 1.8;
            transition: color 0.3s;
        }

        footer p:hover {
            color: white;
        }

        footer i {
            color: var(--primary-blue);
            transition: transform 0.3s;
        }

        footer p:hover i {
            transform: scale(1.2);
        }

        /* Scroll animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in-left {
            animation: slideInLeft 0.8s ease-out;
        }

        .slide-in-right {
            animation: slideInRight 0.8s ease-out;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .about-title,
            .about-subtitle {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .navbar {
                padding: 1rem 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span>Equilíbrio</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#missao">Missão</a>
                    </li>
                    <li class="nav-item ms-3">
                        <button class="btn btn-agendar">Agendar Consulta</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-floating-elements">
            <div class="floating-circle"></div>
            <div class="floating-circle"></div>
            <div class="floating-circle"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 hero-content">
                    <h1 class="hero-title">
                        Encontre o seu<br>
                        caminho para o<br>
                        <span>bem-estar</span>
                    </h1>
                    <p class="hero-subtitle">
                        A Equilíbrio oferece apoio psicológico personalizado para o ajudar a superar desafios e a viver uma vida mais plena.
                    </p>
                    <div class="hero-buttons">
                        <button class="btn btn-agendar btn-lg">Agendar Consulta</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="sobre">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 section-reveal">
                    <h2 class="about-title">Sobre Nós:</h2>
                    <h3 class="about-subtitle">A Sua Jornada<br>Começa Aqui</h3>
                    <p class="about-text">
                        Na Equilíbrio, acreditamos que todos merecem encontrar a paz interior. A nossa equipa de psicólogos dedicados está empenhada em fornecer um espaço seguro e de apoio, onde a nossa missão é guiar, a nossa visão é inspirar e os nossos valores são o pilar da sua confiança.
                    </p>
                    <button class="btn btn-agendar">Conheça a nossa história</button>
                </div>
                <div class="col-lg-6 section-reveal">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=700&fit=crop" 
                         alt="Psicóloga profissional" 
                         class="about-image">
                </div>
            </div>
        </div>
    </section>

    <!-- MVV Section -->
    <section class="mvv-section" id="missao">
        <div class="container">
            <div class="text-center mb-5 section-reveal">
                <h2 class="section-title">Missão, Visão e Objetivo</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="mvv-card section-reveal">
                        <div class="mvv-icon missao">
                            <i class="bi bi-compass"></i>
                        </div>
                        <h3 class="mvv-title">Missão</h3>
                        <p class="mvv-text">
                            Ser um farol de esperança e guia compassivo para os nossos clientes, oferecendo atendimento psicológico, treinamento de habilidades psicossociais e orientação vocacional para ajudá-los a alcançar equilíbrio e potencial máximo.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mvv-card section-reveal">
                        <div class="mvv-icon visao">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3 class="mvv-title">Visão</h3>
                        <p class="mvv-text">
                            Ser o ponto de Equilíbrio na jornada de nossos clientes. Reconhecido como um centro de excelência em atendimento psicológico, treinamento de habilidades psicossociais e orientação vocacional, inovador e inclusivo.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mvv-card section-reveal">
                        <div class="mvv-icon objetivo">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="mvv-title">Objetivo</h3>
                        <p class="mvv-text">
                            Promover uma sociedade mais saudável, humana e Equilibrada, contribuindo ativamente para o bem-estar mental e emocional de indivíduos, famílias e organizações.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="servicos-section" id="servicos">
        <div class="container">
            <div class="text-center mb-5 section-reveal">
                <h2 class="section-title">Nossos Serviços</h2>
                <p class="lead text-muted">Soluções completas para o seu bem-estar e desenvolvimento</p>
            </div>
            <div class="servicos-grid">
                <div class="servico-card section-reveal">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-person-heart servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Psicoterapia Individual</h4>
                    <p class="servico-description">
                        Atendimento personalizado focado nas suas necessidades específicas, promovendo autoconhecimento e crescimento pessoal.
                    </p>
                </div>
                <div class="servico-card section-reveal">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-people servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Terapia Familiar e de Casal</h4>
                    <p class="servico-description">
                        Fortalecimento de vínculos e resolução de conflitos, promovendo relacionamentos saudáveis e harmoniosos.
                    </p>
                </div>
                <div class="servico-card section-reveal">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-diagram-3 servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Terapia em Grupo</h4>
                    <p class="servico-description">
                        Espaço de apoio mútuo e compartilhamento de experiências para crescimento coletivo.
                    </p>
                </div>
                <div class="servico-card section-reveal">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-building servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Recrutamento e Seleção</h4>
                    <p class="servico-description">
                        Identificação e seleção de talentos alinhados aos valores e necessidades da sua organização.
                    </p>
                </div>
                <div class="servico-card section-reveal">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-mortarboard servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Formações Corporativas</h4>
                    <p class="servico-description">
                        Capacitações em liderança, comunicação, coesão de equipas e desenvolvimento organizacional.
                    </p>
                </div>
                <div class="servico-card section-reveal">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-signpost-2 servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Orientação Vocacional</h4>
                    <p class="servico-description">
                        Apoio na descoberta de aptidões e escolhas profissionais alinhadas ao propósito e potencial de cada indivíduo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Equilíbrio</h5>
                    <p>Consultório Psicológico<br>Cuidando da sua saúde mental com profissionalismo e dedicação.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contato</h5>
                    <p>
                        <i class="bi bi-telephone me-2"></i> +258 84 000 0000<br>
                        <i class="bi bi-envelope me-2"></i> contato@equilibrio.co.mz<br>
                        <i class="bi bi-geo-alt me-2"></i> Maputo, Moçambique
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Horário de Atendimento</h5>
                    <p>
                        Segunda - Sexta: 08h - 18h<br>
                        Sábado: 08h - 13h<br>
                        Domingo: Fechado
                    </p>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.2);">
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

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        // Observe all elements with section-reveal class
        document.querySelectorAll('.section-reveal').forEach(element => {
            observer.observe(element);
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add stagger animation to service cards
        const serviceCards = document.querySelectorAll('.servico-card');
        serviceCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroContent = document.querySelector('.hero-content');
            if (heroContent) {
                heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
                heroContent.style.opacity = 1 - (scrolled * 0.002);
            }
        });
    </script>
</body>
</html>