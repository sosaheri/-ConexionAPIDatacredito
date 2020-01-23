# Informes de datacredito
Aplicacin desarrollada con el framework Laravel 5.8 para la captura de datos desde Datacredito de experian
### Prerequisitos
El proceso de instalacin esta pensado para servidores linux ya sean dedicados o VPS. en el cula previamente debe haberse 
configurado un stack LAMP se asume que el ambiente es apache

Que necesita tener instalado en su servidor?

```
PHP >= 7.2 
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
BCMath PHP Extension
Ctype PHP Extension 
JSON PHP Extension
OpenSSL PHP
Extension PDO
PHP Extension
Tokenizer PHP
Extension XML PHP Extension
Composer
Git
API Key de Experian
 ```

### Instalacion
Primero cree la base de datos que usara para la aplicación y luego configure su dominio en el webserver segun sea apache o ngix 
Clone el repositorio del proyecto en github: 

```
git clone https://github.com/sosaheri/miem.git

``` 
extraiga el proyecto a la 
ruta de produccion:

 ``` cp -r /var/www/su-dominio/miem/* /var/www/su-dominio/ ``` Copiar .env.example a .env y hacer las 
modificaciones correspondientes según su servidor ``` cp .env.example .env nano .env ``` o ``` Llenar datos de MDP en .env o 
esperar y llenarlos por medio de la interfaz gráfica ``` de permiso a carpeta storage ``` sudo chown -R www-data: storage sudo 
chmod -R 755 storage ``` Guarde y reinicie su servidor ``` sudo service apache2 restart ``` Instale dependencias ``` composer 
install ``` Crear key de aplicación: ``` php artisan key:generate ```
## Ejecute las migraciones
luego de haber creado su base de datos y colocados los datos en .env permita que laravel cree las tablas correspondientes y datos 
básicos ``` php artisan migrate ``` ``` php artisan db:seed
```
