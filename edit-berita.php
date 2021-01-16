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
                        <h3 class="box-title">Edit Berita</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <form>
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                    </div><br>
                                    <div class="sm-3">
                                        <label for="exampleInputPassword1" class="form-label">Isi Berita</label>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div><br>
                            </div>
                            <div class="col-sm-6">
                                    <div class="sm-3">
                                        <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" id="" aria-describedby="emailHelp">
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