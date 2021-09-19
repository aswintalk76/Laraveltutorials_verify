composer create-project laravel/laravel --prefer-dist laravel-image-upload
php artisan make:model Image -m
php artisan make:controller ImageUpload
php artisan serve
http://127.0.0.1:8000/image-upload