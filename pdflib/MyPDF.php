<?php

require_once 'pdflib/fpdf.php';

class MyPDF extends FPDF
{
    public $var = "hola";
    public $numeroCae = 1;
    public $numeroCaeIni = 1;
    public $numeroCaeFin = 1;
    public $fechaVen = 1;
    public $imagen = '';
    public function Header()
    {
        #$this->SetMargins(20, 20, 20);
        $this->SetXY(5, 10);
        $this->SetFillColor(255, 255, 255);
        $this->SetFont('Arial', '', 10);
        #$this->Cell(60,20,'Header',0,0,'L',1);
        $this->Image($this->imagen, 10, 10, 50, 'JPG');
        $this->Ln(30);
    }
    public function Footer()
    {
        /*$this->SetFont('Arial', '', 10);
        $this->SetXY(40, -40);
        $this->SetFillColor(232, 232, 232);
        $this->Cell(40, 6, 'Nro de CAE', 1, 0, 'L', 1);
        $this->Cell(35, 6, $this->numeroCae, 0, 0, 'L', 0);
        $alto = $this->GetX();
        $this->SetX(115 + 45);
        $this->Cell(40, 6, 'Fecha Vencimiento', 1, 0, 'L', 1);
        $this->Ln();
        $this->SetX(40, -34);
        $this->Cell(40, 6, 'Rango de CAE:', 1, 0, 'L', 1);
        $inicio = number_format((float) $this->numeroCaeIni, 0, '.', '');
        $this->Cell(25, 6, $inicio, 0, 0, 'L', 0);
        $this->Cell(25, 6, 'al', 0, 0, 'L', 0);
        $fin = number_format((float) $this->numeroCaeFin, 0, '.', '');
        $this->Cell(30, 6, $fin, 0, 0, 'L', 0);
        $this->Cell(35, 6, $this->fechaVen, 0, 0, 'L', 0);*/
        $this->SetY(-15);
        $this->Cell(0, 10, $this->PageNo() . '/{nb}', 0, 0, 'C', 1);
    }
    public function AcceptPageBreak()
    {
        #procedimiento que ejecuta cuando se excede el
        #contenido de una pagina
        $this->AddPage();
        $this->SetXY(10, 30);
    }
}
