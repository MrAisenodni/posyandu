<?php require_once('head.php'); ?>
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Perkembangan Balita</h1>
								<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>Perkembangan Balita</p>
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
                                            <h3>Perkembangan Balita</h3>
                                        </div>
                                    </div>
                                    <br>
									<table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Tinggi Badan</th>
                                            <th scope="col">Berat Badan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
																					<?php
						                              $no = 1;
						                              $sql = mysqli_query($con, "SELECT *,YEAR(CURRENT_DATE) - YEAR(tgl_lahir) AS usia FROM perkembangan_balita
						                              inner join balita on balita.kode_balita=perkembangan_balita.kode_balita");
						                              while($data = mysqli_fetch_array($sql)){
						                              ?>
                                            <tr>
                                                <th scope="row"><?= $no ?></th>
                                                <td><?= $data['tgl_periksa']; ?></td>
                                                <td><?= $data['tb_balita']?> CM</td>
                                                <td><?= $data['bb_balita']?> KG</td>
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
