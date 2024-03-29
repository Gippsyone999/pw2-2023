<?php 
require_once 'dbkoneksi.php';
?>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    $_id = $_GET['idedit'];

    $sql = "SELECT * FROM pelanggan WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

    $simpan = $_GET['simpan'];

    if (isset($simpan)) 
  { 
      $_kode = $_GET['kode'];
      $_nama = $_GET['nama'];
      $_jk = $_GET['jk'];
      $_tmp_lahir = $_GET['tmp_lahir'];
      $_tgl_lahir = $_GET['tgl_lahir'];
      $_email = $_GET['email'];
      $_kartu_id = $_GET['kartu_id'];
 
      $arr_data[]=$_kode; // ? 1
      $arr_data[]=$_nama; // ? 2
      $arr_data[]=$_jk;// ? 3
      $arr_data[]=$_tmp_lahir;// ? 4
      $arr_data[]=$_tgl_lahir;// ? 5
      $arr_data[]=$_email;// ? 6
      $arr_data[]=$_kartu_id; // ? 7
 

      $arr_data[]=$_GET['idedit'];// ? 8
      $sql = "UPDATE pelanggan SET 
          kode=?,nama=?,jk=?,
          tmp_lahir=?,tgl_lahir=?,
          email=?,kartu_id=? WHERE id=?";

      if(isset($sql)){
        $st = $dbh->prepare($sql);
        $st->execute($arr_data);
    }
  }
?>          
            
<form method="GET" action="">
    <input type="hidden" name="idedit" value='<?= $row['id'] ?>'>
    <input type="hidden" name="simpan" value='simpan'>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?= $row['kode'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?=$row['nama']?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Jenis kelamin</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="jk" name="jk" 
        value="L" type="radio" class="form-control">Laki-laki
        <input id="jk" name="jk" 
        value="P " type="radio" class="form-control">Perempuan
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Tempat lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" value="<?=$row['tmp_lahir']?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Tanggal lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" 
        value="<?=$row['tgl_lahir']?>"
        type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="email" name="email" 
        value="<?=$row['email']?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Kartu</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="kartu_id" name="kartu_id" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option 
              value="<?=$rowjenis['id']?>" 
              <?php if($rowjenis['id'] == $row['kartu_id']) : ?>
                selected
              <?php endif; ?>
            >
            <?=$rowjenis['nama']?>
          </option>
         <?php
            }
        ?>

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
