<?php
  require_once('config/koneksi.php');
  session_start();
  if(isset($_SESSION['nik'])){
    $niku = $_SESSION['nik'];
    $namau = $_SESSION['nama'];
    $tmptu = $_SESSION['tmpt'];
    $tglu = $_SESSION['tgl'];
    $hpu = $_SESSION['hp']; 
  }
?>
