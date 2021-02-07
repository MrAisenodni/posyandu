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

    $sqlpria = mysqli_query($con, "SELECT 
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=1 AND jenkel='L') AS pria1,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=2 AND jenkel='L') AS pria2,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=3 AND jenkel='L') AS pria3,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=4 AND jenkel='L') AS pria4,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=5 AND jenkel='L') AS pria5 FROM balita LIMIT 0,1");
    $datapria = mysqli_fetch_array($sqlpria);

    $sqlwanita = mysqli_query($con, "SELECT 
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=1 AND jenkel='P') AS wanita1,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=2 AND jenkel='P') AS wanita2,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=3 AND jenkel='P') AS wanita3,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=4 AND jenkel='P') AS wanita4,
        (SELECT COUNT(nama_balita) AS jumlah FROM balita WHERE (YEAR(CURRENT_DATE()) - YEAR(tgl_lahir))=5 AND jenkel='P') AS wanita5 FROM balita LIMIT 0,1");
    $datawanita = mysqli_fetch_array($sqlwanita);

    $sqlbbp = mysqli_query($con, "SELECT 
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND a.bb_balita<7.5 AND b.jenkel='L') AS wast1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND a.bb_balita>=7.5 AND a.bb_balita<13.5 AND b.jenkel='L') AS ideal1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND a.bb_balita>=13.5 AND b.jenkel='L') AS obe1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND a.bb_balita<9.5 AND b.jenkel='L') AS wast2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND a.bb_balita>=9.5 AND a.bb_balita<15.5 AND b.jenkel='L') AS ideal2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND a.bb_balita>=15.5 AND b.jenkel='L') AS obe2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.bb_balita<11 AND b.jenkel='L') AS wast3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.bb_balita>=11 AND a.bb_balita<18 AND b.jenkel='L') AS ideal3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.bb_balita>=18 AND b.jenkel='L') AS obe3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.bb_balita<12.5 AND b.jenkel='L') AS wast4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.bb_balita>=12.5 AND a.bb_balita<21 AND b.jenkel='L') AS ideal4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.bb_balita>=21 AND b.jenkel='L') AS obe4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.bb_balita<14 AND b.jenkel='L') AS wast5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.bb_balita>=14 AND a.bb_balita<24 AND b.jenkel='L') AS ideal5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.bb_balita>=24 AND b.jenkel='L') AS obe5 FROM perkembangan_balita LIMIT 0,1");
$chartbbp = mysqli_fetch_array($sqlbbp);

$sqlbbw = mysqli_query($con, "SELECT 
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND a.bb_balita<7.5 AND b.jenkel='P') AS wast1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND a.bb_balita>=7.5 AND a.bb_balita<13.5 AND b.jenkel='P') AS ideal1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND a.bb_balita>=13.5 AND b.jenkel='P') AS obe1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND a.bb_balita<9.5 AND b.jenkel='P') AS wast2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND a.bb_balita>=9.5 AND a.bb_balita<15.5 AND b.jenkel='P') AS ideal2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND a.bb_balita>=15.5 AND b.jenkel='P') AS obe2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.bb_balita<11 AND b.jenkel='P') AS wast3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.bb_balita>=11 AND a.bb_balita<18 AND b.jenkel='P') AS ideal3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.bb_balita>=18 AND b.jenkel='P') AS obe3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.bb_balita<12.5 AND b.jenkel='P') AS wast4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.bb_balita>=12.5 AND a.bb_balita<21 AND b.jenkel='P') AS ideal4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.bb_balita>=21 AND b.jenkel='P') AS obe4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.bb_balita<14 AND b.jenkel='P') AS wast5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.bb_balita>=14 AND a.bb_balita<24 AND b.jenkel='P') AS ideal5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.bb_balita>=24 AND b.jenkel='P') AS obe5 FROM perkembangan_balita LIMIT 0,1");
$chartbbw = mysqli_fetch_array($sqlbbw);

$sqlavgbbp = mysqli_query($con, "SELECT (SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND b.jenkel='L') AS avg1,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND b.jenkel='L') AS avg2,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND b.jenkel='L') AS avg3,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND b.jenkel='L') AS avg4,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND b.jenkel='L') AS avg5 FROM perkembangan_balita LIMIT 0,1");
$dataavgbbp = mysqli_fetch_array($sqlavgbbp);

