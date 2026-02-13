@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary-dark: #2c4a52;
        --primary-blue: #4a90e2;
        --accent-green: #1f7b00;
        --text-dark: #2d3748;
        --bg-light: #f7fafc;
    }

    .page-wrapper {
        font-family: 'Segoe UI', Roboto, sans-serif;
        color: var(--text-dark);
        background-color: var(--bg-light);
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    /* Navbar (local) */
    .site-navbar {
        background-color: rgba(44, 74, 82, 0.95);
        padding: 0.8rem 0;
        backdrop-filter: blur(6px);
        transition: all 0.3s ease;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    .site-navbar .brand {
        font-size: 1.4rem;
        font-weight: 700;
        color: white;
        letter-spacing: 0.4px;
    }

    .site-navbar .nav-link {
        color: rgba(255,255,255,0.95);
        font-weight: 500;
        margin-left: 1rem;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #165d00 100%);
        min-height: calc(100vh - 64px);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 4.5rem 1rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-section .overlay-bg {
        position: absolute;
        inset: 0;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 0.18;
        filter: blur(0px);
        z-index: 0;
    }

    .hero-content {
        z-index: 1;
        max-width: 900px;
        padding: 1rem;
    }

    .hero-content h1 {
        font-size: clamp(2rem, 4vw, 3.2rem);
        font-weight: 800;
        margin-bottom: 0.6rem;
        line-height: 1.05;
    }

    .hero-content p {
        margin-top: 0.8rem;
        font-size: clamp(1rem, 1.6vw, 1.15rem);
        color: rgba(255,255,255,0.95);
    }

    .btn-agendar {
        margin-top: 1.6rem;
        background: linear-gradient(135deg, var(--primary-blue), #3a7bc8);
        color: white;
        border: none;
        padding: 0.85rem 1.8rem;
        border-radius: 28px;
        font-weight: 700;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        box-shadow: 0 8px 30px rgba(58,123,200,0.18);
    }

    .btn-agendar:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 40px rgba(58,123,200,0.22);
    }

    /* About Section */
    .about-section {
        padding: 4.5rem 1rem;
        background: #fff;
    }

    .about-card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        align-items: center;
        max-width: 1100px;
        margin: 0 auto;
    }

    .about-image {
        border-radius: 16px;
        box-shadow: 0 14px 40px rgba(23,43,56,0.08);
        width: 100%;
        height: 360px;
        object-fit: cover;
        border: 4px solid #fff;
    }

    .about-text h2 {
        font-weight: 800;
        color: var(--primary-dark);
        margin-bottom: 0.6rem;
    }

    .about-text p {
        margin-top: 1rem;
        line-height: 1.85;
        color: #4a5568;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .about-card {
            grid-template-columns: 1fr;
        }

        .about-image {
            height: 280px;
        }
    }

    footer.site-footer {
        background-color: var(--primary-dark);
        color: #fff;
        text-align: center;
        padding: 24px 10px;
        font-size: 0.95rem;
    }
</style>

<div class="page-wrapper">
    <!-- Navbar -->
    <nav class="site-navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <a class="brand" href="{{ url('/') }}">Equilíbrio</a>
            <div class="d-none d-md-flex align-items-center">
                <a href="#about" class="nav-link">Sobre</a>
                <a href="#services" class="nav-link">Serviços</a>
                <a href="#contact" class="nav-link">Contacto</a>
            </div>
            <button class="btn btn-outline-light d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">Menu</button>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section" aria-label="Sessões e bem-estar emocional">
        <div class="overlay-bg" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');"></div>
        <div class="hero-content">
            <h1>Bem-vindo ao Equilíbrio</h1>
            <p>Espaço dedicado ao seu bem-estar emocional e desenvolvimento pessoal. Acreditamos que cuidar da mente é o primeiro passo para uma vida plena.</p>
            <a href="#contact" class="btn btn-agendar">Agende uma Sessão</a>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about-section" aria-label="Sobre o consultório">
        <div class="about-card">
            <div>
                <img src="{{ asset('images/about.jpg') }}" alt="Sobre nós" class="about-image">
            </div>
            <div class="about-text">
                <h2>Sobre Nós</h2>
                <p>O Consultório Psicológico Equilíbrio oferece acompanhamento especializado em saúde mental, com profissionais qualificados e um espaço acolhedor.
                Trabalhamos com terapia individual, terapia de casal, e intervenções psicossociais que promovem o equilíbrio emocional e o crescimento pessoal.</p>
                <p style="margin-top:1rem;"><strong>Horário:</strong> Seg a Sex — 09:00 às 18:00</p>
            </div>
        </div>
    </section>

    <!-- Placeholder for Services -->
    <section id="services" style="padding:3rem 1rem; max-width:1100px; margin:0 auto;">
        <h3 style="text-align:center; color:var(--primary-dark); font-weight:800;">Serviços</h3>
        <p style="text-align:center; color:#4a5568; margin-top:0.6rem;">Sessões presenciais e online, avaliação psicológica e programas personalizados.</p>
    </section>

    <!-- Contact -->
    <section id="contact" style="padding:3rem 1rem; background:#fff;">
        <div style="max-width:900px; margin:0 auto; text-align:center;">
            <h3 style="color:var(--primary-dark); font-weight:800;">Contacto</h3>
            <p style="color:#4a5568;">Para marcar consultas envie uma mensagem ou ligue para: <strong>+258 82 000 0000</strong></p>
        </div>
    </section>

    <footer class="site-footer">
        &copy; {{ date('Y') }} Equilíbrio - Consultório Psicológico. Todos os direitos reservados.
    </footer>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
