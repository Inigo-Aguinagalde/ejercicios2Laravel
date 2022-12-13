Para descargase el proyecto de laravel tenies que descargaros el zip, depues descrompimirlo. Una vez descrompimido y dentro del directorio abrir una terminal, ya sea cmd, la visual cualquiera vale.

Teneis que ejecutar los siguiente comandos en el orden de abajo

composer install
mv .env.example .env
php artisan cache:clear
composer dump-autoload
php artisan key:generate
Una vez hecho esto ya podeis hacer el php artisan serve
