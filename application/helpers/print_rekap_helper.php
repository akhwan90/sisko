<?php
define('FPDF_FONTPATH', 'font/');
require('fpdf.php');

class reportProduct extends FPDF
{
  var $widths;
  var $aligns;

function SetWidths($w)
{
  $this->widths=$w;
}

function SetAligns($a)
{
  $this->aligns=$a;
}

function Row($data)
{
  $nb=0;
  for($i=0;$i<count($data);$i++)
    $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
  $h=(4*$nb);
  $this->CheckPageBreak($h);
  for($i=0;$i<count($data);$i++)
  {
   $w=$this->widths[$i];
   $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
   $x=$this->GetX();
   $y=$this->GetY();
   $this->Rect($x,$y,$w,$h);
   $this->MultiCell($w,4,$data[$i],0,$a);
   $this->SetXY($x+$w,$y);
  }
  $this->Ln($h);
}

function CheckPageBreak($h)
{
  if($this->GetY()+$h>$this->PageBreakTrigger)
  $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
  $cw=&$this->CurrentFont['cw'];
  if($w==0)
   $w=$this->w-$this->rMargin-$this->x;
  $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
  $s=str_replace("\r",'',$txt);
  $nb=strlen($s);
  if($nb>0 and $s[$nb-1]=="\n")
   $nb--;
  $sep=-1;
  $i=0;
  $j=0;
  $l=0;
  $nl=1;
  while($i<$nb)
  {
   $c=$s[$i];
   if($c=="\n")
   {
    $i++;
    $sep=-1;
    $j=$i;
    $l=0;
    $nl++;
    continue;
   }
   if($c==' ')
    $sep=$i;
   $l+=$cw[$c];
   if($l>$wmax)
   {
    if($sep==-1)
    {
     if($i==$j)
      $i++;
    }
    else
     $i=$sep+1;
    $sep=-1;
    $j=$i;
    $l=0;
    $nl++;
   }
   else
   $i++;
 }
 return $nl;
}

function P_Header() {
	$this->Ln(2);
	$this->SetFont('Arial', 'B', 14);
	//$this->image('./asset/images/logo-kobar.jpg',19,4,25,30);
	//$this->Cell(220,-7,'PEMERINTAH KABUPATEN KOTAWARINGIN BARAT',0,1,'C');
	//$this->Cell(220,17,'DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA',0,1,'C');
	$this->SetFont('Times', 'B', 17);
	$this->Cell(220,-5,'SMA SURYA SELATAN SAMBUARA',0,1,'C');
	$this->SetFont('Arial', 'B', 9);
	$this->Cell(220,14,'Kecamatan Essang Selatan, Kabupaten Kepulauan Talaud',0,1,'C');
	$this->Cell(220,-6,'Provinsi Sulawesi Utara',0,1,'C');
	//$this->Cell(220,14,'http://www.smkn1pbanteng.sch.id/ - E-Mail : smkn1pbanteng@gmail.com',0,1,'C');
	$this->SetLineWidth(1);
	$this->Line(10, 23, 200, 23);
	$this->SetLineWidth(0.2);
	$this->Line(10, 24.5, 200, 24.5);
}

function L_Header() {
	$this->Ln(2);
	$this->SetFont('Arial', 'B', 14);
	//$this->image('./asset/images/logo-kobar.jpg',59,5,25,30);
	//$this->Cell(290,-7,'SMA SURYA SELATAN SAMBUARA',0,1,'C');
	//$this->Cell(290,17,'DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA',0,1,'C');
	$this->SetFont('Times', 'B', 17);
	$this->Cell(290,-5,'SMA SURYA SELATAN SAMBUARA',0,1,'C');
	$this->SetFont('Arial', 'B', 9);
	$this->Cell(290,14,'Kecamatan Essang Selatan, Kabupaten Kepulauan Talaud',0,1,'C');
	$this->Cell(290,-6,'Provinsi Sulawesi Utara',0,1,'C');
	//$this->Cell(290,14,'http://www.smkn1pbanteng.sch.id/ - E-Mail : smkn1pbanteng@gmail.com',0,1,'C');
	$this->SetLineWidth(1);
	$this->Line(10, 23, 290, 23);
	$this->SetLineWidth(0.2);
	$this->Line(10, 24.5, 290, 24.5);
}

function Footer()
{
	$this->SetY(-10);
	$this->SetFont('Arial','',8);
	$this->Cell(0,2,'Report',0,0,'R');
}

public function setKriteria($i)
{
  $this->kriteria=$i;
}

public function getKriteria()
{
  return $this->kriteria;
}

public function setNama($n)
{
  $this->nama=$n;
}

public function getNama()
{
  return $this->nama;
}

public function setDataset($n)
{
  $this->dataset=$n;
}

public function getDataset()
{
  return $this->dataset;
}

}

?>