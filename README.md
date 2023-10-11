<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# employee-app-backend

This is the backend REST API for the Employee Application using Laravel 10 and Docker. <br />
It is used by the Vue.js frontend for Employee Application.

## run project:

## Docker compose

`docker compose up -d employeedb` <br />
`docker compose up -d phpmyadmin2`<br />
`docker compose up --build employeeapp`

## Access database

`docker exec -it employeedb mysql -u root -p`<br />
`GRANT ALL PRIVILEGES ON employeedb.* TO 'admin'@'%';`<br />
`FLUSH PRIVILEGES;`<br />
`CREATE DATABASE employeedb;`<br />
`EXIT;`

## Create model and controller class

`php artisan make:model ModelName -m`
`php artisan make:controller ControllerName -m`

## Migrate database

`docker exec employeeapp php artisan migrate`

## Remove containers

`docker compose down -v`

## Test the request from Insomnia or something else

`http://localhost:8000/api/employees`
