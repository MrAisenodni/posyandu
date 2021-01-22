<?php require_once('head.php');
if(isset($_POST['tambah'])){
  //BAYI
  $ibu = $_POST['ibu'];
  $bayi = $_POST['bayi'];
  $imun = $_POST['imun'];
  $tgl = $_POST['tgl'];

  if($ibu==null || $bayi==null || $imun==null || $tgl==null) {
    header('location:pendaftaran-imunisasi.php?stat=input_null');
  } else {
    $add = mysqli_query($con, "INSERT into imunisasi VALUES('$bayi','$ibu','$imun','$tgl')");
    if($add){
      header('location:imunisasi.php?stat=input_success');
    }else{
      header('location:imunisasi.php?stat=input_failed');
    }

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
                        <h3 class="box-title">Pendaftaran Imunisasi</h3>
                        <div class="row">
                          <?php require_once('alert.php'); ?>
                            <div class="col-sm-6">
                                <h4 style="text-align: center;">Biodata Balita</h4>
                                <form method="post">
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Ibu</label>
                                        <select class="form-control" name="ibu">
                                          <option value="">--Pilih Nama Ibu--</option>
                                          <?php $sql = mysqli_query($con, "SELECT * FROM user WHERE akses='user'");
                                          while($datai = mysqli_fetch_array($sql)){?>
                                          <option value="<?= $datai['nik']?>"><?= $datai['nama'] ?></option>
                                          <?php } ?>
                                        </select>
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Balita</label>
                                        <select class="form-control" name="bayi">
                                          <option value="">--Pilih Nama Balita--</option>
                                          <?php $sql = mysqli_query($con, "SELECT * FROM balita inner join user on user.nik=balita.nik");
                                          while($datab = mysqli_fetch_array($sql)){?>
                                          <option value="<?= $datab['kode_balita']?>"><?php echo $datab['nama_balita']." | ".$datab['nama'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div><br>
                            </div>
                            <div class="col-sm-6"><br><br>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Imunisasi</label>
                                        <input type="text" name="imun" class="form-control" id="">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Imunisasi</label>
                                        <input type="date" name="tgl" class="form-control" id="">
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
