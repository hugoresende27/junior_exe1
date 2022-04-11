## Adminpanel to manage companies
## Basically, project to manage companies and their employees. Mini-CRM.

- Basic Laravel Auth: ability to log in as administrator
- Use database seeds to create first user with email admin@admin.com and password “password”
- CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
- Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website
- Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone
- Use database migrations to create those schemas above
- Store companies logos in storage/app/public folder and make them accessible from public
- Use basic Laravel resource controllers with default methods – index, create, store etc.
- Use Laravel’s validation function, using Request classes
- Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page
- Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Learning Laravel

