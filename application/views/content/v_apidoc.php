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
<div class="slider_area" id="slider_area" style="background: #F8F8F8;" hidden>
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
								<!-- <p class="pBlue animated fadeInRightBig"><?= $fitur->title2; ?></p>
								<p class="pText animated fadeInUpBig" style="color: black;"><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $fitur->description))) ?></p>
								<a href="#test-form" class="login popup-with-form"><img src="<?= base_url(); ?>assets/img/coba_arrow.svg" alt="" class="pImg animated fadeInUp"></a>
								<a href="<?= base_url('harga'); ?>" title="Lihat Harga"><img src="<?= base_url(); ?>assets/img/lihat_harga.png" alt="" class="price animated fadeInDown"></a> -->
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
	.sidebar {
		padding-top: 5%;
		width: 22%;
		height: 110vh;
		background-color: #00297b;
		/*// experiment with this value, try changing to 110vh min-height: 200px;*/
		overflow: auto;
		/*position: -webkit-sticky;*/
		position: sticky;
		top: 5%;
		padding-left: 30px;
	}

	@media (max-width: 830px) {
		.sidebar{
			display: none;
		}
		.main {
			width: 100%;
			padding-right: 0px;
		}
	}

	.list-type6{
		width:200px;
	}

/* LIST #8 */
.list-type6 { }
.list-type6 ul {
	list-style:none;
}
.list-type6 ul li {
	font-size:15px;
	/*font-family: 'Raleway', sans-serif;*/
}
.list-type6 ul li a {
	display:block;
	width:200px;
	/*margin-left: -40px;*/
	height:30px;
	/*background-color:#2056a0;*/
/*	border-left:5px solid #0B418B;
	border-right:5px solid #3491d2;*/
	padding-left:10px;
	padding-top:4px;
	text-decoration:none;
	color: #fff;
	margin-bottom: 7px;
	transition: all .2s ease-in-out;
}

.list-type6 ul li.active a {
	display:block;
	width:200px;
	/*margin-left: -40px;*/
	height:30px;
	background-color:white !important;
/*	border-left:5px solid #f8b600;
	border-right:5px solid #f8b600;*/
	padding-left:10px;
	padding-top:4px;
	text-decoration:none;
	color: #00297b;
	margin-bottom: 7px;
	transition: all .2s ease-in-out;
}

.list-type6 ul li a:hover   {
	/*-moz-transform:rotate(-5deg);
	-moz-box-shadow:10px 10px 20px #000000;
	-webkit-transform:rotate(-5deg);
	-webkit-box-shadow:10px 10px 20px #000000;
	transform:rotate(-5deg);
	box-shadow:10px 10px 20px #000000;*/

	color: #00297b;
	background-color:white !important;
}
.api{
	padding-top: 166px;
	padding-bottom: 120px;
}

.textapi > p {
	color: #fff;
}
</style>


<div class="wrapper" style="display: flex;justify-content:'';">

	<div class="sidebar">
		<h3 style="color: #FFC602">API Doc</h3>
		<div class="list-type6">
			<nav id="side">
				<ul>
					<?foreach($this->db->query("SELECT * FROM tbl_apidoc order by sort asc")->result() as $f) { 
						echo " <li><a href=#$f->slug>$f->nama_tab</a></li>"; }?>
					</ul>
				</nav>
			</div>
		</div>


		<div class="main" style="">	
			<section class=" big_features">
				<div class="container">
					<div class="row">
						<div class=" text-center" >
							<!-- <div class="col-lg-6"> -->
								<?php foreach($this->db->query("SELECT * FROM tbl_apidoc order by sort asc")->result() as $api) { 

									// if ($api->sort==1) {
									// 	$cs="padding-top: 215px;padding-bottom: 0px;";
									// }else{
									// 	$cs = "padding-top: 215px;padding-bottom: 100px;";
									// }
									?>
									<section id="<?=$api->slug?>">
										<div class="container pad-container api" style="">
											<div class="col-lg-6">

											</div>
											<div class="text-center" data-aos="flip-up">
												<div><h2 style="text-align: left;"><b style="text-align: left;color: #002776;"><?=$api->nama?></b></h2></div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
														<?=$api->content?>

													</div>
												</div>
												<div class="col-lg-6">
													<?php if (empty($api->isiScript)) {
														$css = "text-align: justify;";
													}else{
														$css = "text-align: justify;background-color: #002855;color: #fff !important;padding: 2em 28px;margin: 0;clear: right;box-sizing: border-box;text-shadow: 0 1px 2px rgba(0,0,0,.4);";
													}
													?>
													<div class="blog wow animated animated2 textapi" style="<?=$css?>" data-aos="fade-up" data-aos-duration="2000">
														<?=$api->isiScript?>


													</div>
												</div>
											</div>
											<br><br>
											

											<hr class="separator">
										</div>
									</section>
								<?php }?>
							</div>
						</div>


					</div>
				</div>
			</div>
		</section>
	</div>

</div>


<script type="text/javascript">

</script>

<!-- Fitur section -->
<!-- <div class="testimonial_area">
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
</div> -->
<!-- end Fitur section -->
<!-- Fitur section -->
<!-- <div class="Fitur" style="padding-bottom: 10%;">
	<div class="container">
		<div class="row">
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
</div> -->
<!-- end Fitur section -->