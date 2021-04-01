<?php
// menghubungkan ke file functions.php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa"); // ORDER BY id ASC/DESC >> untuk mengurutkan tabel dari kecil ke besar atau sebaliknya

// tambah cari ketika ditekan
if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus="" placeholder="Masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
            <tr>
                <td><?php echo $i;  ?></td>
                <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
                <td><?php echo $row["nim"] ?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $row['id']; ?>">ubah</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>
