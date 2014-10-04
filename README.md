##Tutorial y ejemplo de un package para Laravel
===============

Tutorial y ejemplo de como crear un package en laravel


###Instalación
Agregar el service provider a `app/config/app.php`, escribir dentro del `providers`.

```php
'providers' => array(
	// ...

	'Anouar\Fpdf\FpdfServiceProvider',
)

Despúes, agregar el alias a `app/config/app.php`, dentro del array `aliases`.

```php
'aliases' => array(
	// ...

	'Fpdf'	  => 'Anouar\Fpdf\Fpdf',
)
```
