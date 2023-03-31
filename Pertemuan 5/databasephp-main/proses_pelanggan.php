<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartu_id = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $arr_data[]=$_kode; // ? 1
   $arr_data[]=$_nama; // ? 2
   $arr_data[]=$_jk;// 3
   $arr_data[]=$_tmp_lahir;
   $arr_data[]=$_tgl_lahir;
   $arr_data[]=$_email;
   $arr_data[]=$_kartu_id; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,
    email,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $arr_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,
    tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($arr_data);
   }

   header('location:list_pelanggan.php');
?>