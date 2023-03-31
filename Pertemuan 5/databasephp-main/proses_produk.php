<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['harga_beli'];
   $_stok = $_POST['stok'];
   $_minstok = $_POST['min_stok'];
   $_jenis = $_POST['jenis'];

   $_proses = $_POST['proses'];

   // array data
   $arr_data[]=$_kode; // ? 1
   $arr_data[]=$_nama; // ? 2
   $arr_data[]=$_harga;// 3
   $arr_data[]= 1.2 * $_harga;
   $arr_data[]=$_stok;
   $arr_data[]=$_minstok;
   $arr_data[]=$_jenis; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,
    min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $arr_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET kode=?,nama=?,harga_beli=?,harga_jual=?,
    stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($arr_data);
   }

   header('location:list_produk.php');
?>