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

    .beginer li::before {
        content: "\f111";
        font-family: FontAwesome;
        font-size: 8px;
        margin-right: 5px;
        color: rgb(0, 0, 0);
    }

    .free_trial {
        color: #00297B;
        font-weight: 600;
        width: 66%;
        padding: 10px;
        border-radius: 20px;
        box-sizing: border-box;
        border: 2px solid #00297B;
    }

    .pBluePrice {
        margin-bottom: 4%;
    }

    .pPrice {
        margin-bottom: 4%;
    }

    @media (max-width: 767px) {
        .pBluePrice {
            margin-bottom: 7%;
        }

        .pPrice {
            margin-bottom: 7%;
        }
    }

    @media only screen and (min-width:200px) and (max-width:500px) {
        .pPrice {
            padding-top: 60px;
        }
    }
</style>
<!-- slider_area_start -->
<!-- <div class="slider_area" id="slider_area" style="background-color: #F8F8F8;">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" align-items-center justify-content-center mx-auto" style="width: 70%;">
                        <div class="slider_info_harga text-center" data-aos="fade-up" data-aos-duration="3000">
                            <p class="pPrice animated fadeInLeft">Penawaran Spesial </p>
                            <p class="pBluePrice animated fadeInRightBig">Paket dan Harga Tracks </p>
                            <p class="pBluePrice animated fadeInRightBig">Hanya Rp 99.000,- </p>
                            <a href="#test-form" class="login popup-with-form"><img src="<?= base_url(); ?>assets/img/coba_arrow.svg" alt="" class="pImgPrice pImg animated fadeInUp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- slider_area_end -->

<!-- slider_area_start -->
<div class="slider_area" id="slider_area" style="background: #F8F8F8;">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
        <?php foreach ($bannerImage as $b) { ?>
            <img src="https://digitalindo.co.id/admin/upload/banner_track/<?= $b->image ?>" style="position: absolute; width: 100%;">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class=" align-items-center justify-content-center">
                        <?php foreach ($tHarga as $hrg) { ?>
                            <div class="slider_info text-center">
                                <p class="pPrice animated fadeInLeft">Penawaran Spesial </p>
                                <p class="pBluePrice animated fadeInRightBig"><?= $hrg->title1; ?></p>
                                <p class="pBluePrice animated fadeInLeftBig"><?= $hrg->title2; ?></p>
                                <a href="#test-form" class="login popup-with-form"><img src="<?= base_url(); ?>assets/img/coba_arrow.svg" alt="" class="pImgPrice pImg animated fadeInUp"></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- daftar harga_start -->
<div class="popular_courses mx-auto" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider_info_price text-center" data-aos="fade-up" data-aos-duration="1000">
                    <p style="font-size: 38px; font-weight: 600; padding-bottom: 35px;">Daftar Harga Tracks</p>
                </div>
                <div class="row">

                    <?php foreach ($harga as $h) { ?>
                        <div class="col-lg-4">
                            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                                <div class="card-header text-center text-warning" style="background: #00297B; font-weight: 600;"><?= $h->name; ?></div>
                                <div class="container">
                                    <div class="card-body text-center">

                                        <h1 style="font-size: 58; font-weight: bold; color: #00297B;">
                                            <img src="<?= base_url(); ?>assets/img/Rp.svg" alt="" style="margin-top: -26px; width: 27px;"> <?= number_format(substr($h->harga, 0, -3), 0, ",", "."); ?>
                                            <span style="font-size: 22px; font-weight: 500; margin-left: -5px;">.000/user</span>
                                        </h1>
                                        <p style="color: #00297B; font-weight: 600;">Harga Per Bulan</p>
                                        <div class="trial">

                                            <ul class="beginer">
                                                <?= $h->deskripsi ?>
                                            </ul>
                                            <a href="#test-form" class="login popup-with-form">
                                                <p class="free_trial mx-auto">Free Trial</p>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>



                </div>
            </div>
        </div>
    </div>
</div>
<!-- daftar harga_end-->

<!-- testimonial_area_start -->
<div class="testimonial_area overlay" data-aos="fade-up" data-aos-duration="3000">
    <img src="assets/img/TRACKS.png" alt="" style="position: absolute;width: 5%;top: 13%;right: 0;;">
    <div class="testmonial_active owl-carousel">


        <?php foreach ($testimoni as $t) { ?>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text1" data-aos="fade-up" data-aos-duration="1000">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="author_img">
                                            <img src="https://digitalindo.co.id/admin/upload/testimoni_track/<?= $t->foto; ?>" style="width: 100%; height: 100%; border-radius: 10px;">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="section_title1 mb-100">
                                            <style>
                                                .textHasil {
                                                    color: #000000;
                                                    font-size: 18px;
                                                }

                                                .section_title1 p {
                                                    font-size: 18px;
                                                    font-weight: 400;
                                                }
                                            </style>
                                            <p style="color: #ffc602;font-size: 28px; font-weight: 600;">Testimonial</p>
                                            <h4 style="color: black;font-size: 38px; font-weight: 600;">Apa yang mereka katakan</h4>
                                            <h4 style="color: #00297B; font-size: 38px; font-weight: 600;">setelah menggunakan Tracks?</h4>
                                            <p>"<?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $t->hasil))) ?>"</p>
                                            <h3 style="font-size: 24px; font-weight: 600;"><?= $t->nama; ?></h3>
                                            <h5 style="color: #767373;"><?= $t->jabatan; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<!-- testimonial_area_end -->