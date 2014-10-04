<?php
namespace Sonico999\Phpfpdf\Facades;

use Illuminate\Support\Facades\Facade;

class Phpfpdf extends Facade
{
    //creamos esta clase, extendiendola y retornando la cadena de tu paquete
    protected static function getFacadeAccessor()
    {
        return 'phpfpdf';
    }
}