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
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Bayi</th>
      <th scope="col">Jenis Imunisasi</th>
      <th scope="col">Tanggal Imunisasi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $sql = mysqli_query($con, "SELECT * FROM imunisasi
    inner join balita on imunisasi.kode_balita = balita.kode_balita
    inner join user on imunisasi.nik = user.nik where tgl_imunisasi like '%$blnini%'");
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $data['nama_balita']?></td>
      <td><?= $data['jenis_imunisasi']?></td>
      <td><?= substr($data['tgl_imunisasi'],8,2)." ".
      $bulan[intval(substr($data['tgl_imunisasi'],6,2))-1]." ".
      substr($data['tgl_imunisasi'],0,4)?></td>
    </tr>
  <?php $no++; }?>
  </tbody>
</table>
<?php require_once('footer-laporan.php'); ?>