$sqlavgbbw = mysqli_query($con, "SELECT (SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=1 AND b.jenkel='P') AS avg1,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=2 AND b.jenkel='P') AS avg2,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND b.jenkel='P') AS avg3,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND b.jenkel='P') AS avg4,
(SELECT AVG(a.bb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND b.jenkel='P') AS avg5 FROM perkembangan_balita LIMIT 0,1");
$dataavgbbw = mysqli_fetch_array($sqlavgbbw);

$sqltbp = mysqli_query($con, "SELECT 
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND a.tb_balita<75.7 AND b.jenkel='L') AS wast2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND a.tb_balita>=75.7 AND a.tb_balita<87.8 AND b.jenkel='L') AS ideal2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND a.tb_balita>=87.8 AND b.jenkel='L') AS obe2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.tb_balita<87.8 AND b.jenkel='L') AS wast3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.tb_balita>=87.8 AND a.tb_balita<96.1 AND b.jenkel='L') AS ideal3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.tb_balita>=96.1 AND b.jenkel='L') AS obe3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.tb_balita<96.1  AND b.jenkel='L') AS wast4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.tb_balita>=96.1  AND a.tb_balita<103.3 AND b.jenkel='L') AS ideal4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.tb_balita>=103.3 AND b.jenkel='L') AS obe4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.tb_balita<103.3  AND b.jenkel='L') AS wast5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.tb_balita>=103.3  AND a.tb_balita<110 AND b.jenkel='L') AS ideal5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.tb_balita>=110 AND b.jenkel='L') AS obe5 FROM perkembangan_balita LIMIT 0,1");
$charttbp = mysqli_fetch_array($sqltbp);

$sqltbw = mysqli_query($con, "SELECT
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND a.tb_balita<74  AND b.jenkel='P') AS wast2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND a.tb_balita>=74  AND a.tb_balita<86 AND b.jenkel='P') AS ideal2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND a.tb_balita>=86 AND b.jenkel='P') AS obe2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.tb_balita<85.7 AND b.jenkel='P') AS wast3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.tb_balita>=85.7 AND a.tb_balita<95.1 AND b.jenkel='P') AS ideal3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND a.tb_balita>=95.1 AND b.jenkel='P') AS obe3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.tb_balita<95.1 AND b.jenkel='P') AS wast4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.tb_balita>=95.1 AND a.tb_balita<102.7 AND b.jenkel='P') AS ideal4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND a.tb_balita>=102.7 AND b.jenkel='P') AS obe4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.tb_balita<102.7 AND b.jenkel='P') AS wast5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.tb_balita>=102.7 AND a.tb_balita<109.4 AND b.jenkel='P') AS ideal5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM perkembangan_balita a LEFT JOIn balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND a.tb_balita>=109.4 AND b.jenkel='P') AS obe5 FROM perkembangan_balita LIMIT 0,1");
$charttbw = mysqli_fetch_array($sqltbw);

$sqlavgtbp = mysqli_query($con, "SELECT 
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND b.jenkel='L') AS avg2,
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND b.jenkel='L') AS avg3,
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND b.jenkel='L') AS avg4,
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND b.jenkel='L') AS avg5 FROM perkembangan_balita LIMIT 0,1");
$dataavgtbp = mysqli_fetch_array($sqlavgtbp);

$sqlavgtbw = mysqli_query($con, "SELECT 
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))<=2 AND b.jenkel='P') AS avg2,
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=3 AND b.jenkel='P') AS avg3,
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=4 AND b.jenkel='P') AS avg4,
(SELECT AVG(a.tb_balita) AS AVG FROM perkembangan_balita a LEFT JOIN balita b ON b.kode_balita = a.kode_balita WHERE (YEAR(CURRENT_DATE()) - YEAR(b.tgl_lahir))=5 AND b.jenkel='P') AS avg5 FROM perkembangan_balita LIMIT 0,1");
$dataavgtbw = mysqli_fetch_array($sqlavgtbw);

