Xây dựng trang Admin
Cài  file manager 

 composer require unisharp/laravel-filemanager
 
 php artisan vendor:publish --tag=lfm_config
 
 php artisan vendor:publish --tag=lfm_public
 
 php artisan route:clear
 
  php artisan config:clear
 
 php artisan storage:link

composer require intervention/image:*

Lỗi upload chỉnh php.ini

upload_tmp_dir = "C:/laragon/tmp"

composer require spatie/laravel-fractal

Tích hợp tiny MCE

https://unisharp.github.io/laravel-filemanager/integration

