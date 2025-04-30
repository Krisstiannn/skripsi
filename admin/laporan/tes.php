<?php
include "/xampp/htdocs/siatur/library/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// Judul
$pdf->Cell(0, 10, 'SURAT TANDA TERIMA', 0, 1, 'C');
$pdf->Ln(5);

// Data penerima
$penerima = "John Doe";
$tanggal = date('d-m-Y');
$barang = "Laptop Dell Inspiron 14";
$jumlah = 1;
$pengirim = "PT. Contoh Sukses";

$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 7, "Dengan ini menyatakan bahwa:", 0, 'L');
$pdf->Ln(5);
$pdf->MultiCell(0, 7, "Nama Debitur           : $penerima", 0, 'L');
$pdf->MultiCell(0, 7, "Jumlah Pencairan     : $barang", 0, 'L');
$pdf->MultiCell(0, 7, "Jangka Waktu           : $jumlah unit", 0, 'L');
$pdf->MultiCell(0, 7, "Angsuran                 : $pengirim", 0, 'L');
$pdf->Ln(10);
$pdf->MultiCell(0, 7, "Telah Menerima dana kredit usaha rakyat (KUR) sejumlah Rp. 2.000.000 selama jangka waktu daru tanggal - tanggal.", 0, 'L');
$pdf->Ln(15);

// Tanda tangan
$pdf->Cell(90, 7, "Hormat kami,", 0, 0, 'C');
$pdf->Cell(90, 7, "Penerima,", 0, 1, 'C');
$pdf->Ln(20);

$pdf->Cell(90, 7, "(__________________)", 0, 0, 'C');
$pdf->Cell(90, 7, "(__________________)", 0, 1, 'C');

$pdf->Cell(90, 7, "$pengirim", 0, 0, 'C');
$pdf->Cell(90, 7, "$penerima", 0, 1, 'C');

$pdf->Output();
?>