<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('imgs/sistema/pk_siga.png') }}" rel="shortcut icon" /></link>
    <title>{{ config('app.name', 'PKCia.Siga') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Isso garante que o rodapé fique no fundo da folha no PDF */
        @media print {
            @page {
                margin: 1.5cm 1.5cm 2.5cm 1.5cm; /* Superior, Direita, Inferior, Esquerda */
                margin-bottom: 2.5cm; 
            } 
                      
            .footer-repetir {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                border-top: 1px solid #ddd;
                font-size: 10px;
                padding: 10px 0;
            }
        }

        /* Isso garante que ele fique no fundo da tela no navegador */
        .footer-tela {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            text-align: center;
            font-size: 9px;
            z-index: 999;
        }

        /* Para visualização no navegador também fixar no final */
        .footer-fixo {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            padding: 10px 0;
        }
        section {
            width: 100% !important; /* Mude de 75% para 100% no PDF */
        }
    </style>

    <body class="curriculum-page"> 
    <div class="footer-repetir footer-tela">
        Escola Dona Zalina Rolim
    </div>

    <center>
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            
            <!-- Logo ou título -->
            <a href="{{ route('raiz') }}" class="text-white font14">
                <img src="{{ asset('imgs/sistema/programadores.png') }}" class="curriculum-logo">
                Escola Dona Zalina Rolim
            </a>

            <div>
                <!-- Links do menu -->
                <ul class="flex space-x-4">
                    <li><a href="{{ asset('gerapdf/dri') }}" class="pdf-action" target="_blank" rel="noopener">
                            Salvar currículo em PDF
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a href="javascript:history.back()">
        <span class="retorna" role="button">&#8592;&nbsp; Voltar</span>
    </a>
    <section class="curriculum-sheet">
        
        <div>
            <nav class="curriculum-identidade flex justify-center my-4" style="width:80%; padding:10px 10px 10px 0; background-color:transparent; border-radius: 0 0 25px 0;">
                <div class="container-fluid w-full">
                    <!-- Adicionado: flex items-center justify-between no container pai -->
                    <div class="row texto-esquerda flex items-center justify-between gap-4" style="width:80%; margin-left:15%; position:relative;">
                        
                        <!-- Lado Esquerdo: Nome e OAB -->
                        <div class="flex">
                            <div id="pessoal1" class="text-center md:text-left z-10 cor1">
                                <p class="f-siga1 cor1 font-bold">Adrieli</p>
                                <p class="phont2 cor1">Bernal</p>
                            </div>
                        </div>

                        <!-- Centro: Imagem -->
                        <div id="image1" class="z-10 shrink-0">
                            <img class="w-24 md:w-28 lg:w-32" src="{{ asset('/imgs/sistema/alunos/dri.jpg') }}" style="border-radius:50%;"/><br>
                        </div>

                        <!-- Lado Direito: Dados de Contato -->
                        <div id="pessoal2" class="texto-esquerda cor1 text-[12px] z-10">
                            <div class="texto-esquerda cor1" style="z-index: 1;">
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/location-place.png') }}"/> Rua Renato 1179, Casa 10</p>
                                <p class="phont2" style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;São Paulo - SP</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/phone-symbol.png') }}"/> Fone : (11) 98765-1639</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/mail-email.png') }}"/> e-mail: adrielibernal@gmail.com</p>
                            </div>
                        </div>    
                        
                    </div>
                    <hr class="mt-4">
                </div>
            </nav>
            
        </div>
        
        <div class="curriculum-conteudo div-alinhada-direita">
                    <div class="texto-esquerda justify-center" style="text-align:justify;" ><br>
                        <p class="f-cabeca1"><a href="" class="text-blue text-md font-bold f-siga1">
                            Objetivo(s) :</a>
                        </p>
                        <p class="grid justify-items-auto grid-cols-0 text-align: justify;">
                            Atuar na área de trabalho.
                        </p><br>

                        <p class="f-cabeca1 f-siga1 cor1 font-bold">Formação Acadêmica</p>

                            <p class="grid justify-items-auto" style="padding-bottom:5px;">
                                <p class="f-entidade">
                                    <p class="f-negrito">Cursando 3º ano do Ensino Médio (Período Matutino)</p>
                                    <p class="f-menor2">Colegio EE Dona Zalina Rolim</p>
                                    <p class="f-menor1">Em andamento.</p>
                                </p>
                                

                                <p class="f-cabeca1 f-siga1 cor1 font-bold">Idiomas</p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Espanhol</p>
                                    <p class="f-menor2">Fluente</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Inglês</p>
                                    <p class="f-menor2">Básico</p>
                                </p>

                                <p class="f-cabeca1 f-siga1 cor1 font-bold">Habilidades e Competências</p>
                                <p class="f-entidade">
                                    <p class="f-menor2">Capacidade de trabalhar em equipe, Agilidade de aprendizagem, Adaptabilidade, Empatia, Dedicação, Proatividade, Organizada.</p>
                                </p>
                    
                            </p>
                            <br>
                            <p class="f-cabeca1 f-siga1 cor1 font-bold">Experiências Profissionais</p>

                            <p class="f-entidade"><lb class="f-menor1"></lb><b class=" f-negrito">Estágio em Supermercado</b></p>
                            <p class="f-negrito"><lb class="f-menor"></lb>Período: 1 ano</p>
                            <p><lb class="f-menor2">Experiência prática desenvolvida no setor de supermercado pelo período de um ano.</p>

                            </p>
                            <p><br><br><br></p>
                        </div>


                        
        </div>

    </section>
    </center>
    </body>
</html>
