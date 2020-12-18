Framework: Laravel 
Instalador de pacotes: Composer
Banco de dados: Mysql ou sqlite

## Siga os passos abaixo para rodar essa Api 

1 - composer install

2 - Realize uma cópia do arquivo .env.example
3 - Edite o nome do arquivo para .env 

4 - touch database/laravel.sqlite

5 - para gerar secret key execute o comando abaixo 
php artisan jwt:secret 
 
6 - Execute o comando abaixo para que a estrutura e tabelas sejam criadas na sua base de dados:
php artisan migrate

7 - Execute o próximo comando para que sejam carregado os dados básicos
nas tabelas do banco de dados:
php artisan db:seed
