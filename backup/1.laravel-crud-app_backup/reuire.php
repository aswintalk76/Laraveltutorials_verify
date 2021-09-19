composer create-project laravel/laravel --prefer-dist laravel-crud-app
cd laravel-crud-app
php artisan -V
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
php artisan make:model Student -m
php artisan migrate
php artisan make:controller StudentController --resource
php artisan route:list

http://127.0.0.1:8000/students/create