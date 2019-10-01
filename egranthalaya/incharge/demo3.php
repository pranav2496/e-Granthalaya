<?php
 function simple_func($sql){
 ## define your database connection credentials
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_database ="egranthalaya";
 $conn = mysqli_connect($db_host,$db_user,$db_password) or die(mysqli_connect_error());
  mysqli_select_db($conn,$db_database)  or die(mysqli_connect_error_error()); 
 $result = mysqli_query( $conn,$sql) or die(mysqli_connect_error()); 
 ## And we display the results 
 while($row = mysqli_fetch_array( $result )) 
{
$data[] = $row;
}
## we return the data
 return $data;
}
$text_file = "testFile.txt";
$fh = fopen($text_file, 'w') or die("can't open file");
$sql = "(SELECT * FROM add_return_renew)"; 
$pdf_data = simple_func($sql);
foreach($pdf_data as $info){
//$stringData = $info[0];
$stringData ="Title:". $info[1].'Title'."\n";
$stringData2 ="Member No.:". $info[2].'Member No'."\n";
$stringData1 ="Issue Date:". $info[3].'Issue date'."\n";
$stringData3 ="Issue Time:". $info[4].'Issue Time'."\n";
$stringData4 ="Returning Date:". $info[5].'Returning Date'."\n";
$stringData5 ="returning Time:". $info[6].'Returning Time'."\n"."\n";

fwrite($fh, $stringData);
fwrite($fh, $stringData1);
fwrite($fh, $stringData2);
fwrite($fh, $stringData3);
fwrite($fh, $stringData4);
fwrite($fh, $stringData5);


}
fclose($fh);
## check if myFile exist
require('fpdf.php');
class PDF extends FPDF
{
function Header()
{
//global $title;
// Arial bold 15
//$this->SetFont('Arial','B',15);
// Calculate width of title and position
//$w = $this->GetStringWidth($title)+6;
//$this->SetX((210-$w)/2);
// Colors of frame, background and text
//$this->SetDrawColor(0,80,180);
//$this->SetFillColor(230,230,0);
//$this->SetTextColor(220,50,50);
// Thickness of frame (1 mm)
//$this->SetLineWidth(1);
// Title
//$this->Cell($w,9,1,1,'C',true);
// Line break
//$this->Ln(10);
}
/*function Footer()
{
// Position at 1.5 cm from bottom
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','I',8);
// Text color in gray
$this->SetTextColor(128);
// Page number
$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}*/
function ChapterTitle($num, $label)
{
// Arial 12
$this->SetFont('Arial','',12);
// Background color
$this->SetFillColor(200,220,255);
// Title
$this->Cell(0,6,"$label",0,1,'L',true);
// Line break
$this->Ln(4);
}
function ChapterBody($file)
{
// Read text file
$txt = file_get_contents($file);
// Times 12
$this->SetFont('Times','',12);
// Output justified text
$this->MultiCell(0,5,$txt);
// Line break
$this->Ln();
// Mention in italics
$this->SetFont('','I');
//$this->Cell(0,5,'(end of excerpt)');
}
function PrintChapter($num, $title, $file)
{
$this->AddPage();
$this->ChapterTitle($num,$title);
$this->ChapterBody($file);
}
}
$pdf = new PDF();
$title = '';
//$pdf->SetTitle($title);
$pdf->SetAuthor('Jules Verne');
$pdf->PrintChapter(1,'Member Returning /Issuing Details',$text_file);
$pdf->Output();