composer create-project laravel/laravel laravel-jwt-auth --prefer-dist
DB_HOST=localhost;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock
php artisan migrate
composer require tymon/jwt-auth
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
JWT_SECRET=secret_jwt_string_key
php artisan make:controller AuthController


/api/auth/register