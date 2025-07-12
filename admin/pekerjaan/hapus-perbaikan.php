<?php
include "/xampp/htdocs/nsp/services/koneksi.php";

$id = $_GET['id_perbaikan'];
$hapus = "DELETE FROM perbaikan WHERE id_perbaikan = '$id'";
$result = $conn->query($hapus);

if($result) {
    echo "<script type= 'text/javascript'>
                alert('Data Berhasil di Hapus!');
                document.location.href = 'perbaikan.php';
            </script>";
}
?>