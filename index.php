<?php require_once('head.php');
date_default_timezone_set('Asia/Jakarta');
$hariini = date('Y-m-d');

$sql1 = mysqli_query($con,"SELECT * from jadwal WHERE tanggal='$hariini'");
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
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
								<h1 style="text-align: center; padding-top: 50px">Selamat Datang di Posyandu Apel Desa Sukamanah</h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Berita Terbaru</h4>
								<?php
								$no = 1;
								$sql = mysqli_query($con, "SELECT * FROM phbs order by tgl_dibuat DESC");
								while($data = mysqli_fetch_array($sql)){
								?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?= $data['gambar']?>" alt="berita">
										</div>
									</div>
									<div class="col-lg-7 post-right">
										<a href="berita.php?kode=<?= $data['kode_phbs']?>">
											<h4><?= $data['judul_berita']?></h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?= $data['penulis_berita']?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $data['tgl_dibuat']?></a></li>
										</ul>
										<p class="excert">
											<?php echo substr($data['deskripsi_berita'],0,100).". . .";?>
										</p>
									</div>
								</div>
							<?php $no++; }?>
							</div>
							<!-- End latest-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Jadwal Posyandu</h6>
									<div class="editors-pick-post">
										<div class="feature-img-wrap relative">
										</div>
										<div class="details">
											<ul class="meta">
												<center>
                                                    <p>
                                                        <li><span class="lnr lnr-calendar-full"></span><?php if($jadwal['tanggal']==null){echo date('d-A-Y');}else{echo
												                                  substr($jadwal['tanggal'],8,2)." ".
												                                  $bulan[intval(substr($jadwal['tanggal'],6,2))-1]." ".
												                                  substr($jadwal['tanggal'],0,4);}?></li>
                                                    </p>
                                                    <p>
                                                        <li><span class="lnr lnr-home"></span>Posyandu ApelDesa Sukamanah</li>
                                                    </p>
                                                    <p>
                                                        <li><span class="lnr lnr-clock"></span><?php if($jadwal['jam']==null){echo '-';}else{echo $jadwal['jam'];}?></li>
                                                    </p>
                                                </center>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
<?php require_once('footer.php'); ?>
