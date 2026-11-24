# Portfólio de Currículos - Escola Dona Zalina Rolim

Aplicação web pública desenvolvida para reunir e apresentar os currículos dos
estudantes da Escola Dona Zalina Rolim.

Este projeto foi criado como parte de um trabalho acadêmico e permite consultar
informações profissionais dos alunos em uma página central, abrir cada currículo
individual e exportar uma versão em PDF.

## Objetivo

Demonstrar na prática o uso de desenvolvimento web para organizar, apresentar e
disponibilizar informações acadêmicas e profissionais.

O projeto concentra:

- Uma página inicial com identificação da escola.
- Uma página "Quem Somos" com os estudantes cadastrados.
- Currículos individuais responsivos.
- Informações de objetivo, formação, cursos e experiências.
- Geração de PDF para cada currículo.
- Navegação simples e identidade visual padronizada.

## Estudantes apresentados

- Pedro Aguiar
- Yasmim Gameleira
- Bruno Leite
- Guilherme Souza
- Adrieli Bernal
- Herlan Daner Palma Condori

Algumas informações podem ser exemplos ou dados fictícios cadastrados durante o
desenvolvimento. Elas devem ser revisadas antes de qualquer publicação real.

## Tecnologias

- PHP
- Laravel
- Blade
- Tailwind CSS
- CSS
- JavaScript
- Alpine.js
- Vite
- DomPDF
- Git e GitHub

## Estrutura principal

```text
resources/views/welcome.blade.php
resources/views/site/quemsomos.blade.php
resources/views/site/curriculum/
resources/css/curriculum.css
public/imgs/sistema/alunos/
public/imgs/sistema/programadores.png
public/imgs/sistema/zr2.png
app/Http/Controllers/site/SiteController.php
app/Http/Controllers/pdfs/PdfsController.php
routes/web.php
doc/
```

## Navegação

Página inicial:

```text
/
```

Quem Somos:

```text
/site/quemsomos
```

Currículos:

```text
/site/curriculum/pedro
/site/curriculum/yas
/site/curriculum/bruno
/site/curriculum/gui
/site/curriculum/dri
/site/curriculum/herlan
```

Exportação em PDF:

```text
/gerapdf/pedro
/gerapdf/yas
/gerapdf/bruno
/gerapdf/gui
/gerapdf/dri
/gerapdf/herlan
```

## Requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e npm
- XAMPP ou Apache
- MySQL/MariaDB, apenas para recursos gerais do projeto que utilizem banco

## Configuração local

Instale as dependências PHP:

```bash
composer install
```

Instale as dependências frontend:

```bash
npm install
```

Crie o arquivo de ambiente:

```bash
copy .env.example .env
```

No Windows PowerShell, use também:

```powershell
Copy-Item .env.example .env
```

Configure o arquivo `.env`, principalmente o nome da aplicação e os dados do
banco, caso seja necessário para a apresentação.

Gere os arquivos frontend:

```bash
npm run build
```

Inicie o servidor:

```bash
php artisan serve
```

Acesse:

```text
http://127.0.0.1:8000
```

## Uso no Apache do XAMPP

Configure o Apache para apontar para a pasta:

```text
curriculumZR/public
```

Depois gere os assets:

```bash
npm run build
```

Não é necessário usar `php artisan serve` simultaneamente ao Apache.

## Geração de PDF

Cada currículo possui um botão "Salvar currículo em PDF". O botão abre uma rota
que usa o DomPDF para renderizar a mesma estrutura Blade em formato PDF.

Somente os seis nomes cadastrados no controlador são considerados válidos. Um
nome fora dessa lista retorna página não encontrada.

## Documentação completa

Consulte:

```text
doc/Documentacao_do_projeto_curriculos.txt
```

O documento técnico do TCC fornecido está em:

```text
doc/TCC — Currículo Web (E.E. Zalina Rolim).pdf
```

O PDF original não foi alterado.

## Visualização e apresentação

Sugestões para apresentação:

1. Mostre a página inicial e explique o objetivo do projeto.
2. Entre na página "Quem Somos".
3. Passe o mouse sobre os cards para explicar as informações extras.
4. Abra o currículo de um estudante.
5. Apresente objetivo, formação, cursos e experiência.
6. Demonstre o botão "Salvar currículo em PDF".
7. Use o botão "Voltar" para retornar à página anterior.
8. Mostre o projeto em uma resolução menor para demonstrar responsividade.

## Arquitetura resumida

```text
Navegador
   |
   v
Rotas Laravel
   |
   v
Controladores
   |
   v
Views Blade
   |
   v
HTML + CSS + JavaScript
```

Na geração de PDF:

```text
Clique no botão
   |
   v
Rota /gerapdf/{aluno}
   |
   v
Validação do nome
   |
   v
Renderização da view
   |
   v
DomPDF
   |
   v
Arquivo PDF
```

## Arquivos que não devem ser enviados ao GitHub

- `.env`
- `vendor/`
- `node_modules/`
- `public/build/`
- `storage/logs/`
- `storage/framework/cache/`
- `storage/framework/sessions/`
- `storage/framework/views/`
- Arquivos temporários, backups e arquivos incompletos

## Próximos passos

- Revisar nomes, contatos e dados pessoais dos estudantes.
- Substituir dados fictícios por informações reais autorizadas.
- Revisar ortografia e padronizar objetivos e experiências.
- Testar todos os PDFs em navegadores diferentes.
- Adicionar testes automáticos para as páginas públicas.
- Melhorar a quebra de páginas no PDF.
- Preparar capturas de tela para o relatório e a apresentação do TCC.

## Repositórios

- Repositório principal: https://github.com/Snowbr4677/curriculumZR
- Repositório relacionado ao TCC: https://github.com/Snowbr4677/Curriculum
