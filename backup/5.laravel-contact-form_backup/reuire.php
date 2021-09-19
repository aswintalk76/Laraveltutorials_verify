composer create-project laravel/laravel --prefer-dist laravel-contact-form
php artisan make:model Contact -m
php artisan migrate
php artisan make:controller ContactUsFormController
php artisan make:mail contact

mail not send 