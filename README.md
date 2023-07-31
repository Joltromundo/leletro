<h1>Projeto em Laravel - Setup e Rotas</h1>

<p>Este projeto em Laravel é uma API para gerenciar registros de eletrodomésticos, e também possui um painel em Vue.js para facilitar a interação com a API. Neste arquivo README.md, você encontrará informações sobre como configurar o projeto, rodar as migrações e seeders, e como executar o projeto localmente ou usando o Docker.</p>

<h2>Setup do Projeto</h2>

<p>Antes de executar o projeto, siga os seguintes passos de configuração:</p>

<ol>
    <li>Clone este repositório para o seu ambiente local:</li>
    <pre><code>git clone &lt;url-do-repositorio&gt;</code></pre>
    <pre><code>cd &lt;nome-do-repositorio&gt;</code></pre>

    <li>Edite ou crie o arquivo .env com as configurações do banco de dados:</li>
    <pre><code>cp .env.example .env</code></pre>
    <p>No arquivo .env, configure as seguintes variáveis de ambiente com os dados do seu banco de dados:</p>
    <pre><code>
DB_CONNECTION=mysql
DB_HOST=seu_host
DB_PORT=porta_do_banco
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
    </code></pre>

    <li>Execute as migrações e seeders para preparar o banco de dados:</li>
    <pre><code>php artisan migrate --seed</code></pre>
    <p>Esse comando irá criar as tabelas necessárias no banco de dados e populará com alguns dados iniciais para a aplicação.</p>
</ol>

<h2>Executando o Projeto</h2>

<p>Você tem duas opções para executar o projeto: localmente ou usando Docker.</p>

<h3>Localmente</h3>

<p>Para executar o projeto localmente, você precisará do PHP e do Composer instalados em seu sistema. Após concluir o setup do projeto, execute o seguinte comando para iniciar o servidor:</p>
<pre><code>php artisan serve</code></pre>
<p>O servidor estará disponível em <a href="http://localhost:8000">http://localhost:8000</a>.</p>

<h3>Docker</h3>

<p>Se você preferir executar o projeto usando Docker, certifique-se de ter o Docker e o Docker Compose instalados em seu sistema. Após o setup do projeto, execute o seguinte comando para construir e executar os containers:</p>
<pre><code>docker-compose up -d --build</code></pre>
<p>O servidor estará disponível em <a href="http://localhost:8000">http://localhost:8000</a>.</p>

<h2>Apresentação das Rotas</h2>

<p>A API possui as seguintes rotas disponíveis:</p>

<ul>
    <li>GET /api/appliances: Lista todos os eletrodomésticos.</li>
    <li>POST /api/appliances: Cria um novo registro de eletrodoméstico.</li>
    <li>GET /api/appliances/{id}: Obtém um registro específico de eletrodoméstico pelo ID.</li>
    <li>PUT /api/appliances/{id}: Edita um registro existente de eletrodoméstico pelo ID.</li>
    <li>DELETE /api/appliances/{id}: Deleta (softDeletes) um registro existente de eletrodoméstico pelo ID.</li>
</ul>

<h2>Painel em Vue.js</h2>

<p>O projeto também inclui um painel em Vue.js localizado na branch "panel". O painel é uma interface amigável que consome a API para gerenciar os registros de eletrodomésticos. Para acessar o painel, certifique-se de mudar para a branch "panel" do repositório.</p>
<pre><code>git checkout panel</code></pre>

<p>O painel oferece funcionalidades para listar, criar, editar e excluir registros de eletrodomésticos de forma intuitiva.</p>

<p>Divirta-se explorando o projeto Laravel e Vue.js!</p>
<p>Agora que o setup foi concluído e você conhece as rotas disponíveis e o painel Vue.js, aproveite para explorar e gerenciar os registros de eletrodomésticos de forma eficiente e prática. Se tiver alguma dúvida ou precisar de ajuda, sinta-se à vontade para entrar em contato com a equipe responsável pelo projeto. Boa jornada!</p>