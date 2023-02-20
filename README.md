# MetaDent backend api setup

## Installation instructions
* First clone the project to the your target directory of the server that you intend to use.
* Create a .env file in the project root directory and Copy .env.example file contents to the newly created .env file.
* Update the Database credentials basing on your server setup.
* Run the migration command to upload all the systems requireed tables to the database.

* php artisan migrate (this will migrate all table files into your database).
## Minimum Installation requirements
* Minimum PHP Version php 7.3 to 8.0
## Server requirements
A list of servers that can be used.
* Nginx server,
* Wampp server, Xampp, Mampp

## Serverless Requirements
* Docker (used along side laravel sail or any other Docker serverless configurations)
* [Laravel sail documentation](https://laravel.com/sail)


## Database Setup
* Add a database to your your server.
* Update
* Update DB_DATABASE='database_name'
* Update DB_USERNAME='database_user_name'
* Update DB_PASSWORD='database_password'
