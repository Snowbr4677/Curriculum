<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('imgs/sistema/pk_siga.png') }}" rel="shortcut icon">
        <title>Currículo de Alan Jhosmar Rojas Escobar</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="curriculum-page">
        <div class="footer-repetir footer-tela">Escola Dona Zalina Rolim</div>

        <nav class="bg-gray-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('raiz') }}" class="text-white font14">
                    <img src="{{ asset('imgs/sistema/programadores-small.png') }}" class="curriculum-logo" alt="Logo da Escola Dona Zalina Rolim">
                    Escola Dona Zalina Rolim
                </a>
                <a href="{{ asset('gerapdf/alan') }}" class="pdf-action" target="_blank" rel="noopener">
                    Salvar currículo em PDF
                </a>
            </div>
        </nav>

        <a href="javascript:history.back()">
            <span class="retorna" role="button">&#8592;&nbsp; Voltar</span>
        </a>

        <section class="curriculum-sheet">
            <header class="curriculum-identidade flex justify-center my-4">
                <div class="container-fluid w-full">
                    <div class="row texto-esquerda flex items-center justify-between gap-4">
                        <div id="pessoal1" class="text-center md:text-left z-10 cor1">
                            <p class="f-siga1 cor1 font-bold">Alan</p>
                            <p class="phont2 cor1">Jhosmar Rojas Escobar</p>
                        </div>
                        <div id="image1" class="z-10 shrink-0">
                            <img src="{{ asset('imgs/sistema/alunos/alan.jpeg') }}" alt="Foto de Alan Jhosmar Rojas Escobar" style="border-radius:50%;">
                        </div>
                        <div id="pessoal2" class="texto-esquerda cor1 text-[12px] z-10">
                            <p class="phont2">Estudante de Desenvolvimento de Sistemas</p>
                            <p class="phont2">Interesses em programação e empreendedorismo</p>
                        </div>
                    </div>
                    <hr class="mt-4">
                </div>
            </header>

            <main class="curriculum-conteudo div-alinhada-direita">
                <h2 class="f-cabeca1 f-siga1 cor1 font-bold">Objetivo</h2>
                <p>Trabalhar de forma autônoma e desenvolver um negócio próprio, ampliando os conhecimentos em tecnologia e programação.</p>

                <h2 class="f-cabeca1 f-siga1 cor1 font-bold">Formação</h2>
                <p class="f-entidade">
                    <strong class="f-negrito">Curso Técnico em Desenvolvimento de Sistemas</strong><br>
                    Escola Dona Zalina Rolim
                </p>
                <p class="f-entidade">
                    <strong class="f-negrito">Informática</strong><br>
                    Formação complementar informada no currículo de origem.
                </p>

                <h2 class="f-cabeca1 f-siga1 cor1 font-bold">Conhecimentos e interesses</h2>
                <p>Programação em Python e Visualg, lógica aplicada a jogos e sistemas, além de interesse em Minecraft e projetos criativos.</p>

                <h2 class="f-cabeca1 f-siga1 cor1 font-bold">Experiências</h2>
                <p>O currículo de origem menciona atividades de programação e conferência de código, vendas e atendimento a clientes.</p>
            </main>
        </section>
    </body>
</html>
