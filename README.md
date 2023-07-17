# Laravel - Cadastro de Leads para Corretores

Este é um projeto Laravel que consiste em duas páginas principais:

## Página Principal ('/')
A página principal é uma landing page responsável por cadastrar novos leads no banco de dados. Os visitantes poderão preencher um formulário para se tornarem leads no sistema. Os dados do lead serão armazenados no banco de dados para futuras referências.

## Página de Login ('/login')
A página de login é onde os usuários poderão acessar o sistema com suas credenciais. Existem 3 páginas no menu de usuário logado, apenas 'Meus Leads' pode ser acessada (por ora).
Neste projeto, há dois usuários pré-configurados com informações de login:

### Usuário 1
- Email: forrest@gmail.com
- Senha: runForrestRun

### Usuário 2
- Email: john@gmail.com
- Senha: pencil123

## Instruções de Instalação

Siga estas etapas após baixar o projeto para configurar o ambiente e executar a aplicação:

1. Instale as dependências do Composer: `composer install`

2. Instale as dependências do npm (motivo: laravel/ui): `npm install`

3. Compile os assets: `npm run dev`

4. Crie o arquivo de configuração `.env` na raiz do projeto. Você pode copiar o conteúdo do arquivo `.env.example` e ajustar conforme necessário para o seu ambiente.

5. Crie o banco de dados e execute as migrações para criar as tabelas necessárias: `php artisan migrate`


6. Se desejar ter dados pré-cadastrados, execute as seeds para adicionar os usuários fornecidos ao banco de dados: `php artisan db:seed`


## Executando a Aplicação

Após concluir as etapas de instalação, você pode iniciar o servidor de desenvolvimento do Laravel com o seguinte comando:
`php artisan serve`


Isso iniciará o servidor local, e você poderá acessar a aplicação em seu navegador através do endereço `http://localhost:8000/` para acessar a página de cadastro de leads e `http://localhost:8000/login` para acessar a página de login.

Lembre-se de que esta aplicação está configurada para ambiente de desenvolvimento. Para implantar em produção, outras configurações podem ser necessárias.

Divirta-se desenvolvendo o projeto Laravel! Se tiver alguma dúvida, consulte a documentação oficial do Laravel em https://laravel.com/docs ou entre em contato comigo.



