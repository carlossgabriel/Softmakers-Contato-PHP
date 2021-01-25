REQUISITOS MINIMOS:

- PHP 5.6.0
- MySQL & Apache
- COMPOSER

INSTALAÇÃO E CONFIGURAÇÃO
------------

### Instalar PHP sem o Xampp

Para utilização no Windows, o [Php](http://getcomposer.org/) pode ser instalado fazendo o download do Zip de alguma das versões disponíveis em: (https://windows.php.net/download)

Ao finalizar o processo de extração da pasta do php, é necessário adicionar o caminho do executável nas variáveis de ambiente.
Selecionando Path e clicando em editar as variáveis do sistema ou do usuário (fica a escolha do utilizador), deve ser adicionado o caminho do executável.

### Instalar PHP com o Xampp

Sendo o processo mais prático para instalação do PHP, o [Xampp](https://www.apachefriends.org/pt_br/index.html) permite que com um executável sejam instalados os seguintes programas que são necessários para a aplicação:
* PHP
* Apache
* MySQL

### Instalar Composer

Realize o processo de instalação executando o instalador disponível no site: [Composer](https://getcomposer.org/Composer-Setup.exe). 
É necessário que o PHP já esteja instalado no sistema.


CONFIGURAÇÃO
-------------

### Projeto

Agora com o ambiente pronto, faça o clone do repositório no local desejado com o <git clone https://github.com/carlossgabriel/Softmakers-Contato-PHP.git> ou realizando o donwload do projeto.


### Banco de dados

Para utilizar a aplicação é necessário criar o banco de dados com as tabelas necessárias

A aplicação precisa identificar o banco de dados e a conexão com o mesmo. Para isso, as configurações estão no diretório <agenda\config\db.php> e estará listada a seguinte configuração para testes:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=agenda',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

**NOTA:**
- O framework não cria a base de dados, logo é necessário realizar o processo manual:
1. No Xampp Controll Panel, com o Apache e o MySQL iniciados, selecione para abrir o gerenciador de banco de dados clicando em <Admin>
2. Com o SGBD aberto, selecione <Novo>, crie um banco de dados com o nome <agenda> e então vá para a aba <Importar>
3. Com a aba de importação aberta, selecione o arquivo <agenda.sql> que está localizado no diretório <agenda/bdscript/> e clique para Executar.

CONFIGURAÇÃO
-------------

### Iniciar a aplicação

Para inicar o projeto é necessário executar o comando baixo no terminal, estando na raíz da aplicação:

```
php yii serve
```
Pronto, agora é só acessar o localhost:
<http://localhost:8080/index.php>

TESTING
-------

Os testes estão dentro do diretório `tests`. Foram desenvolvidos com [Codeception PHP Testing Framework](http://codeception.com/).

Para executar os testes, usar o comando:

```
vendor/bin/codecept run
```
