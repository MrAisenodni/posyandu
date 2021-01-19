<?php require_once('head.php'); ?>
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">BERITA</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Tambah Berita</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <form>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan judul berita">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Link</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan link berita">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Penulis</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan link gambar">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Berita</label>
                                        <input type="date" class="form-control" id="" aria-describedby="emailHelp">
                                    </div><br>
                            </div>
                            <div class="col-sm-6">
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan link gambar">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Isi Berita</label>
                                        <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi Singkat Berita"></textarea>
                                    </div><br>
                                    <hr>
                                    <a href="" class="btn btn-success btn-lg"><i class="fa fa-check-square"></i> Publish</a>
                                    <a href="" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Batal</a>
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