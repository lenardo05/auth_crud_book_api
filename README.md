## Laravel API CRUD Book Store and Auth for Laravel 7
## Server Requirements
* PHP >= 7.2.5
* BCMath PHP Extension
* Ctype PHP Extension
* Fileinfo PHP extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

## Installation

1. run `git clone https://github.com/lenardo05/auth_crud_book_api.git`;
2. rename `.env.example` to `.env` 
3. config `.env` example:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_bookstore
DB_USERNAME=root
DB_PASSWORD=root
```
4. run `composer require laravel/passport:^9.0`
5. run `composer require lcobucci/jwt:"^3.0"`
6. run `php artisan key:generate`
7. run `php artisan config:cache`
8. run `php artisan migrate`
9. run `php artisan passport:install --force`
10. run `composer install`
11. run `php artisan serve`

## Usage

Below are the routes.

**Note:** It is necessary to use the Bearer Token option to create, update and delete a book.
The route is secured with authentication

```
+--------+----------+-----------------------------------------+------------+
| Domain | Method   | URI                                     | Middleware |
+--------+----------+-----------------------------------------+------------+
|        |          |                                         | auth:api   |
| {host} | POST     | api/auth/signup                         | api        |
| {host} | POST     | api/auth/login                          | api        |
| {host} | GET|HEAD | api/auth/logout                         | api        |
| {host} | GET|HEAD | api/auth/user                           | api        |
|        |          |                                         |            |
| {host} | POST     | api/auth/create/book                    | api        |
| {host} | PUT      | api/auth/update/book/{id}               | api        |
| {host} | DELETE   | api/auth/delete/book/{id}               | api        |
|        |          |                                         |            |
| {host} | GET|HEAD | api/books                               | api        |
| {host} | GET|HEAD | api/find/book/{id}                      | api        |
|        |          |                                         |            |
| {host} | GET|HEAD | api/unauthorized                        | api        |
+--------+----------+-----------------------------------------+------------+
```