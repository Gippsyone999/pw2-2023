<?php 
require_once 'dbkoneksi.php';
?>

<?php 
   $arr_data[] = $_GET['id'];
   try 
   {
      $sql = "DELETE FROM pelanggan WHERE id = ?";
      $st = $dbh->prepare($sql);
      $st->execute($arr_data);
   } 
   catch(PDOException $e)
   {  
      echo $e->getMessage();
   }
?>