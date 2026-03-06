<?php
/*
 * Template Name: Desayuno Día de la Mujer 2026
 * Template Post Type: page
 */
// Salir si se accede directamente
if (!defined('ABSPATH'))
    exit;
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desayuno Día Internacional de la Mujer – Bamali 2026</title>
    <meta name="description"
        content="Únete al desayuno conmemorativo del Día Internacional de la Mujer organizado por Bamali. Conferencia magistral: Los conflictos individuales de seguridad social. 20 de marzo, 9:00 AM.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --purple-dark: #3b1a5a;
            --purple-mid: #6b2fa0;
            --purple-light: #9b59d0;
            --gold: #c9a227;
            --gold-light: #f0d080;
            --rose: #c0325a;
            --cream: #fdfaf5;
            --gray-text: #4a4a5a;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a0a2e;
            color: var(--gray-text);
            line-height: 1.7;
        }

        /* ─── HERO ─── */
        .hero {
            position: relative;
            background: linear-gradient(135deg, #1a0a2e 0%, #3b1a5a 40%, #6b2fa0 75%, #9b4dc8 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px 80px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse at 20% 50%, rgba(193, 50, 90, 0.15) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(201, 162, 39, 0.12) 0%, transparent 50%);
            pointer-events: none;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.08;
            animation: float linear infinite;
        }

        .p1 {
            width: 300px;
            height: 300px;
            background: var(--purple-light);
            top: -80px;
            left: -100px;
            animation-duration: 20s;
        }

        .p2 {
            width: 200px;
            height: 200px;
            background: var(--gold);
            bottom: -60px;
            right: -60px;
            animation-duration: 15s;
            animation-delay: -5s;
        }

        .p3 {
            width: 150px;
            height: 150px;
            background: var(--rose);
            top: 30%;
            right: 5%;
            animation-duration: 18s;
            animation-delay: -8s;
        }

        .p4 {
            width: 100px;
            height: 100px;
            background: var(--gold-light);
            bottom: 20%;
            left: 10%;
            animation-duration: 22s;
            animation-delay: -3s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(180deg);
            }

            100% {
                transform: translateY(0) rotate(360deg);
            }
        }

        .hero-logo-wrap {
            position: relative;
            z-index: 2;
            margin-bottom: 28px;
        }

        .hero-logo-wrap img {
            height: 80px;
            width: auto;
            filter: drop-shadow(0 4px 20px rgba(201, 162, 39, 0.5));
        }

        .badge-dia-mujer {
            position: relative;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(90deg, var(--rose), #e05580);
            color: white;
            font-weight: 700;
            font-size: 11px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            padding: 8px 22px;
            border-radius: 50px;
            margin-bottom: 28px;
            box-shadow: 0 4px 25px rgba(192, 50, 90, 0.5);
        }

        .badge-dia-mujer .symbol {
            font-size: 16px;
        }

        .hero-event-type {
            position: relative;
            z-index: 2;
            color: var(--gold-light);
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 18px;
            opacity: 0.9;
        }

        .hero-title {
            position: relative;
            z-index: 2;
            font-family: 'Playfair Display', serif;
            font-size: clamp(36px, 6vw, 72px);
            font-weight: 900;
            color: var(--white);
            line-height: 1.1;
            margin-bottom: 24px;
            text-shadow: 0 4px 30px rgba(107, 47, 160, 0.6);
        }

        .hero-title span {
            display: block;
            background: linear-gradient(90deg, var(--gold-light), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            position: relative;
            z-index: 2;
            font-size: clamp(15px, 2vw, 20px);
            color: rgba(255, 255, 255, 0.82);
            max-width: 680px;
            margin: 0 auto 48px;
            font-weight: 300;
        }

        .hero-stats {
            position: relative;
            z-index: 2;
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .stat-pill {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.09);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            padding: 10px 22px;
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        .stat-pill .icon {
            font-size: 18px;
        }

        .stat-pill strong {
            color: var(--gold-light);
        }

        .hero-cta {
            position: relative;
            z-index: 2;
        }

        .btn-cta {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold) 0%, #e8b830 50%, var(--gold) 100%);
            color: var(--purple-dark);
            font-weight: 800;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none;
            padding: 20px 52px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 40px rgba(201, 162, 39, 0.55);
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-cta::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-cta:hover::after {
            left: 100%;
        }

        .btn-cta:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 14px 50px rgba(201, 162, 39, 0.7);
        }

        .scroll-hint {
            position: relative;
            z-index: 2;
            margin-top: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.4);
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .scroll-arrow {
            width: 26px;
            height: 26px;
            border-right: 2px solid rgba(255, 255, 255, 0.3);
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            transform: rotate(45deg);
            animation: bounce 1.8s ease-in-out infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: rotate(45deg) translateY(0);
            }

            50% {
                transform: rotate(45deg) translateY(8px);
            }
        }

        /* ─── WAVE ─── */
        .wave-divider {
            background: var(--purple-dark);
            line-height: 0;
        }

        .wave-divider svg {
            display: block;
            width: 100%;
        }

        /* ─── MAIN ─── */
        .main-content {
            background: var(--cream);
        }

        .container {
            max-width: 720px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ─── DETALLES ─── */
        .section-details {
            padding: 70px 0 50px;
        }

        .section-label {
            display: inline-block;
            background: linear-gradient(90deg, var(--purple-mid), var(--purple-light));
            color: white;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            padding: 5px 16px;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(26px, 4vw, 38px);
            font-weight: 700;
            color: var(--purple-dark);
            line-height: 1.25;
            margin-bottom: 14px;
        }

        .section-title em {
            font-style: italic;
            color: var(--purple-mid);
        }

        .section-intro {
            font-size: 16px;
            color: #5a5a7a;
            margin-bottom: 40px;
            max-width: 580px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 40px;
        }

        .info-card {
            background: white;
            border-radius: 16px;
            padding: 24px 20px;
            border-top: 4px solid var(--purple-mid);
            box-shadow: 0 4px 20px rgba(107, 47, 160, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 35px rgba(107, 47, 160, 0.15);
        }

        .info-card .card-icon {
            font-size: 32px;
            margin-bottom: 12px;
            display: block;
        }

        .info-card .card-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--purple-light);
            margin-bottom: 4px;
        }

        .info-card .card-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--purple-dark);
            line-height: 1.3;
        }

        .info-card .card-sub {
            font-size: 13px;
            color: #888;
            margin-top: 4px;
        }

        /* ─── CONFERENCISTA ─── */
        .section-speaker {
            background: #0b0418;
            overflow: hidden;
        }

        .speaker-inner {
            display: grid;
            grid-template-columns: 400px 1fr;
            min-height: 580px;
        }

        .speaker-photo-col {
            position: relative;
            overflow: hidden;
        }

        .speaker-photo-col img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            display: block;
            transition: transform 0.7s ease;
        }

        .speaker-photo-col:hover img {
            transform: scale(1.04);
        }

        .speaker-photo-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, transparent 55%, #0b0418 100%), linear-gradient(to top, rgba(11, 4, 24, 0.65) 0%, transparent 45%);
            pointer-events: none;
        }

        .speaker-photo-frame {
            position: absolute;
            top: 24px;
            left: 24px;
            right: 24px;
            bottom: 24px;
            border: 1px solid rgba(201, 162, 39, 0.28);
            pointer-events: none;
            z-index: 2;
        }

        .speaker-content-col {
            padding: 64px 56px 64px 52px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .speaker-content-col::before {
            content: '"';
            position: absolute;
            top: 10px;
            right: 36px;
            font-family: 'Playfair Display', serif;
            font-size: 240px;
            color: rgba(201, 162, 39, 0.05);
            line-height: 1;
            pointer-events: none;
            user-select: none;
        }

        .speaker-eyebrow {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .speaker-eyebrow .eline {
            width: 32px;
            height: 1px;
            background: var(--gold);
        }

        .speaker-eyebrow span {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3.5px;
            text-transform: uppercase;
            color: var(--gold);
        }

        .speaker-name {
            font-family: 'Playfair Display', serif;
            font-size: clamp(26px, 3vw, 40px);
            font-weight: 700;
            color: #fff;
            line-height: 1.15;
            margin-bottom: 6px;
        }

        .speaker-cred {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.4);
            letter-spacing: 0.8px;
            margin-bottom: 32px;
        }

        .speaker-divider-line {
            width: 56px;
            height: 2px;
            background: linear-gradient(90deg, var(--gold), transparent);
            margin-bottom: 28px;
        }

        .speaker-topic-eyebrow {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.3);
            margin-bottom: 12px;
        }

        .speaker-topic-text {
            font-family: 'Playfair Display', serif;
            font-size: clamp(16px, 2vw, 20px);
            font-style: italic;
            color: var(--gold-light);
            line-height: 1.6;
            margin-bottom: 38px;
            padding-left: 20px;
            position: relative;
        }

        .speaker-topic-text::before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            bottom: 5px;
            width: 3px;
            background: linear-gradient(to bottom, var(--gold), transparent);
            border-radius: 2px;
        }

        .speaker-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .speaker-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 7px 16px;
            font-size: 12px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.6);
        }

        .speaker-pill .dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--gold);
        }

        /* ─── ESTADÍSTICAS ─── */
        .section-counter {
            background: linear-gradient(135deg, var(--purple-dark) 0%, #2d1050 50%, #1a0a2e 100%);
            padding: 60px 0;
            text-align: center;
        }

        .counter-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .counter-item .number {
            font-family: 'Playfair Display', serif;
            font-size: 58px;
            font-weight: 900;
            color: var(--gold-light);
            line-height: 1;
            display: block;
        }

        .counter-item .label {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.55);
            margin-top: 6px;
            display: block;
        }

        .counter-divider {
            width: 1px;
            background: rgba(255, 255, 255, 0.12);
            align-self: stretch;
        }

        /* ─── LOGÍSTICA ─── */
        .section-logistics {
            padding: 70px 0 60px;
        }

        .logistics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 40px;
        }

        .logistics-box {
            background: white;
            border-radius: 18px;
            padding: 32px;
            box-shadow: 0 6px 30px rgba(107, 47, 160, 0.09);
            transition: transform 0.25s ease;
        }

        .logistics-box:hover {
            transform: translateY(-4px);
        }

        .logistics-box .box-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 18px;
        }

        .logistics-box.lugar .box-icon {
            background: #f0ebff;
        }

        .logistics-box.pago .box-icon {
            background: #fff5e0;
        }

        .logistics-box.comprobante .box-icon {
            background: #ffe8ef;
        }

        .logistics-box .box-title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--purple-light);
            margin-bottom: 10px;
        }

        .logistics-box .box-content {
            font-size: 16px;
            color: var(--purple-dark);
            font-weight: 600;
            line-height: 1.5;
        }

        .logistics-box .box-sub {
            font-size: 14px;
            color: #888;
            margin-top: 8px;
            font-weight: 400;
        }

        /* ─── FORM ─── */
        .section-form {
            padding: 70px 0 80px;
        }

        .form-card {
            background: white;
            border-radius: 24px;
            padding: 50px 44px;
            box-shadow: 0 16px 60px rgba(107, 47, 160, 0.13);
            position: relative;
            overflow: hidden;
        }

        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--purple-dark), var(--purple-light), var(--gold));
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header .title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--purple-dark);
            margin-bottom: 10px;
        }

        .form-header .sub {
            font-size: 15px;
            color: #888;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--purple-mid);
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e8e0f5;
            border-radius: 10px;
            font-size: 15px;
            font-family: 'Inter', sans-serif;
            color: var(--gray-text);
            background: #fafaff;
            transition: all 0.25s ease;
            outline: none;
        }

        .form-group input:focus {
            border-color: var(--purple-light);
            background: white;
            box-shadow: 0 0 0 4px rgba(155, 89, 208, 0.12);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .btn-submit {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--gold) 0%, #e8b830 100%);
            color: var(--purple-dark);
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            box-shadow: 0 6px 30px rgba(201, 162, 39, 0.45);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(201, 162, 39, 0.6);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        #formStatus {
            display: none;
            text-align: center;
            margin-top: 18px;
            padding: 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 15px;
        }

        #formStatus.loading {
            background: #f0ebff;
            color: var(--purple-mid);
        }

        #formStatus.error {
            background: #fff0f3;
            color: var(--rose);
        }

        /* ─── FOOTER ─── */
        .footer {
            background: #100723;
            padding: 40px 20px 24px;
            text-align: center;
        }

        .footer img {
            height: 50px;
            margin-bottom: 16px;
            opacity: 0.85;
            filter: brightness(2);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
            margin-bottom: 14px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 13px;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: var(--gold-light);
        }

        .footer-copy {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.25);
            letter-spacing: 0.5px;
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 820px) {
            .speaker-inner {
                grid-template-columns: 1fr;
            }

            .speaker-photo-col {
                height: 420px;
            }

            .speaker-photo-overlay {
                background: linear-gradient(to bottom, transparent 45%, #0b0418 100%);
            }

            .speaker-content-col {
                padding: 44px 28px;
            }
        }

        @media (max-width: 600px) {
            .form-card {
                padding: 36px 24px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .counter-divider {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">
        <div class="particle p1"></div>
        <div class="particle p2"></div>
        <div class="particle p3"></div>
        <div class="particle p4"></div>
        <div class="hero-logo-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-bamali.png"
                alt="Bamali – Abogadas Líderes de México" class="logo-img"
                onerror="this.src='https://bamali.mx/wp-content/uploads/logo-bamali.png'">
        </div>
        <div class="badge-dia-mujer"><span class="symbol">♀</span> Día Internacional de la Mujer</div>
        <p class="hero-event-type">Desayuno Conmemorativo</p>
        <h1 class="hero-title">
            Los Conflictos Individuales<br>
            <span>de Seguridad Social</span>
        </h1>
        <p class="hero-subtitle">
            Conferencia magistral en conmemoración al <strong style="color:var(--gold-light);">Día Internacional de la
                Mujer</strong>.
            Un espacio de reflexión, aprendizaje y sororidad para las Bamalistas.
        </p>
        <div class="hero-stats">
            <div class="stat-pill"><span class="icon">📅</span><span><strong>20 de Marzo&nbsp;</strong>· 2026</span>
            </div>
            <div class="stat-pill"><span class="icon">⏰</span><span><strong>9:00 AM</strong></span></div>
            <div class="stat-pill"><span class="icon">📍</span><span>Col. Roma, CDMX</span></div>
        </div>
        <div class="hero-cta">
            <a href="#registro" class="btn-cta" id="ctaHeroBtn">¡Quiero Reservar Mi Lugar!</a>
        </div>
        <div class="scroll-hint">
            <div class="scroll-arrow"></div>Más información
        </div>
    </section>

    <!-- Wave -->
    <div class="wave-divider" style="background:#1a0a2e;">
        <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#fdfaf5" />
        </svg>
    </div>

    <!-- DETALLES -->
    <section class="section-details main-content">
        <div class="container">
            <span class="section-label">Detalles del evento</span>
            <h2 class="section-title">Un desayuno <em>muy</em> especial<br>para las mujeres de ley</h2>
            <p class="section-intro">Acompáñanos en esta celebración única donde el conocimiento jurídico se une a la
                conmemoración del Día Internacional de la Mujer. Este año prometemos un evento más grande y poderoso que
                nunca.</p>
            <div class="info-grid">
                <div class="info-card"><span class="card-icon">📅</span><span class="card-label">Fecha</span>
                    <div class="card-value">20 de Marzo</div>
                    <div class="card-sub">2026 · Jueves</div>
                </div>
                <div class="info-card"><span class="card-icon">⏰</span><span class="card-label">Hora</span>
                    <div class="card-value">9:00 AM</div>
                    <div class="card-sub">Puntual</div>
                </div>
                <div class="info-card"><span class="card-icon">🏛️</span><span class="card-label">Lugar</span>
                    <div class="card-value">Sinaloa 113</div>
                    <div class="card-sub">Colonia Roma</div>
                </div>
                <div class="info-card"><span class="card-icon">🌸</span><span class="card-label">Tipo de evento</span>
                    <div class="card-value">Desayuno</div>
                    <div class="card-sub">Día Internacional de la Mujer</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONFERENCISTA -->
    <section class="section-speaker" id="speakerCard">
        <div class="speaker-inner">
            <div class="speaker-photo-col">
                <img src="https://bamali.mx/wp-content/uploads/reyna-lopez-rodriguez.jpg"
                    alt="Mtra. Reyna López Rodríguez – Conferencista Magistral">
                <div class="speaker-photo-overlay"></div>
                <div class="speaker-photo-frame"></div>
            </div>
            <div class="speaker-content-col">
                <div class="speaker-eyebrow"><span class="eline"></span><span>Conferencista Magistral</span></div>
                <h2 class="speaker-name">Mtra. Reyna<br>López Rodríguez</h2>
                <p class="speaker-cred">Maestra en Derecho &middot; Especialista en Seguridad Social</p>
                <div class="speaker-divider-line"></div>
                <p class="speaker-topic-eyebrow">Tema de la conferencia</p>
                <p class="speaker-topic-text">&ldquo;Los Conflictos Individuales<br>de Seguridad Social&rdquo;</p>
                <div class="speaker-pills">
                    <span class="speaker-pill"><span class="dot"></span>Derecho Laboral</span>
                    <span class="speaker-pill"><span class="dot"></span>Seguridad Social</span>
                    <span class="speaker-pill"><span class="dot"></span>Conferencia Magistral</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ESTADÍSTICAS -->
    <section class="section-counter">
        <div class="container">
            <div class="counter-grid">
                <div class="counter-item"><span class="number">598</span><span class="label">Bamalistas</span></div>
                <div class="counter-divider"></div>
                <div class="counter-item"><span class="number">1,000</span><span class="label">Alcance general</span>
                </div>
                <div class="counter-divider"></div>
                <div class="counter-item"><span class="number">8°</span><span class="label">Edición</span></div>
            </div>
        </div>
    </section>

    <!-- LOGÍSTICA -->
    <section class="section-logistics main-content">
        <div class="container">
            <span class="section-label">Información práctica</span>
            <h2 class="section-title" style="margin-top:18px;">Cómo confirmar<br>tu asistencia</h2>
            <div class="logistics-grid">
                <div class="logistics-box lugar">
                    <div class="box-icon">📍</div>
                    <div class="box-title">Lugar del evento</div>
                    <div class="box-content">Sinaloa 113<br>Colonia Roma, CDMX</div>
                    <div class="box-sub">Jueves 20 de marzo · 9:00 AM</div>
                </div>
                <div class="logistics-box pago">
                    <div class="box-icon">🏦</div>
                    <div class="box-title">Datos bancarios</div>
                    <div class="box-content">
                        <span style="font-size:13px;color:#888;font-weight:500;">BBVA Bancomer &mdash; Cuenta de
                            Cheques</span><br>
                        <span style="font-size:12px;color:#aaa;font-weight:400;">CLABE:</span>
                        <strong style="font-size:15px;letter-spacing:1px;">012 180 0011 9826 9123</strong><br>
                        <span style="font-size:12px;color:#aaa;font-weight:400;">No. Cuenta:</span>
                        <strong style="font-size:15px;letter-spacing:1px;">011 982 6912</strong>
                    </div>
                    <div class="box-sub">Guarda tu comprobante para enviarlo</div>
                </div>
                <div class="logistics-box comprobante">
                    <div class="box-icon">📧</div>
                    <div class="box-title">Envía tu comprobante</div>
                    <div class="box-content">Envía tu comprobante a:<br><a href="mailto:eventos@bamali.mx"
                            style="color:var(--purple-mid);font-weight:700;text-decoration:none;">eventos@bamali.mx</a>
                    </div>
                    <div class="box-sub">Te confirmaremos tu lugar al recibir el comprobante</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULARIO -->
    <section class="section-form main-content" id="registro">
        <div class="container">
            <div class="form-card">
                <div class="form-header">
                    <div class="section-label">Confirma tu asistencia</div>
                    <h2 class="title" style="margin-top:18px;">Reserva tu lugar ahora</h2>
                    <p class="sub">Completa el formulario y el equipo Bamali se pondrá en contacto contigo con los datos
                        de pago.</p>
                </div>
                <form id="registroForm">
                    <div class="form-row">
                        <div class="form-group"><label for="nombre">Nombre</label><input type="text" id="nombre"
                                name="nombre" required placeholder="Tu nombre"></div>
                        <div class="form-group"><label for="apellido">Apellido</label><input type="text" id="apellido"
                                name="apellido" required placeholder="Tu apellido"></div>
                    </div>
                    <div class="form-group"><label for="email">Correo electrónico</label><input type="email" id="email"
                            name="email" required placeholder="correo@ejemplo.com"></div>
                    <div class="form-group"><label for="telefono">Teléfono / WhatsApp</label><input type="tel"
                            id="telefono" name="telefono" placeholder="10 dígitos"></div>
                    <input type="hidden" name="_subject" value="Registro Desayuno Día de la Mujer 2026 – Bamali">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="evento"
                        value="Desayuno Día Internacional de la Mujer – 20 de Marzo 2026">
                    <button type="submit" class="btn-submit" id="submitBtn">🌸 &nbsp; ¡Confirmar Asistencia!</button>
                    <div id="formStatus"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-bamali.png" alt="Bamali"
            onerror="this.src='https://bamali.mx/wp-content/uploads/logo-bamali.png'; this.onerror=null;">
        <div class="footer-links">
            <a href="https://bamali.mx" target="_blank">bamali.mx</a>
            <a href="https://www.facebook.com/abogadasbamali/" target="_blank">Facebook</a>
            <a href="https://www.instagram.com/abogadasbamali/" target="_blank">Instagram</a>
        </div>
        <p class="footer-copy">© 2026 Bamali – Abogadas Líderes de México. Todos los derechos reservados.</p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                e.preventDefault();
                const t = document.querySelector(a.getAttribute('href'));
                if (t) t.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
        document.getElementById('registroForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const status = document.getElementById('formStatus');
            btn.disabled = true;
            btn.textContent = 'Enviando...';
            status.className = 'loading';
            status.style.display = 'block';
            status.textContent = '⏳ Procesando tu registro...';
            fetch('https://formsubmit.co/ajax/eventos@bamali.mx', {
                method: 'POST',
                headers: { 'Accept': 'application/json' },
                body: new FormData(this)
            })
                .then(r => r.json())
                .then(() => { window.location.href = 'https://bamali.mx/dia-de-la-mujer-gracias/'; })
                .catch(err => {
                    console.error(err);
                    status.className = 'error';
                    status.textContent = '❌ Ocurrió un error. Por favor, intenta de nuevo.';
                    btn.disabled = false;
                    btn.textContent = '🌸 ¡Confirmar Asistencia!';
                });
        });
    </script>
</body>

</html>