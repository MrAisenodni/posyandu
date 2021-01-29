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

$sql2 = mysqli_query($con, "SELECT * FROM balita");
while ($data = mysqli_fetch_array($sql2)) {
    $chart_data = "{ nama_balita:'".$data['nama_balita']."', tempat_lahir: '".$data['tempat_lahir']."', tgl_lahir: '".$data['tgl_lahir']."', jenkel: '".$data['jenkel']."' }";
}
$chart_data = substr($chart_data, 0, -2);
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
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <div id="graph" style="width: 1000px; height: 250px;"></div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
<script>
    Morris.Line({
        element: 'graph',
        data: [<?php echo $chart_data ?>]
        xkey: 'nama_balita',
        ykeys: ['tempat_lahir', 'tgl_lahir', 'jenkel'],
        labels: ['Tempat Lahir', 'Tanggal Lahir', 'Jenis Kelamin'],
        hidehover: 'auto'
    });
</script>
<?php require_once('footer.php'); ?>
