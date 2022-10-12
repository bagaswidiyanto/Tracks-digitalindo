<?
$branch = $this->input->post('branch');
$from = $this->input->post('from');

$cek = $this->db->query("SELECT COUNT(*) as jml FROM tbl_branch where ID='" . $branch . "'  ");
$row = $cek->row();


if ($row->jml > 0) {

	foreach ($this->db->query("SELECT * FROM tbl_branch where ID='" . $branch . "'  ")->result() as $b) {

		if ($from == 'home') {
?>

			<div class="main" style="padding-bottom: 30px;">
				<section class=" big_features">
					<div class="container-branch">
						<div class="row">
							<div class=" text-center">
								<section>
									<div class="pad-container branch">
										<div class="text-center" data-aos="flip-up">
											<div>
												<h3 style="text-align: center;"><b style="text-align: center;"><?= $b->nameBranch; ?></b></h3>
											</div>
										</div>
										<div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
											<div class="col-md-6 map-branch">
												<?= $b->maps; ?>
											</div>
											<div class="col-md-6 detail-branch">
												<div class="content-detail-branch">
													<div class="icon-detail-branch">
														<img src="<?= base_url(); ?>img/icon/map.png">
													</div>
													<div class="text-detail-branch">
														<p style="font-weight: bold;"><?= (@$_GET['lang'] != 'eng') ? 'ALAMAT' : 'ADDRESS'; ?></p>
														<p><?= $b->address; ?></p>
													</div>
												</div>
												<div class="content-detail-branch">
													<div class="icon-detail-branch">
														<img src="<?= base_url(); ?>img/icon/contact.png">
													</div>
													<div class="text-detail-branch">
														<p style="font-weight: bold;"><?= (@$_GET['lang'] != 'eng') ? 'TELEPON' : 'PHONE'; ?></p>
														<p><?= $b->phone; ?></p>
													</div>
												</div>


												<div class="content-detail-branch">
													<div class="icon-detail-branch">
														<img src="<?= base_url(); ?>img/icon/user.png">
													</div>
													<div class="text-detail-branch">
														<p style="font-weight: bold;"><?= (@$_GET['lang'] != 'eng') ? 'PIC' : 'PIC'; ?></p>
														<p><?= $b->contactPerson; ?></p>
													</div>
												</div>

												<div class="content-detail-branch">
													<div class="icon-detail-branch">
														<img src="<?= base_url(); ?>img/icon/contact.png">
													</div>
													<div class="text-detail-branch">
														<p style="font-weight: bold;"><?= (@$_GET['lang'] != 'eng') ? 'TELEPON GENGGAM' : 'HAND PHONE'; ?></p>
														<p><?= $b->mobilePhone; ?></p>
													</div>
												</div>



												<div class="content-detail-branch">
													<div class="icon-detail-branch">
														<img src="<?= base_url(); ?>img/icon/clock.png">
													</div>
													<div class="text-detail-branch">
														<p style="font-weight: bold;"><?= (@$_GET['lang'] != 'eng') ? 'JAM OPERASIONAL' : 'OPERATIONAL HOURS'; ?></p>
														<p><?= substr($b->open, 0, 5); ?> - <?= substr($b->close, 0, 5); ?></p>
													</div>
												</div>




											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
			</div>
		<? } else { ?>
			<?= $b->map; ?>
	<? }
	}
} else { ?>
	<center>
		<div class="alert alert-danger" role="alert">Cabang kami belum tersedia di lokasi yang anda cari</div>
	</center>
<? } ?>