<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: tahoma, arial}
        table {border-collapse: collapse; width: 100%; margin-bottom: 20px;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
        th {background: #FFC0CB; font-size: 12px; border-color: #B0B0B0}
        h1, h3 {text-align: center}
    </style>
</head>
<body>
    <h1>Sistem Penjualan Laundry Bersih Selalu</h1>
    <h3>Tabel Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal_Lahir</th>
                <th>Nomor_Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php'; 
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);
            while($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

        </tbody>
    </table>

    <h3>Tabel Pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nomor_Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pegawai';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Jabatan']; ?></td>
                <td><?php echo $row['Nomor_Telepon']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Transaksi</th>
                <th>Id_Pelanggan</th>
                <th>Id_Pegawai</th>
                <th>Tanggal_Transaksi</th>
                <th>Total_Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Transaksi']; ?></td>
                <td><?php echo $row['ID_Pelanggan']; ?></td>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['Tanggal_Transaksi']; ?></td>
                <td><?php echo $row['Total_Biaya']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Layanan</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Layanan</th>
                <th>Nama_Layanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM layanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Layanan']; ?></td>
                <td><?php echo $row['Nama_Layanan']; ?></td>
                <td><?php echo $row['Harga']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Detail Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>Id_Transaksi</th>
                <th>Id_layanan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM detail_transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Transaksi']; ?></td>
                <td><?php echo $row['ID_Layanan']; ?></td>
                <td><?php echo $row['Jumlah']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>