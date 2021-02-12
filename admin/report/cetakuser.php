
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A4');
$pdf->SetMargins(58, 40, 40);
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(185, 7, 'RICH KARTON HOTELS INDONESIA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(185, 7, 'Invoice Jumlah Pembayaran', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(50, 9, 'CUSTOMER NAME', 1, 0);
$pdf->Cell(27, 9, 'CLASS', 1, 0);
$pdf->Cell(25, 9, 'ROOM', 1, 0);
$pdf->Cell(25, 9, '+BED', 1, 0);
$pdf->Cell(40, 9, 'CHECKIN', 1, 0);
$pdf->Cell(40, 9, 'CHECKOUT', 1, 1);

$pdf->SetFont('Arial', '', 10);

include 'conn/koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM dt_transaksi ORDER BY  id DESC LIMIT 1");
$query = mysqli_query($conn, "SELECT * FROM dt_transaksi WHERE id IN(SELECT MAX(id) FROM dt_transaksi");
$row = mysqli_fetch_assoc($result);
$pdf->Cell(50, 6, $row['namacust'], 1, 0);
$pdf->Cell(27, 6, $row['roomhotel'], 1, 0);
$pdf->Cell(25, 6, $row['nokamar'], 1, 0);
$pdf->Cell(25, 6, $row['bed'], 1, 0);
$pdf->Cell(40, 6, $row['cekin'], 1, 0);
$pdf->Cell(40, 6, $row['cekout'], 1, 0);

$pdf->Cell(10, 7, '', 0, 1);
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 6, 'Harga Kamar' . " " . $row['roomhotel'], 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 5, "Rp." . number_format($row['harga'], 0, ".", "."), 0, 1, 'C');

$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(32, 6, 'Tambah Bed', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(28, 5, $row['bed'] . 'x 50.000', 0, 1, 'C');

$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 6, 'Total Pembayaran Anda', 0, 0, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 5, "Rp." . number_format($row['ttlharga'], 0, ".", "."), 1, 0, 'C');

$pdf->Cell(10, 7, '', 0, 1);
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', '', 13);
$pdf->Cell(180, 6, 'Bawa Bukti Faktur ini Untuk Menunjukan anda Telah Booking', 0, 1, 'C');
$pdf->Cell(180, 6, 'Dan anda bisa membayarnya Cash atau Transfer melalu Bank BRI 2238023803 a/n Rich Karton ', 0, 1, 'C');
$pdf->Cell(180, 6, 'Bila anda transfer bawa bukti transfernya atau bisa Hubungi kepada recepstionist ', 0, 0, 'C');

$pdf->Output();
?>