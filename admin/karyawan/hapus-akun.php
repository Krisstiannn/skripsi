<?php
include "/xampp/htdocs/siatur/services/koneksi.php";

$id = $_GET['id'];
$query_hapus = "DELETE FROM users WHERE id = '$id'";
$result_hapus = $conn -> query($query_hapus);

if($result_hapus) {
    echo "<script type= 'text/javascript'>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'datakaryawan.php';
            </script>";
}
?>