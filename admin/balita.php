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
                        <h3 class="box-title">Tabel Balita</h3>
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="pendaftaran-balita.php" class="btn btn-success"><i class="fa fa-plus-circle"> </i> Pendaftaran Balita</a>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Pencarian" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Balita</th>
                                        <th>Imunisasi</th>
                                        <th>Berat Badan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>317505089160008</td>
                                        <td>Azka</td>
                                        <td>HB-D (0-7 hari)</td>
                                        <td>3,5</td>
                                        <td>
                                            <a href="edit-balita.php" class="btn btn-warning"><i class="fa fa-pencil-square"></i> Edit</a>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
<?php require_once('footer.php'); ?>