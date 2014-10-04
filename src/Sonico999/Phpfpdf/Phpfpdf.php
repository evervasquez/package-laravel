<?php

namespace Sonico999\Phpfpdf;
use Anouar\Fpdf\Fpdf;

/*
 * aquí ponemos las funciones que serán llamadas al implementar el paquete
 * */
class Phpfpdf
{

    //función de ejemplo para llamar de modo estatico con el facade
    public function holamundo()
    {
        $fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->SetFont('Arial','B',16);
        $fpdf->Cell(40,10,'Hello World!');
        $fpdf->Output();
        exit;
    }

    //funcion 2
    public function ctm()
    {
        return 'que pasa ctm';
    }
} 