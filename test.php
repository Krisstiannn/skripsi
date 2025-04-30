<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "test_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Insert data
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    $conn->query($sql);
}

// Update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET nama='$nama', email='$email' WHERE id=$id";
    $conn->query($sql);
}

// Delete data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";
    $conn->query($sql);
}

// Ambil data dari database
$result = $conn->query("SELECT * FROM users");

// Ambil data untuk edit
$editData = ["id" => "", "nama" => "", "email" => ""];
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM users WHERE id=$id");
    if ($res->num_rows > 0) {
        $editData = $res->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD Sederhana</title>
</head>

<body>
    <h2>CRUD PHP Native</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $editData['id'] ?>">
        <input type="text" name="nama" value="<?= $editData['nama'] ?>" placeholder="Nama" required>
        <input type="email" name="email" value="<?= $editData['email'] ?>" placeholder="Email" required>
        <?php if ($editData['id']): ?>
        <button type="submit" name="update">Update</button>
        <?php else: ?>
        <button type="submit" name="submit">Tambah</button>
        <?php endif; ?>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="?edit=<?= $row['id'] ?>">Edit</a>
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>