<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Kanban Board Laravel

Kanban board has been developed on Laravel Framework using version 8.0
Here MySQL Database has been used.
PHP version was - 7.4.25
To Install this project follow below steps:

- Clone the project using this command "git clone https://github.com/Naimcse56/kanban-laravel.git"
- Go to the project folder under htdocs folder.
- Open terminal after going there and run the following command "composer install"
- Run cp .env.example .env or copy .env.example .env.
- Run php artisan key:generate.
- Open your Browser and go to http://localhost/phpmyadmin and create database named "kanban_board".
- Open .env file that you created few times earlier and place there (DB_DATABASE="kanban_board", DB_USERNAME="root") after finding these.
- Run php artisan migrate.
- Run php artisan serve.
- Open Browser and Go to link localhost:8000/
