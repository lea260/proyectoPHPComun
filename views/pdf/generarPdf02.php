<?php

#require('pdf/fpdf.php');  // MAKE SURE YOU HAVE THIS LINE
require_once 'pdflib/MyPDF.php';
header("Content-type:application/pdf");
$imagen = "public/imagenes/logo.jpg";
$nombre = 'Desarrollos S.A';
$ruc = '000 111 222 333';
$direccion = 'falsa 123 - Las Piedras';
$telefono = '099 111 111';
$email = 'php@mail.com.uy';
// penas

#$var = glob("efact_111a119_*.xml");#efact_111a119_20180514.xml

#var_dump($namespaces); //solo para ver los namespace
//$data = $xml->children($namespaces['ns0'])->children($namespaces['ns0']);
$detalle = "compra tecnolgia"; # detalle compra
//$nom = $data->Detalle->Item[1]->NomItem;

$tipoCFE = "factura";
$cabezalDoc = "RUT COMPRADOR";
$docNumero = "111 111 111 111";
$docRecep = "RUC: ";
$formaPago = "contado";
$moneda = "UYU";

/* datos que llegan como parametros*/
$rucEmpresa = "000 000 000 000";
$rucEmisor = " Otro RUC";
$nombreCLi = "Juan";
$domicilio = "calle falsa 123 ─ Sprinfield";
//$array =  (array) $items;
#var_dump($detalle);
#echo $items[0]->Item->NroLinDet;

#echo $data->CAEData->FecVenc;
//header
$pdf = new MyPDF('P', 'mm', 'A4');
//$pdf->var= ' duro nuevo valor';
$pdf->imagen = $imagen;
$fecha = date("Y-m-d H:i:s");
//$fechaAuxFormat = date_format($fechaAux, "d/m/Y");
// $fechaAuxFormat = '';
$pdf->AliasNbPages(); #genera alias nb
$pdf->SetAutoPageBreak(true, 26);
$pdf->AddPage();
$pdf->SetMargins(10, 10, 10);
$pdf->SetFont('Arial', '', 10);
$alto = $pdf->GetPageHeight();
$ancho = $pdf->GetPageWidth();
#$pdf->SetXY(10,10);

#
$pdf->SetFillColor(255, 255, 255);
$pdf->SetXY(10, 30);
$pos = $pdf->Cell(60, 6, $nombre, 0, 1, 'L', 0);
$pdf->SetX(10);
$pos = $pdf->Cell(60, 6, $rucEmisor, 0, 1, 'L', 0);
$pdf->SetX(10);
$pos = $pdf->Cell(60, 6, $direccion, 0, 1, 'L', 0);
$pdf->SetX(10);
$pos = $pdf->Cell(60, 6, $telefono, 0, 1, 'L', 0);
$pdf->SetX(10);
$pos = $pdf->Cell(60, 6, $email, 0, 1, 'L', 0);

$pdf->SetXY(70, 10); #y=50,50);#y=50
$pdf->SetFillColor(232, 232, 232);
#quedan 130
$pdf->Cell(130 / 3, 6, 'TIPO DOCUMENTO', 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, 'FORMA DE PAGO', 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, 'MONDEDA', 1, 0, 'L', 1);
$pdf->SetFillColor(232, 232, 232);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(130 / 3, 6, $tipoCFE, 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, $formaPago, 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, $moneda, 1, 0, 'L', 1);
$pdf->SetFillColor(232, 232, 232);
#quedan 130
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->Cell(130 / 3, 6, 'SERIE', 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, 'NUMERO', 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, 'FECHA', 1, 0, 'L', 1);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->SetFillColor(255, 255, 255);
$serie = 25;
$numero = 26;
$cabezalDoc = "Cabecera";
$dentroCabezera = "25";
$pdf->Cell(130 / 3, 6, $serie, 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, $numero, 1, 0, 'L', 1);
$pdf->Cell(130 / 3, 6, $fecha, 1, 0, 'L', 1);
$pdf->SetFillColor(232, 232, 232);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->Cell(130, 6, $cabezalDoc, 1, 0, 'C', 1);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(130, 6, $dentroCabezera, 1, 0, 'L', 1);
//$pdf->Ln();
$pdf->SetFillColor(232, 232, 232);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->Cell(130, 6, "NOMBRE", 1, 0, 'C', 1);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(130, 6, $nombreCLi, 1, 0, 'L', 1);
$pdf->SetFillColor(232, 232, 232);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->Cell(130, 6, "DOMICILIO", 1, 0, 'C', 1);
$pdf->Ln();
$pdf->SetX(70); #y=50,50);#y=50
$pdf->SetFillColor(255, 255, 255);
$ciudadRec = "ciudad";
$pdf->Cell(130, 6, $ciudadRec, 1, 0, 'L', 1);
$pdf->GetY();
$pdf->Ln(10);
#cabezal detalle.
$pdf->SetFillColor(232, 232, 232);
$pdf->Cell(35, 6, "CODIGO", 1, 0, 'L', 1);
$pdf->Cell(95, 6, "DESCRIPCION", 1, 0, 'L', 1);
$pdf->Cell(15, 6, "CANT", 1, 0, 'L', 1);
$pdf->Cell(20, 6, "PRECIO", 1, 0, 'L', 1);
$pdf->Cell(25, 6, "SUBTOTAL", 1, 0, 'L', 1);
$pdf->SetFillColor(255, 255, 255);

