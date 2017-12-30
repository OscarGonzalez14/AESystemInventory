

<?php
require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{

			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Estados',0,0,'C');
			$this->Ln(20);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

//$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(70,6,'MUNICIPIO',1,1,'C',1);

$pdf->SetFont('Arial','',10);

?>
