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
    $history = mysqli_query($con, "INSERT INTO `history`(`kode_balita`, `nik`, `tipe`, `jenis_vaksin`, `tgl_imunisasi`) VALUES ('$bayi','$ibu','$tipe','$imun','$tgl')");
    if($add && $history){
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
                                        <select class="form-control" name="imun" id="imun">
                                          <option value="">-- Pilih Jenis Vaksin --</option>
                                          <option value="HB-O (0-7 hari)" id="1">HB-O (0-7 hari)</option>
                                          <option value="BCG" id="1">BCG</option>
                                          <option value="*Polio 1" id="2">*Polio 1</option>
                                          <option value="*DPT-HB-Hib 1" id="2">*DPT-HB-Hib 1</option>
                                          <option value="*Polio 2" id="2">*Polio 2</option>
                                          <option value="*DPT-HB-Hib 2" id="2">*DPT-HB-Hib 2 </option>
                                          <option value="*Polio 3" id="2">*Polio 3</option>
                                          <option value="*DPT-HB-Hib 3" id="2">*DPT-HB-Hib 3</option>
                                          <option value="*Polio 4" id="2">*Polio 4</option>
                                          <option value="*IPV" id="2">*IPV</option>
                                          <option value="Campak" id="1">Campak</option>
                                          <option value="***DPT-HB-Hib Lanjutan" id="4">***DPT-HB-Hib Lanjutan</option>
                                          <option value="****Campak Lanjutan" id="5">****Campak Lanjutan</option>
                                        </select>
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
<script type="text/javascript">
  function pesan() {
    var imun = document.getElementById('imun');
    var dua = document.getElementById('2');
    var tiga = document.getElementById('3');
    var empat = document.getElementById('4');
    var lima = document.getElementById('5');
    if (dua.selected) {
    }
  }
</script>