<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('imgs/sistema/pk_siga.png') }}" rel="shortcut icon" /></link>
    <title>{{ config('app.name', 'PKCia.Siga') }}</title>

    @vite(['resources/css/app.css'])

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
                <img src="{{ asset('imgs/sistema/programadores-small.png') }}" class="curriculum-logo">
                Escola Dona Zalina Rolim
            </a>

            <div>
                <!-- Links do menu -->
                <ul class="flex space-x-4">
                    <li><a href="{{ asset('gerapdf/pedro') }}" class="pdf-action" target="_blank" rel="noopener">
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
                                <p class="f-siga1 cor1 font-bold">Pedro</p>
                                <p class="phont2 cor1">A g u i a r</p>
                                <p class="phont2 cor1" style="font-size:12px;"></p>
                            </div>
                        </div>

                        <!-- Centro: Imagem -->
                        <div id="image1" class="z-10 shrink-0">
                            <img class="w-24 md:w-28 lg:w-32" src="{{ asset('/imgs/sistema/alunos/pedro.jpg') }}" style="border-radius:50%;"/><br>
                        </div>

                        <!-- Lado Direito: Dados de Contato -->
                        <div id="pessoal2" class="texto-esquerda cor1 text-[12px] z-10">
                            <div class="texto-esquerda cor1" style="z-index: 1;">
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/location-place.png') }}"/> Rua doutor luís carlos, 1222</p>
                                <p class="phont2" style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vila aricanduva, cep 03505-000 São Paulo-SP</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/phone-symbol.png') }}"/> Fone : 5511 94901-2099 / 5511 96506-5443</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/mail-email.png') }}"/> e-mail: powerguido@gmail.com</p>
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
                            Objetivos</a>
                       <p class="grid justify-items-auto grid-cols-0 text-align: justify;">
    Profissional motivado e dinâmico em busca de novas experiências práticas e evolução contínua no mercado corporativo. O objetivo principal é integrar equipes de alta performance nas áreas de Administração e Compras, aplicando competências de organização e gestão de processos para contribuir diretamente para o sucesso operacional da empresa, ao mesmo tempo em que desenvolvo novas habilidades e expando meu conhecimento técnico.
</p><br>

                        <p class="f-cabeca1 f-siga1 cor1 font-bold">Formação Acadêmica</p>

                            <p class="grid justify-items-auto" style="padding-bottom:5px;">
                                <p class="f-entidade">
                                    <p class="f-negrito">Ensino Medio</p>
                                    <p class="f-menor1">EE Dona Zalina Rolim</p>
                                    <p class="f-menor1"></p>
                                </p>
                                
                            <p class="f-cabeca1 f-siga1 cor1 font-bold">Cursos e Treinamentos</p>
                            <p class="f-entidade">
                                <p class="f-negrito">RISAP</p>
                                <p class="f-menor1">Administração</p>
                            </p>
                            <p class="f-entidade">
                                <p class="f-negrito">CEL</p>
                                <p class="f-menor1">Inglês - Básico</p>
                            </p>
                           <p class="f-cabeca1 f-siga1 cor1 font-bold">Experiências Profissionais</p>

                            <p class="f-entidade"><lb class="f-menor1">Empresa :</lb><b class=" f-negrito">Grupo Souza Lima</b></p>
                            <p><lb class="f-menor1">Cargos  :</lb> Analista de Administração Predial / Analista de Compras</p>
                            <p><lb class="f-menor1 text-align: justify;">Atuação : Gestão integrada da logística operacional, de facilities e da cadeia de suprimentos voltada para o atendimento de contratos corporativos e postos descentralizados. No Departamento de Administração, responsável pelo fluxo de funcionamento das equipes operacionais (portaria, limpeza e manutenção), supervisão de cronogramas técnicos e auditorias, garantindo o cumprimento rigoroso de SLAs e a conclusão de chamados. No Departamento de Compras, coordenação do ciclo completo de aquisições de fardamentos, EPIs e insumos técnicos, englobando desde a negociação estratégica com fornecedores homologados até o planejamento logístico de distribuição interna, assegurando a pontualidade na entrega e a otimização de custos (Saving).</p>

                            <p class="f-cabeca1 f-negrito f-siga1 cor1 font-bold">Experiências e Conhecimentos gerais</p>
                            <br>
                            <p><b class=" f-negrito">Projetos Relevantes</b>
                                <p>
                                • Otimização do fluxo de logística e roteirização para distribuição de insumos em postos de serviço operacionais.
                                • Redução de custos na cadeia de suprimentos por meio de negociações em lote e parcerias estratégicas.
                                • Implantação de rotinas automatizadas para controle de ordens de serviço, otimizando o tempo de atendimento.
                                • Gestão do ciclo completo de compras corporativas focada no cumprimento rigoroso de prazos e orçamentos.
                                </p>
                            </p>
                            <br>
                            <br>
                            <p><br><br><br></p>
                        </div>

                        
        </div>

    </section>
    </center>
    </body>
</html>
