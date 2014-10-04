##Tutorial y ejemplo de un package para Laravel
===============

Tutorial y ejemplo de como crear un package en laravel

##TUTORIAL
####Paso 1
Para crear un nuevo package para laravel se tiene que correr el comando de artisan:
	
	php artisan workbench vendor/package --resource

*Donde vendor tiene que ser reemplazado por tu nombre y package el nombre del paquete.
Continuar con el tutorial de la pagina http://culttt.com/2013/06/24/creating-a-laravel-4-package


###Instalación
Agregar el service provider a `app/config/app.php`, escribir dentro del array `providers`.

```php
'providers' => array(
	// ...

	'Sonico999\Phpfpdf\PhpfpdfServiceProvider',
)
```

Despúes, agregar el alias a `app/config/app.php`, escribir dentro del array `aliases`.

```php
'aliases' => array(
	// ...

	'PhpFpdf'   => 'Sonico999\Phpfpdf\Phpfpdf',
)
```
