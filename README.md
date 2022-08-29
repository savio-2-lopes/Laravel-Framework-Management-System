# Ambiente Docker PHP Apache MySQL

### Rodando o servidor
sudo docker compose up --build

### Criando projeto Laravel
composer create-project laravel/laravel .
composer create-project --prefer-dist laravel/laravel:^7.0 .

### Rodar permisão e instalar git
chmod -R 777 /var/www/php/ && composer create-project --prefer-dist laravel/laravel:^7.0 .

### Permitir modificações na pasta
sudo chown -R lopes /home/lopes/www/php

### Limpar route 
php artisan route:clear

localhost:8000/clear-cache