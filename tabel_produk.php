<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data produk</title>
</head>

<body>
    <header>
        <h3>Tabel Data Produk</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th> Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$produk['id_produk']."</td>";
            echo "<td>".$produk['nama_produk']."</td>";
            echo "<td>".$produk['harga']."</td>";
            echo "<td>".$produk['stok']."</td>";
        

            echo "<td>";
            echo "<a href='edit.php=".$produk['id']."'>Edit</a> | ";
            echo "<a href='delete.php=".$produk['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    
