<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Configurando o projeto

### Execute

``cp .env-example .env`` 

``composer install``

``php artisan key:generate``

Como forma de armazenamento utilizei o Sqlite, para criar o arquivo execute o  na raiz do projeto: 

`touch database/database.sqlite`

### Ambiente

O projeto necessita da versão mínima `8.0.2` do PHP para executar a API, basta executar o
seguinte comando:

``php artisan serve --host=0.0.0.0 --port=8181``

Em seguida, será possível acessar o projeto através do link:

``http://localhost:8181``


### SQlite

Configurar o caminho até o  arquivo: `/path/to/project/database/database.sqlite` no parâmetro `DB_DATABASE` no arquivo `.env`

Certifique de possuir as extenções do PHP: `pdo_sqlite` e `sqlite3` 

Para finalizar, execute o comando:

 ``php artisan migrate``

### Collection Postman

A collection do Postman encontra - se na raiz do projeto com o nome de: `ToDo.postman_collection.json` na versão 
`2.1`
