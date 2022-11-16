## Laravel API CRUD Book Store and Auth for Laravel 7
## Installation

1. run `git clone https://github.com/lenardo05/auth_crud_book_api.git`;

**Optional:** php artisan config:clear

2. `php artisan passport:install`
3. `php artisan passport:install --force`
4. `composer install`

Once the project creation procedure will be completed, run the `php artisan migrate` command to install the required tables.

## Usage

Below are the routes.

**Note:** It is necessary to use the Bearer Token option to create, update and delete a book.
The route is secured with authentication

```
+---------+----------+-----------------------------------------+------------+
| Domain  | Method   | URI                                     | Middleware |
+---------+----------+-----------------------------------------+------------+
|         |          |                                         | auth:api   |
|localhost| POST     | api/auth/signup                         | api        |
|localhost| POST     | api/auth/login                          | api        |
|localhost| GET|HEAD | api/auth/user                           | api        |
|         |          |                                         |            |
|localhost| POST     | api/auth/create/book                    | api        |
|localhost| PUT      | api/auth/update/book/{id}               | api        |
|localhost| DELETE   | api/auth/delete/book/{id}               | api        |
|localhost| GET|HEAD | api/auth/logout                         | api        |
|         |          |                                         |            |
|localhost| GET|HEAD | api/books                               | api        |
|localhost| GET|HEAD | api/find/book/{id}                      | api        |
|         |          |                                         |            |
|localhost| GET|HEAD | api/unauthorized                        | api        |
+---------+----------+-----------------------------------------+------------+
```