# Dependencias do projeto:

[PHP 8.1](https://www.php.net/)
[Yarn 1.22.19](https://classic.yarnpkg.com/en/)
[Composer 2.4.3](https://getcomposer.org/)
[MySql 8.0](https://www.mysql.com/)

# Iniciando o frontend

## Scripts a utilizar

No diretório do frontend:

Realize a instação das bibliotecas necessárias através do comando `yarn`

### `yarn start`

Execute o comando cp .env.example .env para realizar a cópia do env base que será utilizado. Se necessário, altere o endereço da API.

Execute para iniciar o projeto.
Será aberto em [http://localhost:3000](http://localhost:3000).

### `yarn test`

Inicia o executor de teste no modo de exibição interativa.\
Veja a seção sobre [executando testes](https://facebook.github.io/create-react-app/docs/running-tests) para mais informações.

### `yarn run build`

Compila o aplicativo para produção na pasta `build`.\
Ele agrupa corretamente o React no modo de produção e otimiza a compilação para o melhor desempenho.

A compilação é reduzida e os nomes dos arquivos incluem os hashes.\
Seu aplicativo está pronto para ser implantado!

Veja a seção sobre [deployment](https://facebook.github.io/create-react-app/docs/deployment) para maiores informações.

### Deployment

Veja a seção sobre deployment aqui [https://facebook.github.io/create-react-app/docs/deployment](https://facebook.github.io/create-react-app/docs/deployment)

# Iniciando o backend

## Configurando o projeto

Com o [PHP 8.1](https://www.php.net/) intalado e configurado para utilização do banco de dados MySql execute os seguintes comandos:

cp .env.example .env
php artisan key:generate

Realize a configuraçao do `.env` conforme os dados de dados de acesso ao banco de dados.
Alterando os seguintes campos com os valores correspondentes:

DB_USERNAME='Nome do usuário de acesso ao banco de dados'
DB_PASSWORD='Senha de acesso ao banco de dados'

Crie a base de dados de nome `scgpd` e alter no env o campo a baixo para scgpd
DB_DATABASE

## Iniciando

### Criando a base de dados

Com a configuração pronta execute o comando `php artisan migrate` para a criação das tabelas na base de dados;

### Populando o banco de dados

Agora execute o comando `php artisan db:seed` para a popular a base de dados criada;

### Iniciando o servidor

Para iniciar o servidor deve-se executar o comando `php artisan serve`.
Isso fará o servidor iniciar em [http://localhost:8000](http://localhost:8000).