$items = [];
$totales = 0;
for ($i = 0; $i < 50; $i++) {
    $item = new stdClass;
    $item->codigo = "cod25";
    $item->descripcion = "desc";
    $item->cantidad = 5;
    $item->precio = 10;
    $item->subtotal = $item->cantidad * $item->precio;
    $totales += $item->subtotal;
    $items[] = $item;
}

foreach ($items as $key => $item) {
    if (strtolower($item->codigo) != "redondeo") {
        $pdf->Ln();
        // "CODIGO",35
        $pdf->Cell(35, 6, $item->codigo, 1, 0, 'L', 1);
        // DESCRIPCION,95
        $pdf->Cell(95, 6, $item->descripcion, 1, 0, 'L', 1);
        $cant = (float) $item->cantidad;
        $cantFormat = number_format($cant, 0, '.', '');
        //$cantFormat2 = (int) $cantFormat;
        // cant,15
        $pdf->Cell(15, 6, $cantFormat, 1, 0, 'L', 1);
        $precioFormat = number_format((float) $item->precio, 2, '.', '');
        // precio,20
        $pdf->Cell(20, 6, $precioFormat, 1, 0, 'L', 1);
        $cant = (float) $item->cantidad;
        $precio = (float) $item->precio;
        // DS
        $ds = (float) $item->subtotal;
        $dsF = number_format($ds, 2, '.', '');
        $importe = (float) $item->subtotal;
        $importeFormat = number_format($importe, 2, '.', '');
        // subtotal, 25
        $pdf->Cell(25, 6, $importeFormat, 1, 0, 'L', 1);
    }
}

#totales.
$importeNeto = (float) $totales;
$importeNetoF = number_format($totales, 2, '.', '');
$totalIva = (float) $totales;
$totalIvaF = number_format($totalIva, 2, '.', '');
$montoTotal = (float) $totales;
$montoTotalF = number_format($totales, 2, '.', '');
$pdf->Ln();
$alto = $pdf->GetY();
$pdf->SetXY(10, $alto + 6);
$pdf->SetFillColor(232, 232, 232);
$pdf->Cell(35, 6, "Sub total 10%", 1, 0, 'L', 1);
$pdf->Cell(35, 6, "Total IVA 10%", 1, 0, 'L', 1);
$pdf->Cell(35, 6, "Subtotal IVA 22%", 1, 0, 'L', 1);
$pdf->Cell(35, 6, "Total IVA 22%", 1, 0, 'L', 1);
$pdf->SetFont('Arial', 'B', 10);
# imprime el total
$pdf->Cell(25, 12, "TOTAL", "LTB", 0, 'L', 1);
$pdf->Cell(25, 12, $montoTotalF, "RTB", 0, 'R', 1);
$pdf->SetFont('Arial', '', 10);
$pdf->Ln();
$y = $pdf->GetY();
$pdf->SetY($y - 6);
$pdf->Cell(35, 6, "-", 0, 0, 'L', 0);
$pdf->Cell(35, 6, "-", 0, 0, 'L', 0);
$pdf->Cell(35, 6, $importeNetoF, 0, 0, 'L', 0);
$pdf->Cell(35, 6, $totalIvaF, 0, 0, 'L', 0);
$pdf->Output('I');
