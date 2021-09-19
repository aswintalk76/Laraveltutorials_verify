composer create-project laravel/laravel --prefer-dist laravel-file-upload
cd laravel-file-upload 
php artisan make:model File -m
php artisan migrate
php artisan make:controller FileUpload
php artisan serve

http://127.0.0.1:8000/upload-file