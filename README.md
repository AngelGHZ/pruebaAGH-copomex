PruebaAGH – COPOMEX

Laravel · MySQL · Bootstrap

Prueba técnica desarrollada en Laravel que consume la API de COPOMEX para listar los estados de México y consultar sus municipios asociados.

Tecnologías utilizadas

Laravel 9

PHP 8.0

MySQL

Bootstrap 5

DataTables

API COPOMEX

Funcionalidades

Consumo del endpoint get_estados de COPOMEX.

Almacenamiento de estados en base de datos con control de duplicados (idempotencia).

Listado de estados con búsqueda, paginación y ordenamiento (DataTables).

Consulta de municipios por estado mediante COPOMEX.

Interfaz responsive con Bootstrap.

Navbar y footer personalizados.

Instalación y ejecución
Requisitos

PHP 8.0

Composer

MySQL

Servidor local (XAMPP)

Pasos
git clone https://github.com/TU_USUARIO/pruebaAGH-copomex.git
cd pruebaAGH-copomex
composer install


Configurar el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pruebaagh
DB_USERNAME=root
DB_PASSWORD=

COPOMEX_TOKEN=pruebas


Generar clave y migrar:

php artisan key:generate
php artisan migrate
php artisan copomex:sync-estados
php artisan serve


Acceder desde el navegador:

http://127.0.0.1:8000/estados



 Rutas principales

/estados → Listado de estados

/estados/{id}/municipios → Municipios del estado seleccionado

 Autor

Angel Gutiérrez
angelgtzhernandez@gmail.com

5580483911

Licencia

Proyecto desarrollado únicamente con fines de evaluación técnica.