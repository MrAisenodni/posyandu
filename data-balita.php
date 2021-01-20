<?php require_once('head.php'); ?>
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Data Balita</h1>
								<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>Data Balita</p>
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
						<div class="col-lg-12 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="content-wrap">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h3>Data Balita</h3>
                                        </div>
                                        <!-- <div class="col-lg-3">
                                            <div class="mb-3">
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cari....">
                                            </div>
                                        </div> -->
                                    </div>
                                    <br>
									<table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIK Ibu Balita</th>
                                            <th scope="col">Nama Balita</th>
                                            <th scope="col">Akses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
																					<?php
				                                  $no = 1;
				                                  $sql = mysqli_query($con, "SELECT *,YEAR(CURRENT_DATE) - YEAR(tgl_lahir) AS usia FROM balita");
				                                  while($data = mysqli_fetch_array($sql)){
				                                  ?>
                                            <tr>
                                                <th scope="row"><?= $no ?></th>
                                                <td><?= $data['nik']; ?></td>
                                                <td><?= $data['nama_balita']?></td>
                                                <td>
                                                    <a href="detail-data-balita.php" class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
																						<?php $no++;}?>
                                        </tbody>
                                    </table>
						</div>
						<!-- End single-post Area -->
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>
<?php require_once('footer.php') ?>
