<?php require_once('head-laporan.php');
date_default_timezone_set('Asia/Jakarta');
$blnini = date('m');
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
<br><h2 class="text-center"><b>LAPORAN DATA BALITA</b></h2>
<h4 class="text-center fs-14">Posyandu Apel Desa Sukamanah</h4><hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="fw-bold">No</th>
      <th scope="col" class="fw-bold">Nama Bayi</th>
      <th scope="col" class="fw-bold">Jenis Kelamin</th>
      <th scope="col" class="fw-bold">Berat Badan</th>
      <th scope="col" class="fw-bold">Tinggi Badan</th>
      <th scope="col" class="fw-bold">Jenis Imunisasi</th>
      <th scope="col" class="fw-bold">Tanggal Imunisasi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $sql = mysqli_query($con, "SELECT * FROM imunisasi a
    INNER JOIN balita b ON a.kode_balita = b.kode_balita
    INNER JOIN user c ON a.nik = c.nik INNER JOIN perkembangan_balita d ON d.nik = c.nik ORDER BY jenkel ASC");
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?php echo ucwords($data['nama_balita']);?></td>
      <td><?php if($data['jenkel']=='L') { echo "Laki-laki"; } else { echo "Perempuan"; }?></td>
      <td><?= $data['bb_balita']?></td>
      <td><?= $data['tb_balita']?></td>
      <td><?= $data['jenis_vaksin']?></td>
      <td><?= substr($data['tgl_imunisasi'],8,2)." ".
      $bulan[intval(substr($data['tgl_imunisasi'],6,2))-1]." ".
      substr($data['tgl_imunisasi'],0,4)?></td>
    </tr>
  <?php $no++; }?>
  </tbody>
</table>
<?php require_once('footer-laporan.php'); ?>
