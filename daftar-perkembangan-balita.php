<?php require_once('head.php'); ?>
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">BALITA</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Tambah Pendaftaran Balita</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 style="text-align: center;">Biodata Balita</h4>
                                <form>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" disabled>
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Balita</label>
                                        <input type="text" class="form-control" id="" disabled>
                                    </div><br>
                            </div>
                            <div class="col-sm-6"><br><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Tinggi Badan (Cm)</label>
                                        <input type="number" class="form-control" id="">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Berat Badan (Kg)</label>
                                        <input type="number" class="form-control" id="">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Timbang</label>
                                        <input type="date" class="form-control" id="">
                                    </div><br>
                                    <hr>
                                    <a href="" class="btn btn-success btn-lg"><i class="fa fa-check-square"></i> Simpan</a>
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