<?php require_once('head.php');
date_default_timezone_set('Asia/Jakarta');
$hariini = date('Y-m-d');
$sql = mysqli_query($con,"SELECT count(kode_balita) as jumlah from balita");
$cbayi = mysqli_fetch_array($sql);

$sql1 = mysqli_query($con,"SELECT * from jadwal");
$jadwal = mysqli_fetch_array($sql1);
$bulan = array(
  'Januari',
  'Februari',
  'Maret',
  'April',
  'Mei',
  'Juni',
  'Juli',
  'Agustus',
  'September',
  'Oktober',
  'November',
  'Desember',
);
?>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E"
                                        class="linea-icon linea-basic"></i>
                                    <h4 class="text-muted vb">JUMLAH BALITA</h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger"><?= $cbayi['jumlah']?></h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic"
                                        data-icon="&#xe01b;"></i>
                                    <h4 class="text-muted vb">JADWAL</h4>
                                </div><br><br>
                                <h5 class="text-muted vb"><?php if($jadwal['tanggal']==null){echo date('d-A-Y');}else{echo
                                  substr($jadwal['tanggal'],8,2)." ".
                                  $bulan[intval(substr($jadwal['tanggal'],6,2))-1]." ".
                                  substr($jadwal['tanggal'],0,4);}?></h5>
                                <h5 class="text-muted vb">Posyandu Apel Desa Sukamanah</h5>
                                <h5 class="text-muted vb"><?php if($jadwal['jam']==null){echo '-';}else{echo $jadwal['jam'];}?></h5>
                                <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">169</h3>
                                </div> -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="laporan.php" class="btn btn-success btn-lg" target="_blank">
                                        <i class="fa fa-file-pdf-o fa-f"></i>
                                            <b> Cetak Laporan</b>
                                    </a>
                                    <h3 class="counter text-right m-t-15 text-primary"></h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Berat Badan
                            </div>
                            <!-- /.panel-heading -->
                            <div id="chart-container">
                                <canvas id="Paket"></canvas>
                            </div>
                            <script type="text/javascript" src="../data_chart/example.js"></script>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                      </div>
                </div>
                <!-- /.row -->
            </div>
<?php require_once('footer.php'); ?>
