<?php
 function simple_func($sql){
 ## define your database connection credentials
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_database ="egranthalaya";
 $conn = mysqli_connect($db_host,$db_user,$db_password) or die(mysqli_connect_error());
  mysqli_select_db($conn,$db_database)  or die(mysqli_connect_error()) ;
 $result = mysqli_query($conn,$sql) or die(mysqli_connect_error()); 
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
$sql = "(SELECT * FROM add_books)"; 
$pdf_data = simple_func($sql);
foreach($pdf_data as $info){
//$stringData = $info[0];
$stringData ="Title:". $info[1]."\n";
$stringData2 ="Category:". $info[2]."\n";
$stringData1 ="Bib Level:". $info[3]."\n";
$stringData3 ="Material Level:". $info[4]."\n";
$stringData4 ="Language:". $info[5]."\n";
$stringData5 ="Author1:". $info[6]."\n";
$stringData6 ="Author2:". $info[7]."\n";
$stringData7 ="Author:". $info[8]."\n";
$stringData8 ="Year:". $info[9]."\n";
$stringData9 ="Publisher:". $info[10]."\n";
$stringData10 ="Place:". $info[11]."\n";
$stringData11 ="Date:". $info[12]."\n";
$stringData12 ="Subject:". $info[13]."\n";
$stringData13 ="Abstract:". $info[14]."\n"."\n";
fwrite($fh, $stringData);
fwrite($fh, $stringData1);
fwrite($fh, $stringData2);
fwrite($fh, $stringData3);
fwrite($fh, $stringData4);
fwrite($fh, $stringData5);
fwrite($fh, $stringData6);
fwrite($fh, $stringData7);
fwrite($fh, $stringData8);
fwrite($fh, $stringData9);
fwrite($fh, $stringData10);
fwrite($fh, $stringData11);
fwrite($fh, $stringData12);
fwrite($fh, $stringData13);


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
$pdf->PrintChapter(1,'Books Details',$text_file);
$pdf->Output();


