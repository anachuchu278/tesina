<?php
namespace App\Libraries;
require_once APPPATH.'/libraries/tcpdf/tcpdf.php';
class PDFEstandar extends TCPDF {
    public $titulo_reporte = "";
    public function __construct(){
        parent::__construct();
    }
    public function Header_Reporte(){
        $this->SetFont('cournier', 'B', '10');
        $this->Cell(0, 5, $this->titulo_reporte, 0, 1, 'C');
        }
    public function Footer(){
        $this->SetFont('cournier', 'B', '6');
        $this->Cell(20, 5, date("d/m/y H:i:s"), 0, false, 'L', 0, '', 0, false, 'T', 'M');
    }
}
