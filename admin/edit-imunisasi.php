<?php require_once('head.php');
if(isset($_GET['kode'])){
  $kd = $_GET['kode'];
  $sql = mysqli_query($con, "SELECT * FROM imunisasi WHERE kode_balita='$kd'");
  $data = mysqli_fetch_array($sql);
  $nikibu = $data['nik'];
  $sql2 = mysqli_query($con, "SELECT * FROM balita inner join user on user.nik=balita.nik");
  $data2 = mysqli_fetch_array($sql2);
}

if(isset($_POST['tambah'])){
  //BAYI
  // $ibu = $_POST['ibu'];
  // $bayi = $_POST['bayi'];
  $imun = $_POST['imun'];
  $tgl = $_POST['tgl'];

  $add = mysqli_query($con, "UPDATE imunisasi SET jenis_imunisasi='$imun',tgl_imunisasi='$tgl' where kode_balita='$kd'");
  if($add){
    header('location:imunisasi.php?stat=update_success');
  }else{
    header('location:imunisasi.php?stat=update_failed');
  }
}
?>
     <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">CATATAN IMUNISASI</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Catatan Imunisasi</h3>
                        <div class="row">
                          <?php require_once('alert.php'); ?>
                            <div class="col-sm-6">
                                <h4 style="text-align: center;">Biodata Balita</h4>
                                <form method="post">
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Ibu</label>
                                        <input type="text" name="" class="form-control" id="" readonly value="<?= $data2['nama'] ?>">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Balita</label>
                                        <input type="text" name="" class="form-control" id="" readonly value="<?= $data2['nama_balita']." | ".$data2['nama'] ?>">
                                    </div><br>
                            </div>
                            <div class="col-sm-6"><br><br>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Imunisasi</label>
                                        <input type="text" name="imun" class="form-control" id="" value="<?= $data['jenis_imunisasi'] ?>">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Imunisasi</label>
                                        <input type="date" name="tgl" class="form-control" id="" value="<?= $data['tgl_imunisasi'] ?>">
                                    </div><br>
                                    <hr>
                                    <button name="tambah" class="btn btn-success btn-lg"><i class="fa fa-check-square"></i> Simpan</button>
                                    <a href="imunisasi.php" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
<?php require_once('footer.php'); ?>