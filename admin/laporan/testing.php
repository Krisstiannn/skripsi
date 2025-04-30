<?php
include "/xampp/htdocs/siatur/library/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();

// Kop Surat
//$pdf->Image('logo.png', 10, 10, 30); // Ganti dengan path gambar logo
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(50);
$pdf->Cell(0, 5, 'Nama Instansi', 0, 1, 'L');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50);
$pdf->Cell(0, 5, 'No. Telp: 0123-456789', 0, 1, 'L');

$pdf->Cell(50);
$pdf->Cell(0, 5, 'Alamat: Jl. Contoh No. 123, Kota Contoh', 0, 1, 'L');
$pdf->Ln(10);
$pdf->Cell(0, 0, '', 'T'); // Garis bawah kop surat
$pdf->Ln(10);

// Judul Laporan
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'LAPORAN DATA ABSENSI', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 7, 'Periode: 01-01-2024 s/d 31-01-2024', 0, 1, 'C');
$pdf->Ln(5);

// Header Tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 7, 'No', 1, 0, 'C');
$pdf->Cell(50, 7, 'Nama Karyawan', 1, 0, 'C');
$pdf->Cell(40, 7, 'Tanggal', 1, 0, 'C');
$pdf->Cell(40, 7, 'Jam Masuk', 1, 0, 'C');
$pdf->Cell(40, 7, 'Jam Keluar', 1, 1, 'C');

// Data Tabel (Contoh)
$pdf->SetFont('Arial', '', 10);
for ($i = 1; $i <= 10; $i++) {
    $pdf->Cell(10, 7, $i, 1, 0, 'C');
    $pdf->Cell(50, 7, "Karyawan $i", 1, 0, 'C');
    $pdf->Cell(40, 7, "2024-01-" . sprintf('%02d', $i), 1, 0, 'C');
    $pdf->Cell(40, 7, '08:00', 1, 0, 'C');
    $pdf->Cell(40, 7, '17:00', 1, 1, 'C');
}

$pdf->Ln(20);

// Kolom Tanda Tangan
$pdf->Cell(130);
$pdf->Cell(60, 7, 'Mengetahui,', 0, 1, 'C');
$pdf->Ln(20);
$pdf->Cell(130);
$pdf->Cell(60, 7, '(__________________)', 0, 1, 'C');

$pdf->Output();
?>