<?php
include "/xampp/htdocs/siatur/services/koneksi.php";

$id = $_GET['id'];
$query_hapusData = "DELETE FROM pelanggan WHERE id = '$id'";
$result_hapusData = $conn->query($query_hapusData);

if ($result_hapusData) {
    echo "<script type= 'text/javascript'>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'pelanggan.php';
            </script>";
}
?>