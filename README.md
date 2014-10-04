##Tutorial y ejemplo de un package para Laravel
===============

Tutorial y ejemplo de como crear un package en laravel


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
