<h1>Painel Consumindo API com Vue.js</h1>

<p>Este projeto é um painel web construído em Vue.js que consome uma API para gerenciar registros de eletrodomésticos. Neste arquivo README.md, você encontrará informações sobre como iniciar o projeto localmente e uma descrição das rotas disponíveis.</p>

<h2>Inicialização do Projeto</h2>

<p>Para iniciar o projeto, certifique-se de que o Node.js e o npm (Node Package Manager) estejam instalados em seu sistema. Em seguida, siga os passos abaixo:</p>

<ol>
    <li>Clone este repositório para o seu ambiente local.</li>
    <li>Navegue até a pasta raiz do projeto.</li>
</ol>

<h3>Instalação das Dependências</h3>

<p>Antes de executar o projeto, instale as dependências necessárias usando o seguinte comando:</p>

<pre><code>npm install</code></pre>

<h3>Executando o Projeto</h3>

<p>Com as dependências instaladas, você pode iniciar o painel usando o seguinte comando:</p>

<pre><code>npm run dev</code></pre>

<p>O comando acima irá compilar e executar o painel em modo de desenvolvimento. Após a execução bem-sucedida, o painel estará disponível em <a href="http://localhost:5173">http://localhost:5173</a> (ou outra porta, caso a 5173 esteja em uso).</p>

<h2>Rotas Disponíveis</h2>

<p>O painel possui as seguintes rotas:</p>

<h3>1. /appliance - Lista de Eletrodomésticos</h3>

<p>Esta rota apresenta uma lista dos registros de eletrodomésticos disponíveis no sistema. Os registros são obtidos da API e exibidos em uma interface amigável para o usuário.</p>

<h3>2. /appliance/create - Criar Registro de Eletrodoméstico</h3>

<p>Nesta rota, os usuários podem criar um novo registro de eletrodoméstico. Um formulário intuitivo é apresentado para inserir as informações necessárias, e ao enviar os dados, a API será chamada para armazenar o novo registro.</p>

<h3>3. /appliance/:id/update - Editar Registro</h3>

<p>A rota de atualização permite aos usuários editar um registro existente de eletrodoméstico. O painel exibirá um formulário pré-preenchido com os detalhes do registro atual, e o usuário poderá fazer as alterações necessárias. Ao enviar o formulário, a API será chamada para atualizar os dados do registro.</p>

<p>Lembre-se de que para acessar as rotas acima, a API precisa estar configurada e em execução. Certifique-se de ter a API corretamente configurada e conectada ao painel.</p>

<p>Pronto! Agora você está pronto para iniciar e explorar o painel consumindo a API com Vue.js. Divirta-se gerenciando seus registros de eletrodomésticos de forma fácil e intuitiva!</p>
