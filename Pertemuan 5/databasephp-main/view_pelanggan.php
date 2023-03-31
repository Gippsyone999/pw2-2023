<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Jenis kelamin</td><td><?=$row['jk']?></td></tr>
        <tr>   <td>Tempat lahir</td><td><?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Tanggal lahir</td><td><?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Email</td><td><?=$row['email']?></td></tr>
        <tr>   <td>Kartu</td><td><?=$row['kartu_id']?></td></tr>
    </tbody>
</table>