<?php require_once('head.php'); ?>		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Detail Data Balita</h1>
								<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="data-balita.php">Data Balita</a> <span class="lnr lnr-arrow-right"></span> Detail Data Balita</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<?php require_once('session.php'); 
			$sql = mysqli_query($con, "SELECT * FROM balita inner join user on user.nik=balita.nik WHERE nik='$niku'");
  			$data = mysqli_fetch_array($sql);?>
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="content-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="table table-borderless">
                                                <h3 style="text-align: center;">Data Orang Tua</h3><br>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Nik</th>
                                                        <td><?= $data['nik'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Ibu Balita</th>
                                                        <td><?= $data['nama_ibu'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td><?= $data['tempat_lahir'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td><?= $data['tgl_lahir'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alamat</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No Hp</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Agama</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pekerjaan</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Umur</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nama Ayah</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Anak Ke-</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                        <table class="table table-borderless">
                                                <h3 style="text-align: center;">Data Balita</h3><br>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Nama Lengkap</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tempat Lahir</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Lahir</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Usia</th>
                                                        <td>Mark</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 
						</div>
						<!-- End single-post Area -->
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
<?php require_once('footer.php') ?>