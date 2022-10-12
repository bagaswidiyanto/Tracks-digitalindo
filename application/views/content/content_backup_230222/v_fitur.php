<style>
	#slider_area:before {
		position: absolute;
		width: 30%;
		left: 0px;
		top: 0px;
		bottom: 0px;
		margin-left: 70%;
		background: #00297B;
		z-index: 0;
		content: '';
	}

	.background_img {
		position: absolute;
		width: 40%;
		right: 0;
		top: 17%;
	}


	.imgFitur {
		width: 7rem;
		height: 7rem;
		border-radius: 100%;
		margin-top: -25%;
		margin-bottom: -45px;
	}

	.circle_colorful {
		padding: 26%;
	}

	@media only screen and (min-width:200px) and (max-width:500px) {
		.pText {
			font-size: 6px;
			line-height: 7px;
		}

		.p {
			padding-top: 60px;
			line-height: 0;
		}
	}
</style>
<!-- slider_area_start -->
<div class="slider_area" id="slider_area" style="background: #F8F8F8;">
	<div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">

		<?php foreach ($bannerImage as $b) { ?>
			<img src="https://digitalindo.co.id/admin/upload/banner_track/<?= $b->image ?>" style="position: absolute; width: 100%;">
		<?php } ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class=" align-items-center justify-content-center">
						<?php foreach ($fiturH as $fitur) { ?>
							<div class="slider_info">
								<p class="p animated fadeInLeft"><?= $fitur->title1; ?></p>
								<p class="pBlue animated fadeInRightBig"><?= $fitur->title2; ?></p>
								<p class="pText animated fadeInUpBig" style="color: black;"><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $fitur->description))) ?></p>
								<a href="#test-form" class="login popup-with-form"><img src="<?= base_url(); ?>assets/img/coba_arrow.svg" alt="" class="pImg animated fadeInUp"></a>
								<a href="<?= base_url('harga'); ?>" title="Lihat Harga"><img src="<?= base_url(); ?>assets/img/lihat_harga.png" alt="" class="price animated fadeInDown"></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- slider_area_end -->
<style>
	.pFitur {
		font-size: 48px;
		font-weight: 600;
		line-height: 46px;
	}

	.pBlueFitur {
		font-size: 48px;
		font-weight: 600;
		line-height: 52px;
		color: #00297B;
	}

	.pTextFitur {
		font-size: 18px;
		padding-top: 3%;
	}

	@media (max-width: 767px) {
		.slider_info_fitur {
			width: 100%;
		}

		.pFitur {
			line-height: 38px;
		}

		.pBlueFitur {
			line-height: 50px;
		}
	}
</style>
<!-- Fitur section -->
<div class="testimonial_area">
	<div class="container">
		<div class=" align-items-center justify-content-center mx-auto" style="width: 60%;">
			<?php foreach ($fiturC as $ftr) { ?>
				<div class="slider_info_fitur text-center" data-aos="fade-up" data-aos-duration="3000">
					<p class="pFitur"><?= $ftr->title1; ?></p>
					<p class="pBlueFitur"><?= $ftr->title2; ?></p>
					<p class="pTextFitur" style="color: black;"><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $ftr->description))) ?></p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- end Fitur section -->
<!-- Fitur section -->
<div class="Fitur" style="padding-bottom: 10%;">
	<div class="container">
		<div class="row">
			<!--  -->
			<?php
			$no = 1;
			foreach ($fiturM as $f) {
				if ($no++ % 2 == 0) {
			?>
					<div class="col-lg-6" style="padding-top: 5%;" data-aos="fade-up" data-aos-duration="3000">
						<img src="https://digitalindo.co.id/admin/upload/fitur_track/<?= $f->big_image; ?>" alt="" width="100%">
					</div>
					<div class="col-lg-6">
						<div class="card" data-aos="fade-up" data-aos-duration="3000" style="border: 0px; box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.05); border-radius: 20px; text-align: center;">
							<div class="circle_colorful" style="padding: 25%;">
								<img src="https://digitalindo.co.id/admin/upload/fitur_track/<?= $f->small_image; ?>" alt="" class="imgFitur">
							</div>
							<div class="mx-auto" style="width: 60%; margin-top: -10%;">
								<h3><?= $f->title; ?></h3>
								<p><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $f->description))) ?></p>
							</div>
						</div>
					</div>

				<?php
				} else { ?>
					<div class="col-lg-6">
						<div class="card" data-aos="fade-up" data-aos-duration="3000" style="border: 0px; box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.05); border-radius: 20px; text-align: center;">
							<div class="circle_colorful" style="padding: 25%;">
								<img src="https://digitalindo.co.id/admin/upload/fitur_track/<?= $f->small_image; ?>" alt="" class="imgFitur">
							</div>
							<div class="mx-auto" style="width: 60%; margin-top: -10%;">
								<h3><?= $f->title; ?></h3>
								<p><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $f->description))) ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6" style="padding-top: 5%;" data-aos="fade-up" data-aos-duration="3000">
						<img src="https://digitalindo.co.id/admin/upload/fitur_track/<?= $f->big_image; ?>" alt="" width="100%">
					</div>
			<?php
				}
			} ?>
		</div>
		<div class="text-center mt-5">
			<a href="#test-form" class="login popup-with-form">
				<img src="<?= base_url(); ?>assets/img/coba_track.svg" alt="" class="pImg" data-aos="fade-up" data-aos-duration="3000">
			</a>
			<a href="<?= base_url('harga'); ?>" title="Lihat Harga">
				<img src="<?= base_url(); ?>assets/img/lihat_harga.png" alt="" data-aos="fade-up" data-aos-duration="3000" style="width: 22%;padding-left: 3%;">
			</a>
		</div>
	</div>
</div>
<!-- end Fitur section -->