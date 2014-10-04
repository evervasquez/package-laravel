package-laravel
===============

Tutorial y ejemplo de como crear un package en laravel


Add the service provider to `app/config/app.php`, within the `providers` array.

```php
'providers' => array(
	// ...

	'Anouar\Fpdf\FpdfServiceProvider',
)
