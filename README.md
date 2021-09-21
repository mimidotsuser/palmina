
# Palmina
Laravel based technical test

## Available API Routes

|Endpoint|Description|Sample
|---|---|---|
|/api/v1/auth/login  | User login with user/password. Returns a token (sanctum) | |
|/ api/v1/auth/register | Register a user account  |  
|/api/v1/users/me | Get user account. Expects a bearer token |


Sample body `/api/v1/auth/register`
```json

{
    "name":"Jane Doe",
    "password":"password@1234",
    "password_confirmation":"password@1234",
    "email":"demo@example.com",
    "phone_number":"254712345678"
}

```

Sample body `/api/v1/auth/login`
```json

{
    "password":"password@1234",
    "email":"demo@example.com"
}

```

## Local setup
### Prerequisite
- PHP 7.4+
- Mysql database
- Composer

1. Install project php dependencies with composer ``composer install``
2. Create a database and update the credentials in .env file
3. Run migrations ``php artisan migrate``
4. Seed the database table with some users ``php artisan db:seed``

### Using sail
1. Publish docker-compose
```shell
php artisan sail:install
```

2. Start the application
```shell
./vendor/bin/sail up
```

