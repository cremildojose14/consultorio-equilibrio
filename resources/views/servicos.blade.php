<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Equilíbrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-dark: #364f4a;
            --primary-green: #364f4a;
            --light-green: #c5d5d1;
            --accent-brown: #967552;
            --accent-pink: #ffcccc;
            --text-dark: #2d3748;
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

        /* Navbar */
        .navbar {
            background-color: #364f4a;
            padding: 1.2rem 0;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar.scrolled {
            padding: 0.8rem 0;
            background-color: rgba(54, 79, 74, 0.98);
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
            background: #967552;
            transition: all 0.3s;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .nav-link:hover {
            color: #967552 !important;
        }

        .logo-image {
    height: 50px;          /* Adjust based on your navbar height */
    width: auto;           /* Maintain aspect ratio */
    display: block;        /* Remove inline spacing */
    object-fit: contain;   /* Keep the logo fully visible */
    margin: 0 auto;        /* Center if needed */
}


        .btn-agendar {
            background: linear-gradient(135deg, #967552, #7d5f43);
            color: white;
            border: none;
            padding: 0.7rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(150, 117, 82, 0.3);
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
            box-shadow: 0 6px 25px rgba(150, 117, 82, 0.5);
        }

        .dropdown-menu {
            background-color: #364f4a;
            border: none;
            border-radius: 10px;
            backdrop-filter: blur(8px);
        }

        .dropdown-item {
            color: #fff;
            transition: background 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: rgba(150, 117, 82, 0.3);
            color: #fff;
        }

        /* Hero Header */
        .page-hero {
            background: linear-gradient(135deg, #364f4a 0%, #2a3f3b 100%);
            padding: 8rem 0 4rem;
            margin-top: 76px;
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(150, 117, 82, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        .page-hero::after {
            content: '';
            position: absolute;
            bottom: -10%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(197, 213, 209, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 10s ease-in-out infinite reverse;
        }

        .page-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .page-subtitle {
            font-size: 1.3rem;
            color: var(--light-green);
            position: relative;
            z-index: 1;
        }

        /* Services Categories */
        .services-section {
            padding: 6rem 0;
            background: white;
        }

        .category-wrapper {
            margin-bottom: 5rem;
        }

        .category-header {
            background: linear-gradient(135deg, var(--light-green) 0%, #d5e5e1 100%);
            padding: 3rem;
            border-radius: 30px 30px 0 0;
            position: relative;
            overflow: hidden;
        }

        .category-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #364f4a, #967552, #364f4a);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #364f4a, #967552);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(54, 79, 74, 0.3);
            transition: all 0.4s;
        }

        .category-wrapper:hover .category-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .category-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #364f4a;
            margin: 0;
        }

        .services-list {
            background: white;
            border-radius: 0 0 30px 30px;
            padding: 0;
            border: 2px solid var(--light-green);
            border-top: none;
            overflow: hidden;
            list-style: none;
        }

        .service-item {
            padding: 2rem 3rem;
            border-bottom: 1px solid rgba(197, 213, 209, 0.3);
            transition: all 0.3s;
            position: relative;
        }

        .service-item:last-child {
            border-bottom: none;
        }

        .service-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(90deg, #967552, transparent);
            transition: width 0.4s;
        }

        .service-item:hover {
            background: linear-gradient(90deg, rgba(197, 213, 209, 0.1), transparent);
        }

        .service-item:hover::before {
            width: 5px;
        }

        .service-item-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            cursor: pointer;
        }

        .service-bullet {
            width: 12px;
            height: 12px;
            background: #364f4a;
            border-radius: 50%;
            flex-shrink: 0;
            transition: all 0.3s;
        }

        .service-item:hover .service-bullet {
            background: #967552;
            transform: scale(1.3);
        }

        .service-name {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--text-dark);
            margin: 0;
            transition: all 0.3s;
        }

        .service-item:hover .service-name {
            color: #364f4a;
            font-weight: 600;
        }

        .service-accordion {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease, margin 0.4s ease;
            background: linear-gradient(135deg, rgba(197, 213, 209, 0.15), rgba(150, 117, 82, 0.08));
            padding: 0 1.5rem;
            border-left: 4px solid #967552;
            margin-left: 2.5rem;
            border-radius: 8px;
            margin-top: 0;
        }

        .service-accordion p {
            margin: 0;
            padding: 1.2rem 0;
            font-size: 1rem;
            color: var(--text-dark);
            line-height: 1.7;
        }

        .service-item:hover .service-accordion {
            max-height: 400px;
            margin-top: 1rem;
            padding: 0 1.5rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #364f4a 0%, #2a3f3b 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(150, 117, 82, 0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        .cta-content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            color: var(--light-green);
        }

        .btn-cta {
            background: white;
            color: #364f4a;
            border: none;
            padding: 1rem 3rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            background: #967552;
            color: white;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #364f4a 0%, #2a3f3b 100%);
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
            background: linear-gradient(90deg, transparent, #967552, transparent);
        }

        footer h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #967552;
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
            background: #967552;
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
            color: #967552;
            transform: scale(1.2);
        }

        footer hr {
            border-color: var(--light-green) !important;
            opacity: 0.3;
        }

        footer a {
            color: inherit;
        }

        /* Animations */
        @keyframes float {
            0%,
            100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-30px);
            }
        }

        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .scroll-animate.animated {
            opacity: 1;
            transform: translateY(0);
        }

            @media (min-width: 992px) {
    .navbar .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }
}
        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2.5rem;
            }

            .category-title {
                font-size: 2rem;
            }

            .service-item {
                padding: 1.5rem 2rem;
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
                        <a class="nav-link" href="/sobrenos">Razão de Ser</a>
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
                            Formas de Pagamento
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagamentoDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-bank me-2"></i> Banco</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-phone me-2"></i> Mpesa</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-wallet2 me-2"></i> Emola</a></li>
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

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container text-center">
            <h1 class="page-title">Nossos Serviços</h1>
            <p class="page-subtitle">Soluções personalizadas para indivíduos, famílias e empresas</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            
            <!-- Para Particulares -->
            <div class="category-wrapper scroll-animate" id="particulares">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="bi bi-person-heart"></i>
                    </div>
                    <h2 class="category-title">Para Particulares</h2>
                </div>
                <ul class="services-list">
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Psicoterapia individual</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Um espaço seguro para cuidar de si. A psicoterapia individual é um convite ao 
                                autoconhecimento e ao equilíbrio emocional. Aqui, cada sessão é construída no 
                                seu ritmo, para que você compreenda melhor seus sentimentos, supere desafios 
                                e fortaleça sua saúde mental.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Psicoterapia familiar</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Famílias passam por fases e mudanças – e, às vezes, precisam de um olhar 
                                externo para reencontrar o equilíbrio. Essa modalidade ajuda a melhorar 
                                a comunicação, compreender diferenças e restaurar vínculos, promovendo 
                                harmonia e compreensão mútua.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Psicoterapia de casal</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Todo relacionamento enfrenta desafios. A psicoterapia de casal oferece 
                                um espaço de diálogo, respeito e reconexão, ajudando parceiros a fortalecer 
                                o vínculo, lidar com conflitos e redescobrir a parceria com empatia e clareza.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Terapia de grupo</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Compartilhar experiências pode transformar. A terapia de grupo reúne 
                                pessoas com objetivos semelhantes para trocar vivências e desenvolver 
                                habilidades emocionais e sociais em um ambiente de apoio e crescimento coletivo.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Workshops e formações sobre saúde emocional e autoconhecimento</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Momentos de aprendizado e reflexão sobre temas essenciais para o bem-estar — como autoestima, gestão emocional, propósito e relações saudáveis.
                                São experiências vivas de autodescoberta e desenvolvimento pessoal.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Psicologia Educacional -->
            <div class="category-wrapper scroll-animate" id="educacional">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="bi bi-book"></i>
                    </div>
                    <h2 class="category-title">Psicologia Educacional</h2>
                </div>
                <ul class="services-list">
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Orientação vocacional</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                               Escolher um caminho profissional pode ser desafiador.
                                A orientação vocacional ajuda jovens a se conhecerem melhor,
                            identificando talentos, valores e interesses para fazer escolhas mais conscientes e alinhadas ao futuro que desejam construir.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Acompanhamento psicológico para adolescentes</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                A adolescência é um período de intensas mudanças.
                                 O acompanhamento psicológico oferece apoio para lidar com questões emocionais, sociais e escolares, 
                                 ajudando o jovem a se expressar, se compreender e desenvolver autonomia.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Prevenção e manejo do consumo de substâncias</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                               Trabalhar a prevenção é promover consciência. 
                               Este serviço ajuda adolescentes e famílias a compreenderem os riscos do uso de substâncias e a desenvolver estratégias de proteção, 
                               diálogo e autocuidado.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Treinamento de habilidades psicossociais</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Aprender a se relacionar bem é um dos maiores aprendizados da vida. 
                                Por meio de atividades dinâmicas, desenvolvemos competências como empatia, autocontrole, 
                                comunicação e tomada de decisão — fundamentais para o crescimento pessoal e social.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Programas para Empresas -->
            <div class="category-wrapper scroll-animate" id="empresas">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h2 class="category-title">Programas para Empresas</h2>
                </div>
                <ul class="services-list">
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Clima organizacional e cultura corporativa</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Ambientes saudáveis geram resultados sustentáveis.
                                Avaliamos e fortalecemos o clima organizacional, promovendo uma cultura mais humana, colaborativa e alinhada aos valores da empresa.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Gestão de pessoas e liderança</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Liderar é inspirar.
                                Oferecemos programas que desenvolvem habilidades de gestão emocional, comunicação e motivação,
                                 formando líderes mais empáticos, eficazes e preparados para os desafios do presente.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Team building e desenvolvimento de equipes</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Transforme grupos em times de verdade.
                                 Nossas dinâmicas fortalecem vínculos, estimulam a confiança e ampliam o senso de colaboração,
                                 pilares de uma equipe de alto desempenho.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Diagnóstico e prevenção de riscos psicossociais</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Cuidar da saúde mental também é uma responsabilidade organizacional.
                                 Identificamos fatores de risco e implementamos ações preventivas que protegem colaboradores e fortalecem a cultura de bem-estar.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Promoção de saúde mental e bem-estar laboral</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Iniciativas voltadas para o equilíbrio entre vida pessoal e profissional, incentivo ao autocuidado e criação de espaços de diálogo
                                 — porque colaboradores saudáveis constroem empresas mais fortes.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Treinamento e desenvolvimento de competências</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Programas sob medida para desenvolver habilidades técnicas e comportamentais, aumentando a produtividade, o engajamento e o potencial humano dentro das organizações.
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-header">
                            <div class="service-bullet"></div>
                            <p class="service-name">Mediação de conflitos e melhoria da comunicação interna</p>
                        </div>
                        <div class="service-accordion">
                            <p>
                                Toda empresa tem diferenças, o segredo está em saber transformá-las em oportunidades.
                                A mediação e o fortalecimento da comunicação promovem relações mais respeitosas, colaborativas e produtivas.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Pronto para começar sua jornada?</h2>
                <p class="cta-text">Entre em contacto connosco e descubra como podemos ajudá-lo</p>
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
                        <i class="bi bi-envelope me-2"></i> derciarita@gmail.com<br>
                        <i class="bi bi-geo-alt me-2"></i> Maputo, Moçambique
                    </p>
                    <div class="mt-2">
                        <a href="#" target="_blank" class="me-3 text-decoration-none">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="https://www.instagram.com/psicologa_clinica_mz_?igsh=cnk5bW11dmE1YXZx&utm_source=qr" target="_blank" class="me-3 text-decoration-none">
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
            <hr>
            <div class="text-center">
                <p>&copy; 2025 Consultório Equilíbrio. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
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

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>