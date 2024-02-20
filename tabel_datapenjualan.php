<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Penjualan</title>
</head>

<body>
    <header>
        <h3>Tabel Data Penjualan</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Penjualan</th>
            <th>Tgl Penjualan</th>
            <th>Total Harga</th>
            <th>Id Detail</th>
            <th>Id Produk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM penjualan";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$penjualan['id_penjualan']."</td>";
            echo "<td>".$penjualan['tgl_penjualan']."</td>";
            echo "<td>".$penjualan['total_harga']."</td>";
            echo "<td>".$penjualan['id_detail']."</td>";
            echo "<td>".$penjualan['id_produk']."</td>";
           
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    
