<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'administrativo') }}</title>

        <link href="{{ asset('imgs/icones/att.logo.ico') }}" rel="shortcut icon" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /* Tema público da página inicial: visual claro, centralizado e sem login administrativo. */
            body {
                margin: 0;
                min-height: 100vh;
                background:
                    radial-gradient(circle at top left, rgba(34, 197, 94, 0.14), transparent 32rem),
                    linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
                color: #1f2937;
            }
            .welcome-header {
                position: relative;
                min-height: 72px;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 18px 28px;
            }
            .welcome-header-name {
                color: #475569;
                font-weight: 800;
                letter-spacing: 0.02em;
            }
            .welcome-card {
                width: min(760px, calc(100% - 32px));
                margin: 24px auto 48px;
                padding: 44px 32px 36px;
                background: rgba(255, 255, 255, 0.94);
                border: 1px solid #e5e7eb;
                border-radius: 24px;
                box-shadow: 0 22px 50px rgba(30, 41, 59, 0.12);
                text-align: center;
            }
            .welcome-logo {
                width: 170px;
                height: 170px;
                object-fit: contain;
                margin: 0 auto 12px;
            }
            .welcome-title {
                margin: 8px 0 4px;
                font-size: clamp(1.55rem, 4vw, 2.35rem);
                line-height: 1.15;
                font-weight: 800;
                color: #111827;
            }
            .welcome-subtitle {
                margin: 0 auto 24px;
                max-width: 560px;
                color: #64748b;
            }
            .welcome-actions {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 12px;
                margin-top: 18px;
            }
            .welcome-button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 180px;
                min-height: 48px;
                padding: 12px 22px;
                border-radius: 999px;
                background: #16a34a;
                color: white;
                font-weight: 800;
                text-decoration: none;
                box-shadow: 0 10px 24px rgba(22, 163, 74, 0.22);
                transition: transform 160ms ease, background 160ms ease;
            }
            .welcome-button:hover {
                transform: translateY(-2px);
                background: #15803d;
            }
            .welcome-status {
                margin-top: 28px;
            }
            .welcome-footer {
                padding: 18px;
                text-align: center;
                color: #64748b;
                font-size: 0.875rem;
            }
            @media (max-width: 640px) {
                .welcome-card { padding: 32px 18px 28px; }
                .welcome-logo { width: 130px; height: 130px; }
            }
        </style>
    </head>
    <body>
        <header class="welcome-header">
            <span class="welcome-header-name">Escola Dona Zalina Rolim</span>
        </header>

        <main>
            <section class="welcome-card">
                <img src="{{ asset('imgs/sistema/curriculum_image.png') }}" alt="Currículos dos alunos" class="welcome-logo">
                <h1 class="welcome-title">Escola Dona Zalina Rolim</h1>
                <p class="welcome-subtitle">
                    Conheça os alunos, suas formações e experiências profissionais em um único espaço.
                </p>
                <div class="welcome-actions">
                    <a href="{{ route('quemsomos') }}" class="welcome-button">Conhecer os alunos</a>
                </div>
                <div class="welcome-status">
                    @include('components.teste-banco')
                </div>
            </section>
        </main>

        <footer class="welcome-footer">
            Escola Dona Zalina Rolim
        </footer>

    </body>
</html>
<script src="{{ asset('js/alpine.js') }}" defer></script>
