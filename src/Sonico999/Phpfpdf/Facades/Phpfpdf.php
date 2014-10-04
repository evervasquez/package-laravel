<?php
namespace Sonico999\Phpfpdf\Facades;

use Illuminate\Support\Facades\Facade;

class Phpfpdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phpfpdf';
    }
}