$sqlimun = mysqli_query($con, "SELECT 
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='HB-O (0-7 hari)' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<1) AS imun1,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<1) AS imun2,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='BCG' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=1 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<2) AS imun3,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*Polio 1' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=1 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<2) AS imun4,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=1 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<2) AS imun5,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*DPT-HB-Hib 1' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=2 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<3) AS imun6,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*Polio 2' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=2 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<3) AS imun7,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=2 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<3) AS imun8,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*DPT-HB-Hib 2' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=3 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<4) AS imun9,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*Polio 3' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=3 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<4) AS imun10,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=3 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<4) AS imun11,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*DPT-HB-Hib 3' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=4 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<5) AS imun12,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='*Polio 4' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=4 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<5) AS imun13,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='IPV' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=4 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<5) AS imun14,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=4 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<5) AS imun15,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='***Campak' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=5 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<10) AS imun16,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=5 AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)<10) AS imun17,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='***DPT-HB-Hib Lanjutan' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=10) AS imun18,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='****Campak Lanjutan' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=10) AS imun19,
(SELECT COUNT(b.nama_balita) AS jumlah FROM imunisasi a INNER JOIN balita b ON b.kode_balita = a.kode_balita WHERE a.jenis_vaksin='' AND (TIMESTAMPDIFF( MONTH, tgl_lahir, now() ) % 12)>=10) AS imun20 FROM balita LIMIT 0,1");
$dataimun = mysqli_fetch_array($sqlimun);
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
                <!-- .row berat badan -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box" style="width: 555px">
                            <div id="bbp-graph" style="width: 500px; height: 300px;"></div><br>
                            <table class="table table-bordered">
                                <tr class="text-center table-warning" style="background: lightblue;">
                                    <th style="text-align: center; font-weight: bold;">Umur</th>
                                    <th style="text-align: center; font-weight: bold;">Berat Badan Ideal (kg)</th>
                                    <th style="text-align: center; font-weight: bold;">Rata-rata (kg)</th>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<2 tahun" ?></td>
                                    <td>9,5 - 15,5</td>
                                    <td><?php if($dataavgbbp['avg2'] != null) { echo substr($dataavgbbp['avg2'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<3 tahun" ?></td>
                                    <td>11 - 18</td>
                                    <td><?php if($dataavgbbp['avg3'] != null) { echo substr($dataavgbbp['avg3'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<4 tahun" ?></td>
                                    <td>12,5 - 21</td>
                                    <td><?php if($dataavgbbp['avg4'] != null) { echo substr($dataavgbbp['avg4'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<5 tahun" ?></td>
                                    <td>14 - 24</td>
                                    <td><?php if($dataavgbbp['avg5'] != null) { echo substr($dataavgbbp['avg5'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box" style="width: 555px">
                            <div id="bbw-graph" style="width: 500px; height: 300px;"></div><br>
                            <table class="table table-bordered">
                                <tr class="text-center table-warning" style="background: gold;">
                                    <th style="text-align: center; font-weight: bold;">Umur</th>
                                    <th style="text-align: center; font-weight: bold;">Berat Badan Ideal (kg)</th>
                                    <th style="text-align: center; font-weight: bold;">Rata-rata (kg)</th>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<2 tahun" ?></td>
                                    <td>9,5 - 15,5</td>
                                    <td><?php if($dataavgbbw['avg2'] != null) { echo substr($dataavgbbw['avg2'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<3 tahun" ?></td>
                                    <td>11 - 18</td>
                                    <td><?php if($dataavgbbw['avg3'] != null) { echo substr($dataavgbbw['avg3'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<4 tahun" ?></td>
                                    <td>12,5 - 21</td>
                                    <td><?php if($dataavgbbw['avg4'] != null) { echo substr($dataavgbbw['avg4'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<5 tahun" ?></td>
                                    <td>14 - 24</td>
                                    <td><?php if($dataavgbbw['avg5'] != null) { echo substr($dataavgbbw['avg5'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><br>
                <!-- /.row berat badan -->
                <!-- .row tinggi badan -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box" style="width: 555px">
                            <div id="tbp-graph" style="width: 500px; height: 300px;"></div><br>
                            <table class="table table-bordered">
                                <tr class="text-center table-warning" style="background: lightblue;">
                                    <th style="text-align: center; font-weight: bold;">Umur</th>
                                    <th style="text-align: center; font-weight: bold;">Tinggi Badan Ideal (cm)</th>
                                    <th style="text-align: center; font-weight: bold;">Rata-rata (cm)</th>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<2 tahun" ?></td>
                                    <td>75,7 - 87,8</td>
                                    <td><?php if($dataavgtbp['avg2'] != null) { echo substr($dataavgtbp['avg2'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<3 tahun" ?></td>
                                    <td>87,8 - 96,1</td>
                                    <td><?php if($dataavgtbp['avg3'] != null) { echo substr($dataavgtbp['avg3'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<4 tahun" ?></td>
                                    <td>96,1 - 103,3</td>
                                    <td><?php if($dataavgtbp['avg4'] != null) { echo substr($dataavgtbp['avg4'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<5 tahun" ?></td>
                                    <td>103,3 - 110</td>
                                    <td><?php if($dataavgtbp['avg5'] != null) { echo substr($dataavgtbp['avg5'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box" style="width: 555px">
                            <div id="tbw-graph" style="width: 500px; height: 300px;"></div><br>
                            <table class="table table-bordered">
                                <tr class="text-center table-warning" style="background: gold;">
                                    <th style="text-align: center; font-weight: bold;">Umur</th>
                                    <th style="text-align: center; font-weight: bold;">Tinggi Badan Ideal (cm)</th>
                                    <th style="text-align: center; font-weight: bold;">Rata-rata (cm)</th>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<2 tahun" ?></td>
                                    <td>74 - 86</td>
                                    <td><?php if($dataavgtbw['avg2'] != null) { echo substr($dataavgtbw['avg2'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<3 tahun" ?></td>
                                    <td>85,7 - 95,1</td>
                                    <td><?php if($dataavgtbw['avg3'] != null) { echo substr($dataavgtbw['avg3'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<4 tahun" ?></td>
                                    <td>95,1 - 102,7</td>
                                    <td><?php if($dataavgtbw['avg4'] != null) { echo substr($dataavgtbw['avg4'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td><?php echo "<5 tahun" ?></td>
                                    <td>102,7 - 109,4</td>
                                    <td><?php if($dataavgtbw['avg5'] != null) { echo substr($dataavgtbw['avg5'],0,4); } else { echo "0"; } ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><br>
                <!-- /.row tinggi badan -->
                <!-- .row catatan imunisasi -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="text-center"><b>Catatan Imunisasi Balita</b></h3>
                            <table class="table table-bordered">
                                <tr class="text-center table-warning" style="background: lightgreen;">
                                    <th style="text-align: center; font-weight: bold;">Umur</th>
                                    <th style="text-align: center; font-weight: bold;">Jenis Vaksin</th>
                                    <th style="text-align: center; font-weight: bold;">Jumlah</th>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="2"><1 bulan</td>
                                    <td>HB-O (0-7 hari)</td>
                                    <td><?= $dataimun['imun1'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun2'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="3"><2 bulan</td>
                                    <td>BCG</td>
                                    <td><?= $dataimun['imun3'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>*Polio 1</td>
                                    <td><?= $dataimun['imun4'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun5'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="3"><3 bulan</td>
                                    <td>*DPT-HB-Hib 1</td>
                                    <td><?= $dataimun['imun6'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>*Polio 2</td>
                                    <td><?= $dataimun['imun7'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun8'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="3"><4 bulan</td>
                                    <td>*DPT-HB-Hib 2</td>
                                    <td><?= $dataimun['imun9'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>*Polio 3</td>
                                    <td><?= $dataimun['imun10'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun11'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="4"><5 bulan</td>
                                    <td>*DPT-HB-Hib 3</td>
                                    <td><?= $dataimun['imun12'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>*Polio 4</td>
                                    <td><?= $dataimun['imun13'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>*IPV</td>
                                    <td><?= $dataimun['imun14'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun15'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="2"><10 bulan</td>
                                    <td>***Campak</td>
                                    <td><?= $dataimun['imun16'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun17'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td rowspan="3">>10 bulan</td>
                                    <td>***DPT-HB-Hib Lanjutan</td>
                                    <td><?= $dataimun['imun18'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>****Campak Lanjutan</td>
                                    <td><?= $dataimun['imun19'] ?></td>
                                </tr>
                                <tr class="text-center table-light">
                                    <td>Belum divaksin</td>
                                    <td><?= $dataimun['imun20'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><br>
                <!-- ./row catatan imunisasi -->
                <!-- .row jumlah balita  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box" style="width: 555px">
                            <div id="donutp" style="width: 500px; height: 350px;"></div><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box" style="width: 555px">
                            <div id="donutw" style="width: 500px; height: 350px;"></div><br>
                        </div>
                    </div>
                </div>
                <!-- /.row jumlah balita -->
            </div>
        </div>

<?php require_once('footer.php'); ?>
