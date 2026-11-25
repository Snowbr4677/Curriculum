<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('imgs/sistema/pk_siga_branco.png') }}" rel="shortcut icon">
        @vite(['resources/css/app.css'])
        <style>
            .topo-fixo {
                position: sticky;
                top: 0;
                z-index: 50;
                height: 72px;
                min-height: 72px;
                overflow: hidden;
                background: #1f2937;
                border-bottom: 3px solid #22c55e;
            }
            .topo-fixo .logo-programadores {
                width: 72px;
                height: 72px;
                object-fit: contain;
                position: relative;
                margin: 0 auto;
            }
            .topo-fixo .container {
                min-height: 72px;
            }
            .topo-fixo .marca-escola {
                display: flex;
                align-items: center;
                gap: 10px;
                color: #fff;
                font-size: 14px;
                font-weight: 800;
            }
            .topo-fixo .voltar-quemsomos {
                display: inline-flex;
                align-items: center;
                gap: 6px;
                min-height: 38px;
                padding: 8px 13px;
                border: 1px solid #d1d5db;
                border-radius: 999px;
                background: #fff;
                color: #374151;
                font-size: 13px;
                font-weight: 700;
                text-decoration: none;
                box-shadow: 0 6px 16px rgba(30, 41, 59, 0.12);
            }
            .topo-fixo .voltar-quemsomos:hover {
                background: #f3f4f6;
                color: #111827;
            }
            .alunos-grid {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 24px;
            }
            .aluno-card {
                position: relative;
                display: grid;
                grid-template-columns: 130px minmax(0, 1fr);
                grid-template-rows: auto 1fr auto;
                column-gap: 20px;
                min-height: 210px;
                max-height: none !important;
                margin-top: 0;
                padding: 20px;
                overflow: hidden;
                transition: transform 180ms ease, box-shadow 180ms ease, border-color 180ms ease;
                z-index: 1;
            }
            .aluno-card:hover,
            .aluno-card:focus-within {
                transform: translateY(-6px) scale(1.025);
                box-shadow: 0 14px 30px rgba(0, 0, 0, 0.18);
                border-color: #9ca3af;
                z-index: 5;
                min-height: 230px;
                max-height: none !important;
                overflow: visible;
            }
            .aluno-foto-link {
                width: 130px;
                height: 130px;
                grid-column: 1;
                grid-row: 2 / span 2;
                display: block;
                overflow: hidden;
                border-radius: 50%;
                background: #f3f4f6;
                border: 1px solid #d1d5db;
                align-self: start;
            }
            .aluno-foto {
                width: 100%;
                height: 100%;
                display: block;
                object-fit: contain;
                object-position: center;
                border-radius: 50%;
            }
            .aluno-nome {
                display: block;
                grid-column: 1 / -1;
                grid-row: 1;
                margin: 4px 0 8px;
                padding-bottom: 7px;
                border-bottom: 3px solid #22c55e;
                font-size: 1.18rem;
                font-weight: 800;
                letter-spacing: 0.02em;
                color: #1f2937;
            }
            .aluno-card > p:not(.aluno-extra) {
                grid-column: 2;
                grid-row: 2;
                align-self: start;
            }
            .aluno-extra {
                display: block;
                grid-column: 2;
                grid-row: 3;
                max-height: 0;
                margin: 0;
                overflow: hidden;
                opacity: 0;
                visibility: hidden;
                color: #374151;
                font-size: 0.95rem;
                transition: max-height 220ms ease, opacity 180ms ease;
            }
            .aluno-card:hover .aluno-extra,
            .aluno-card:focus-within .aluno-extra {
                max-height: 180px;
                margin-top: 8px;
                opacity: 1;
                visibility: visible;
            }
            @media (max-width: 768px) {
                main.container { width: 92% !important; }
                .alunos-grid { grid-template-columns: 1fr; }
                .aluno-foto-link { width: 110px; height: 110px; }
            }
        </style>
    </head>
    <body>
        <nav class="py-0 topo-fixo">
            <div class="container mx-auto flex justify-between items-center" style="padding:10px;">
                <a href="{{ route('raiz') }}" class="marca-escola">
                    <img src="{{ asset('imgs/sistema/programadores-small.png') }}" alt="Logo" class="logo-programadores">
                    <span>Escola Dona Zalina Rolim</span>
                </a>
                <a href="{{ route('raiz') }}" class="voltar-quemsomos">&#8592;&nbsp; Voltar</a>
            </div>
        </nav>

        <main class="container mx-auto" style="width:70%; padding-top:20px;">
            <div class="text-center" style="margin-bottom:20px;">
                <img width="150px" src="{{ asset('imgs/sistema/zr2.png') }}" alt="ZR">
            </div>

            <div class="alunos-grid">
                <!-- Card do aluno Pedro Aguiar. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Pedro Aguiar</h2>
                    <a href="{{ asset('/site/curriculum/pedro') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/pedro.jpg') }}" alt="Pedro Aguiar" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Profissional voltado para Administração e Compras, com atuação em logística operacional, facilities, cadeia de suprimentos e gestão de processos.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Administração, compras e logística.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card da aluna Yasmim Gameleira. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Yasmim Gameleira</h2>
                    <a href="{{ asset('/site/curriculum/yas') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/yas.jpg') }}" alt="Yasmim Gameleira" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante do Ensino Médio integrado ao curso Técnico em Desenvolvimento de Sistemas, com interesse em tecnologia, sistemas e resolução de problemas.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Tecnologia e desenvolvimento de sistemas.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card do aluno Bruno Leite. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Bruno Leite</h2>
                    <a href="{{ asset('/site/curriculum/bruno') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/bruno.webp') }}" alt="Bruno Leite" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante de Desenvolvimento de Sistemas, interessado em lógica de programação, criação e organização de sistemas e aprendizado técnico contínuo.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Lógica de programação e sistemas.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card do aluno Guilherme Souza. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Guilherme Souza</h2>
                    <a href="{{ asset('/site/curriculum/gui') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/gui.jpg') }}" alt="Guilherme Souza" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante de Desenvolvimento de Sistemas com formação em Python e programação orientada a objetos, buscando iniciar sua trajetória profissional.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Python e programação orientada a objetos.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card da aluna Adrieli Bernal. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Adrieli Bernal</h2>
                    <a href="{{ asset('/site/curriculum/dri') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/dri.jpg') }}" alt="Adrieli Bernal" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante do Ensino Médio, proativa e organizada, com espanhol fluente, inglês básico e experiência prática em supermercado.</p>
                    <p class="aluno-extra"><strong>Idiomas:</strong> Espanhol fluente e inglês básico.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card do aluno Herlan Daner Palma Condori. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Herlan Daner Palma Condori</h2>
                    <a href="{{ asset('/site/curriculum/herlan') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/herlan.jpg') }}" alt="Herlan Daner Palma Condori" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante de informática com interesse em Python, criação de jogos e arte digital.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Python, jogos e criação visual.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card do aluno Alan Jhosmar Rojas Escobar. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Alan Jhosmar Rojas Escobar</h2>
                    <a href="{{ asset('/site/curriculum/alan') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/alan.jpeg') }}" alt="Alan Jhosmar Rojas Escobar" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante de Desenvolvimento de Sistemas com interesse em programação, jogos e empreendedorismo.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Python, lógica de programação e criação de um negócio próprio.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card do aluno Lucas Zanardo Correia. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">Lucas Zanardo Correia</h2>
                    <a href="{{ asset('/site/curriculum/lucas') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/lucas.jpg') }}" alt="Lucas Zanardo Correia" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante da Escola Dona Zalina Rolim em busca da primeira oportunidade profissional, com interesse em tecnologia e marketing digital.</p>
                    <p class="aluno-extra"><strong>Área de interesse:</strong> Comunicação digital, tecnologia e aprendizado contínuo.</p>
                    <div style="clear:both;"></div>
                </article>

                <!-- Card do aluno João Victor dos Santos Oliveira. -->
                <article class="borda1 aluno-card" tabindex="0">
                    <h2 class="aluno-nome">João Victor dos Santos Oliveira</h2>
                    <a href="{{ asset('/site/curriculum/jv') }}" class="aluno-foto-link">
                        <img src="{{ asset('/imgs/sistema/alunos/jv.jpg') }}" alt="Imagem de perfil escolhida por João Victor" class="aluno-foto" loading="lazy" decoding="async">
                    </a>
                    <p>Estudante do Ensino Médio integrado ao Técnico em Desenvolvimento de Sistemas, em busca da primeira oportunidade profissional.</p>
                    <p class="aluno-extra"><strong>Objetivo:</strong> Jovem Aprendiz ou estágio; inglês intermediário.</p>
                    <div style="clear:both;"></div>
                </article>
            </div>

            <center class="reg" style="padding:30px 0;">{{ config('app.pkcia') }} &nbsp;{{ \App\Classes\Datas::dataHora() }}</center>
        </main>
    </body>
</html>
