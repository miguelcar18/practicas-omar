Instalación

1.- Crear una base de datos en mysql.
2.- Importar la base de datos que se encuentra en la carpeta database de nombre admgen_larafy.
3.-Remombrar el archivo env.example a .env e ingresar las opciones de usuario y clave de base de datos.
4.- Extraer la carpeta myVendors.
4.- Editar el archivo de sitios disponibles para apache y cambiar la directiva DocumentRoot a la manera siguiente DocumentRoot /var/www/html/admgen-larafy/public.
5.- Reiniciar Apache.
6.- Ingregar a traves del navegador a localhost o la direccion destinada para el servicio.
7. ingresar las credenciales correo:secretadmin@gmail.com y password secretadmin.

-------------------------------------
Instalación usando Migration y Seeders
1.- Descomprimir el archivo myVendors.zip
2.-Crear la base de datos a conectarse
3.- Configurar el archivo .env con los datos a la base de datos a conectarse
4.- Ejecutar el comando php artisan migrate --seed
---------------------------------------
En caso de ejecutar el comando composer install, en lugar de descomprimir el archivo myVendors.zip
ejecutar el comando: composer dump-autoload -o y posteriormente el comando php artisan migrate --seed

