# API for Flutter using Laravel 9

## Requirements
- composer
- php >= 8.1
- mysql (or) mariadb

## Setup
- Clone the repository
```
git clone git@github.com:kylesinlynn/laravel_api_for_flutter.git
```
- Move `env` file to `.env` and customize settings for database connection
```
mv env .env && nano .env
```
- Run composer
```
composer install
```
- Make migrations to the database
```
php artisan migrate
```
- Check the routes for API
```
php artisan route:list
```

### Sending Requests and Getting Responses
In order to do such actions, you must use API Client you prefer.
