composer create-project laravel/laravel laravel-ajax-crud --prefer-dist
DB_HOST=localhost;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock
php artisan make:model Todo -m
php artisan migrate
php artisan make:controller CrudController
php artisan serve