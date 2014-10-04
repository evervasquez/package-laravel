<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 04/10/14
 * Time: 01:12 AM
 */

namespace Sonico999\Phpfpdf;
use Anouar\Fpdf\Fpdf;

class Phpfpdf
{
    public function holamundo()
    {
        $fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->SetFont('Arial','B',16);
        $fpdf->Cell(40,10,'Hello World!');
        $fpdf->Output();
        exit;
    }

    public function ctm()
    {
        return 'que pasa ctm';
    }
} 