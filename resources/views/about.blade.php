<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - Equilíbrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-dark: #2c4a52;
            --primary-blue: #4a90e2;
            --accent-green: #1f7b00;
            --secondary-brown: #967552;
            --light-green: #c5d5d1;
            --soft-pink: #ffcccc;
            --text-dark: #2d3748;
            --bg-light: #f7fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(44, 74, 82, 0.98);
            padding: 1.2rem 0;
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: white !important;
            transition: transform 0.3s;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            margin: 0 1rem;
            position: relative;
            transition: all 0.3s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        /* Hero Section */
        .hero-quem-somos {
            background: linear-gradient(135deg, #1a2f38 0%, var(--primary-dark) 50%, var(--accent-green) 100%);
            min-height: 70vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-quem-somos::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(74, 144, 226, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 15s ease-in-out infinite;
        }

        .hero-quem-somos::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(31, 123, 0, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 20s ease-in-out infinite reverse;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .hero-slogan {
            font-size: 1.6rem;
            color: rgba(255,255,255,0.95);
            font-weight: 300;
            font-style: italic;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-stats {
            display: flex;
            gap: 3rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            display: block;
        }

        .stat-label {
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
            margin-top: 0.5rem;
        }

        /* Sobre Section */
        .sobre-section {
            padding: 120px 0;
            background: white;
            position: relative;
        }

        .sobre-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200px;
            background: linear-gradient(to bottom, var(--bg-light), transparent);
        }

        .section-label {
            display: inline-block;
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-dark);
            margin-bottom: 2rem;
            line-height: 1.2;
        }

        .sobre-text {
            font-size: 1.2rem;
            line-height: 2;
            color: #4a5568;
            margin-bottom: 2rem;
        }

        .sobre-highlight {
            background: linear-gradient(135deg, var(--light-green), rgba(74, 144, 226, 0.1));
            padding: 2rem;
            border-radius: 20px;
            border-left: 4px solid var(--accent-green);
            margin: 2rem 0;
        }

        .sobre-image-wrapper {
            position: relative;
        }

        .sobre-image-wrapper::before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-green));
            border-radius: 30px;
            z-index: -1;
        }

        .sobre-image {
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.2);
            width: 100%;
            height: auto;
        }

        /* MVV Section */
        .mvv-section {
            padding: 120px 0;
            background: linear-gradient(135deg, var(--bg-light) 0%, #e8f4f8 100%);
            position: relative;
        }

        .mvv-container {
            max-width: 1400px;
            margin: 0 auto;
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

        .mvv-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
            border-color: var(--primary-blue);
        }

        .mvv-card:hover::before {
            transform: translateX(100%);
        }

        .mvv-icon-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
        }

        .mvv-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            position: relative;
            z-index: 2;
            transition: transform 0.5s;
        }

        .mvv-card:hover .mvv-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .mvv-icon::after {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: inherit;
            opacity: 0.3;
            z-index: -1;
            animation: ripple 2s infinite;
        }

        @keyframes ripple {
            0% {
                transform: scale(1);
                opacity: 0.3;
            }
            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        .mvv-icon.missao {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .mvv-icon.visao {
            background: linear-gradient(135deg, var(--accent-green) 0%, #2d6a4f 100%);
            color: white;
        }

        .mvv-icon.objetivo {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #3a7bc8 100%);
            color: white;
        }

        .mvv-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .mvv-text {
            font-size: 1.1rem;
            line-height: 1.9;
            color: #4a5568;
            text-align: center;
        }

        /* Serviços Section */
        .servicos-section {
            padding: 120px 0;
            background: white;
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
            transition: all 0.4s;
            border: 2px solid transparent;
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

        .servico-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            border-color: var(--accent-green);
        }

        .servico-card:hover::before {
            opacity: 0.03;
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
        }

        .servico-card:hover .servico-icon-wrapper {
            transform: scale(1.1) rotate(5deg);
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
        }

        .servico-description {
            color: #4a5568;
            line-height: 1.8;
        }

        /* Valores Section */
        .valores-section {
            padding: 120px 0;
            background: linear-gradient(135deg, var(--primary-dark) 0%, #1a2f38 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .valores-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(74, 144, 226, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .valores-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .valor-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.4s;
        }

        .valor-card:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-10px);
            border-color: rgba(255,255,255,0.3);
        }

        .valor-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent-green), var(--primary-blue));
            color: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .valor-card h5 {
            font-weight: 700;
            margin-bottom: 0.8rem;
            font-size: 1.2rem;
        }

        .valor-card p {
            color: rgba(255,255,255,0.8);
            line-height: 1.7;
            margin: 0;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--accent-green) 0%, var(--primary-blue) 100%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before,
        .cta-section::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
        }

        .cta-section::before {
            width: 400px;
            height: 400px;
            top: -200px;
            left: -200px;
        }

        .cta-section::after {
            width: 300px;
            height: 300px;
            bottom: -150px;
            right: -150px;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-cta {
            background-color: white;
            color: var(--primary-dark);
            border: none;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .btn-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            background-color: var(--primary-dark);
            color: white;
        }

        /* Footer */
        footer {
            background-color: #1a2f38;
            color: white;
            padding: 4rem 0 2rem;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        footer p {
            color: rgba(255,255,255,0.8);
            line-height: 2;
        }

        footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: white;
        }

        /* Animações */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1.5rem;
            }

            .servicos-grid,
            .valores-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-flower2 me-2"></i>Equilíbrio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/sobre">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/equipa">Equipa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-quem-somos">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 hero-content">
                    <div class="hero-badge fade-in">
                        <i class="bi bi-award me-2"></i>Centro de Excelência em Saúde Mental
                    </div>
                    <h1 class="hero-title fade-in">Quem Somos</h1>
                    <p class="hero-slogan fade-in">
                        Para uma mente leve e uma vida Equilibrada
                    </p>
                    <div class="hero-stats fade-in">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Vidas Transformadas</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10+</span>
                            <span class="stat-label">Especialidades</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Dedicação</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Section -->
    <section class="sobre-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-label">SOBRE NÓS</span>
                    <h2 class="section-title">O Seu Parceiro na Jornada do Bem-Estar</h2>
                    <p class="sobre-text">
                        O <strong>Consultório Psicológico Equilíbrio</strong> é um centro de excelência em saúde mental onde prestamos serviços de psicoterapia individual, em grupo, familiar e de casal para indivíduos e grupos.
                    </p>
                    <p class="sobre-text">
                        Acreditamos que todos merecem encontrar a paz interior e alcançar seu potencial máximo. Nossa equipa de psicólogos dedicados está empenhada em fornecer um espaço seguro e de apoio.
                    </p>
                    <div class="sobre-highlight">
                        <p class="mb-0">
                            <strong>💼 Serviços Corporativos:</strong> Oferecemos também descoberta de talentos para empresas através de recrutamento e seleção, formações em liderança, comunicação, coesão de equipas e atividades de promoção de saúde mental nas organizações.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sobre-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=700&h=800&fit=crop" 
                             alt="Equipa Equilíbrio" 
                             class="sobre-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MVV Section -->
    <section class="mvv-section">
        <div class="container mvv-container">
            <div class="text-center mb-5">
                <span class="section-label">NOSSOS PILARES</span>
                <h2 class="section-title">Missão, Visão e Objetivo</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="mvv-card">
                        <div class="mvv-icon-wrapper">
                            <div class="mvv-icon missao">
                                <i class="bi bi-compass"></i>
                            </div>
                        </div>
                        <h3 class="mvv-title">Missão</h3>
                        <p class="mvv-text">
                            Ser um farol de esperança e guia compassivo para os nossos clientes, oferecendo atendimento psicológico, treinamento de habilidades psicossociais e orientação vocacional para ajudá-los a alcançar equilíbrio e potencial máximo.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mvv-card">
                        <div class="mvv-icon-wrapper">
                            <div class="mvv-icon visao">
                                <i class="bi bi-eye"></i>
                            </div>
                        </div>
                        <h3 class="mvv-title">Visão</h3>
                        <p class="mvv-text">
                            Ser o ponto de Equilíbrio na jornada de nossos clientes. Reconhecido como um centro de excelência em atendimento psicológico, treinamento de habilidades psicossociais e orientação vocacional, inovador e inclusivo.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mvv-card">
                        <div class="mvv-icon-wrapper">
                            <div class="mvv-icon objetivo">
                                <i class="bi bi-bullseye"></i>
                            </div>
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

    <!-- Serviços Section -->
    <section class="servicos-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-label">O QUE FAZEMOS</span>
                <h2 class="section-title">Nossos Serviços</h2>
                <p class="lead text-muted">Soluções completas para o seu bem-estar e desenvolvimento</p>
            </div>
            <div class="servicos-grid">
                <div class="servico-card">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-person-heart servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Psicoterapia Individual</h4>
                    <p class="servico-description">
                        Atendimento personalizado focado nas suas necessidades específicas, promovendo autoconhecimento e crescimento pessoal.
                    </p>
                </div>
                <div class="servico-card">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-people servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Terapia Familiar e de Casal</h4>
                    <p class="servico-description">
                        Fortalecimento de vínculos e resolução de conflitos, promovendo relacionamentos saudáveis e harmoniosos.
                    </p>
                </div>
                <div class="servico-card">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-diagram-3 servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Terapia em Grupo</h4>
                    <p class="servico-description">
                        Espaço de apoio mútuo e compartilhamento de experiências para crescimento coletivo.
                    </p>
                </div>
                <div class="servico-card">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-building servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Recrutamento e Seleção</h4>
                    <p class="servico-description">
                        Identificação e seleção de talentos alinhados aos valores e necessidades da sua organização.
                    </p>
                </div>
                <div class="servico-card">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-mortarboard servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Formações Corporativas</h4>
                    <p class="servico-description">
                        Capacitações em liderança, comunicação, coesão de equipas e desenvolvimento organizacional.
                    </p>
                </div>
                <div class="servico-card">
                    <div class="servico-icon-wrapper">
                        <i class="bi bi-signpost-2 servico-icon"></i>
                    </div>
                    <h4 class="servico-title">Orientação Vocacional</h4>
                    <p class="servico-description">
                        Apoio na descoberta de aptidões e escolhas profissionais al