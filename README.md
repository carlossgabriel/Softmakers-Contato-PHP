
DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



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
2. Com o SGBD aberto, selecione <Novo> e então vá para a aba <Importar>
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

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 


### Running  acceptance tests

To execute acceptance tests do the following:  

1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration

2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full featured
   version of Codeception

3. Update dependencies with Composer 

    ```
    composer update  
    ```

4. Download [Selenium Server](http://www.seleniumhq.org/download/) and launch it:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```

    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver](https://github.com/mozilla/geckodriver/releases) or [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads) and launch Selenium with it:

    ```
    # for Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # for Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ``` 
    
    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:
    
    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Optional) Create `yii2basic_test` database and update it by applying migrations if you have them.

   ```
   tests/bin/yii migrate
   ```

   The database configuration can be found at `config/test_db.php`.


6. Start web server:

    ```
    tests/bin/yii serve
    ```

7. Now you can run all available tests

   ```
   # run all available tests
   vendor/bin/codecept run

   # run acceptance tests
   vendor/bin/codecept run acceptance

   # run only unit and functional tests
   vendor/bin/codecept run unit,functional
   ```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run --coverage --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit --coverage --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit --coverage --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.
