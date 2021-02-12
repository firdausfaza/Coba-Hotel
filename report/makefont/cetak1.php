
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
$pdf->SetMargins(40,40,40);
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(225,7,'RICH KARTON HOTELS INDONESIA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(225,7,'REPORT INCOME RICH KARTON HOTELS INDONESIA',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,9,'NO',1,0);
$pdf->Cell(40,9,'CUSTOMER NAME',1,0);
$pdf->Cell(27,9,'CLASS',1,0);
$pdf->Cell(25,9,'ROOM',1,0);
$pdf->Cell(35,9,'CHECKIN',1,0);
$pdf->Cell(35,9,'CHECKOUT',1,0);
$pdf->Cell(40,9,'PAYMENT',1,1);
 
$pdf->SetFont('Arial','',10);
 
include 'conn.php';
$result = mysqli_query($koneksi, "SELECT * FROM dt_verify");
$i = 1;
$ttl = 0;
while ($row = mysqli_fetch_array($result)){
$ttl += $row["ttlharga"];
$harga;
$ttlharga =$row["ttlharga"];
    $pdf->Cell(20,6,$i,1,0);
    $pdf->Cell(40,6,$row['namacust'],1,0);
    $pdf->Cell(27,6,$row['roomhotel'],1,0);
    $pdf->Cell(25,6,$row['nokamar'],1,0); 
    $pdf->Cell(35,6,$row['cekin'],1,0);
    $pdf->Cell(35,6,$row['cekout'],1,0);
    $pdf->Cell(40,6,"Rp. ". number_format($ttlharga,0,".",  "."),1,1);
 $i++;
}
 
    $pdf->Cell(182,6,'JUMLAH PEMASUKAN',1,0);
    $pdf->Cell(40,6,"Rp.".number_format($ttl,0,".", "."),1,0);

$pdf->Output();
?>