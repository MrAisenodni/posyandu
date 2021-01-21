<?php require_once('head.php');

if(isset($_GET['kode'])){
  $kd = $_GET['kode'];
  $sql = mysqli_query($con, "SELECT * from perkembangan_balita where kode_balita='$kd'");
  $data = mysqli_fetch_array($sql);
  $kd = $_GET['kode'];
  $sql = mysqli_query($con, "SELECT * from balita where kode_balita='$kd'");
  $data2 = mysqli_fetch_array($sql);
  $nikibu = $data['nik'];
  $sql2 = mysqli_query($con, "SELECT * from user where nik='$nikibu'");
  $data3 = mysqli_fetch_array($sql2);
}

if(isset($_POST['tambah'])){
  $ibu = $_POST['ibu'];
  $bayi = $_POST['bayi'];
  $tb = $_POST['tb'];
  $bb = $_POST['bb'];
  $tgl = $_POST['tgl'];

  if($ibu==null || $bayi==null || $tb==null || $bb==null || $tgl==null) {
    header('location:edit-perkembangan-balita.php?stat=input_null');
  } else {
    $add = mysqli_query($con, "UPDATE jadwal SET ibu='$ibu',bayi='$bayi',bb='$bb',bb='$bb',tgl='$tgl' where kode_balita='$kode'");
    if($add){
      header('location:perkembangan-balita.php?stat=input_success');
    }else{
      header('location:perkembangan-balita.php?stat=input_failed');
    }
  }
}
?>
       <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">PERKEMBANGAN BALITA</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Perkembangan Balita</h3>
                        <div class="row">
                          <?php require_once('alert.php'); ?>
                            <div class="col-sm-6">
                                <h4 style="text-align: center;">Biodata Balita</h4>
                                <form method="post">
                                  <div class="sm-3">
                                      <label for="exampleInputEmail1" class="form-label">Nama Ibu</label>
                                      <input type="text" name="tb" class="form-control" id="" readonly value="<?= $data['nama'] ?>">
                                  </div><br>
                                  <div class="sm-3">
                                      <label for="exampleInputPassword1" class="form-label">Nama Balita</label>
                                      <input type="number" name="tb" class="form-control" id="" readonly value="<?= $data['nama_balita']." | ".$data2['nama'] ?>">
                                  </div><br>
                            </div>
                            <div class="col-sm-6"><br><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Tinggi Badan (Cm)</label>
                                        <input type="number" name="tb" class="form-control" id="" value="<?= $data['tb'] ?>">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Berat Badan (Kg)</label>
                                        <input type="number" name="bb" class="form-control" id="" value="<?= $data['bb'] ?>">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Periksa</label>
                                        <input type="date" name="tgl" class="form-control" id="" value="<?= $data['tgl'] ?>">
                                    </div><br>
                                    <hr>
                                    <button name="tambah" class="btn btn-success btn-lg"><i class="fa fa-check-square"></i> Simpan</button>
                                    <a href="perkembangan-balita.php" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Batal</a>
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