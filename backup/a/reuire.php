composer create-project laravel/laravel --prefer-dist laravel-pagination
DB_HOST=localhost;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock
php artisan make:model Employee -m
php artisan migrate
php artisan db:seed
php artisan make:controller EmployeeController
{!! $employees->appends(['sort' => 'department'])->links() !!}
http://127.0.0.1:8000/convert-to-json

pagination not work