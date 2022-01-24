<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Simple Install Document


<p>1. npm install</p> 

- to install the related modules

<p>2. edit the .env file</p>

<p>3. php artisan migrate </p>

- to run the database migration 

<p>4. php artisan db:seed</p>

- to generate some dummy data

<p>5. Run php artisan serve</p> 

- to start the server



## Api Route Docuemnt

<p> GET /persons?page=X </p>

- X is the page number
- fetch all people living in your city

<p> GET /cars?street_name=X</p>

- X is the a particular street name
- fetch all cars when providing a particular street name

<p> GET /owners?license_plate=X </p>

- X is the license plate
- fetch the owner(s) of a vehicle when providing a license plate

<p> GET /houses?name=X</p>

- X is the person's name
- fetch the full address and street of a house when providing a person's name


## Verson Document


<p> PHP 8 , MySQL 8 , Vue 3 , PHPUnit, Laravel 8 </p>


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
