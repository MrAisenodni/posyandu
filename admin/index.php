<?php require_once('head.php');
date_default_timezone_set('Asia/Jakarta');
$hariini = date('Y-m-d');
$sql = mysqli_query($con,"SELECT count(kode_balita) as jumlah from balita");
$cbayi = mysqli_fetch_array($sql);
$chart_data = '';

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

    $sqlchart = mysqli_query($con, "SELECT (SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='P' AND b.bb_balita<6.0) AS wanita1, 
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='P' AND b.bb_balita>=6.0 AND b.bb_balita<11.0) AS wanita2, 
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='P' AND b.bb_balita>=11.0 AND b.bb_balita<16.0) AS wanita3, 
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='P' AND b.bb_balita>=16.0 AND b.bb_balita<23.0) AS wanita4,
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='L' AND b.bb_balita<6.0) AS pria1, 
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='L' AND b.bb_balita>=6.0 AND b.bb_balita<11.0) AS pria2, 
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='L' AND b.bb_balita>=11.0 AND b.bb_balita<16.0) AS pria3, 
(SELECT count(a.nama_balita) FROM balita a INNER JOIN perkembangan_balita b ON b.kode_balita = a.kode_balita WHERE a.jenkel='L' AND b.bb_balita>=16.0 AND b.bb_balita<23.0) AS pria4 FROM balita");
    $datachart = mysqli_fetch_array($sqlchart);

    $sqlchart2 = mysqli_query($con, "SELECT (SELECT COUNT(nama_balita) FROM balita WHERE jenkel='L') AS l, (SELECT COUNT(nama_balita) FROM balita WHERE jenkel='P') AS p FROM balita");
    $datachart2 = mysqli_fetch_array($sqlchart2);
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
                                    <h4 class="text-muted vb"><b>JUMLAH BALITA</b></h4>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger"><?= $cbayi['jumlah']?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12 pt-n2">
                        <div class="white-box" style="height: 155px">
                            <h4 class="text-muted mb-2"><b>JADWAL</b></h4>
                            <h5 class="text-muted vb"><?php if($jadwal['tanggal']==null){echo date('d-A-Y');}else{echo
                              substr($jadwal['tanggal'],8,2)." ".
                              $bulan[intval(substr($jadwal['tanggal'],6,2))-1]." ".
                              substr($jadwal['tanggal'],0,4);}?></h5>
                            <h5 class="text-muted vb">Posyandu Apel Desa Sukamanah</h5>
                            <h5 class="text-muted vb"><?php if($jadwal['jam']==null){echo '-';}else{echo $jadwal['jam'];}?></h5>
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
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box" style="width: 490px">
                            <h4 align="center"><b>Perkembangan Balita</b></h4>
                            <div id="bar-graph" style="width: 415px; height: 250px;"></div>
                            <h5 align="center">Berat Badan (kg)</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box" style="width: 490px">
                            <h4 align="center"><b>Jumlah Balita</b></h4>
                            <div id="donut-graph" style="width: 415px; height: 285px;"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>

<?php require_once('footer.php'); ?>
