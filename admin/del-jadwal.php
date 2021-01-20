<?php
  require_once('../config/koneksi.php');
  if(isset($_GET['kode'])){
    $kode = $_GET['kode'];
    $del = mysqli_query($con, "DELETE FROM jadwal WHERE kode_jadwal='$kode'");
    if($del){
      header('location:jadwal-posyandu.php?stat=delete_success');
    }else{
      header('location:jadwal-posyandu.php?stat=delete_failed');
    }
  }
?>
