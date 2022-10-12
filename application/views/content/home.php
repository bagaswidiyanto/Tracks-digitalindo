<style>
    #pop {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #00000087;
        z-index: 99999;
    }

    #popup {
        display: none;
        position: fixed;
        margin: 0 auto;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0px 0px 50px 2px #000;
        z-index: 99999;
    }


    #popup img {
        width: 600px;
        height: auto;
    }

    .close {
        position: absolute;
        right: 32px;
        top: 0px;
        width: 32px;
        height: 32px;
        opacity: 0.3;
    }

    @media (max-width: 767px) {
        #popup img {
            width: 300px;
            height: auto;
        }

        .close {
            width: 4px;
            height: 14px;
        }

        .close:before,
        .close:after {
            height: 18px;
        }
    }
</style>
<div id="pop" class="pop">
    <div id="popup" class="popup panel panel-primary" style="display: block;">
        <?php foreach ($pop_up as $pop) { ?>
            <img src="https://digitalindo.co.id/admin/upload/banner_track/<?= $pop->image; ?>" alt="popup">
        <?php } ?>
        <div class="panel-footer">
            <button id="closee" class="close" title="Close (Esc)"></button>
        </div>

    </div>
</div>



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

    .client_img {
        background: #fff;
        width: 9rem;
        height: 7rem;
        padding: 14px;
        border-radius: 20px;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.20);
    }

    .imgFitur {
        width: 7rem;
        height: 7rem;
        border-radius: 20px;
        margin-top: -20%;
        margin-bottom: -45px;
    }

    .circle_colorful {
        padding: 26%;
    }

    #article:before {
        position: absolute;
        width: 100%;
        left: 0px;
        top: 0px;
        bottom: 0px;
        background: #f5f5f5;
        z-index: 0;
        content: '';
        height: 65%;
    }

    #article:after {
        position: absolute;
        width: 31%;
        left: 0px;
        top: 37%;
        bottom: 0px;
        background: #00297B;
        z-index: 0;
        content: '';
    }

    .header-area .main-header-area.sticky .tracks {
        color: #fff;
    }


    .testimonial_area .owl-nav,
    .testimonial_area .owl-dots {
        margin-top: 15px;
        text-align: center;
    }

    .testimonial_area .owl-dot {
        display: inline-block;
        margin: 0 1px;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background-color: #ddd !important;
    }

    @media (min-width: 992px) {
        .testimonial_area .owl-dot {
            display: inline-block;
            margin: 0 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ddd !important;
        }
    }

    .testimonial_area .owl-dot.active {
        background-color: #00297B !important;
    }
</style>



<!-- slider_area_start -->
<div class="slider_area" id="slider_area">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
        <?php foreach ($bannerImage as $b) { ?>
            <img src="https://digitalindo.co.id/admin/upload/banner_track/<?= $b->image ?>" style="position: absolute; width: 100%;">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class=" align-items-center justify-content-center">
                        <?php foreach ($banner as $banner) { ?>

                            <div class="slider_info">
                                <p class="p animated fadeInLeft"><?= $banner->title1; ?></p>
                                <p class="pBlue animated fadeInRightBig" style=""><?= $banner->title2; ?></p>
                                <p class="pText animated fadeInUpBig" style="color: black;"><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $banner->description))) ?></p>
                                <a href="#test-form" class="login popup-with-form"><img src="<?= base_url(); ?>assets/img/coba_arrow.svg" alt="" class="pImg animated fadeInUp"></a>
                                <a href="<?= base_url('harga'); ?>"><img src="<?= base_url(); ?>assets/img/lihat_harga.png" alt="" class="price animated fadeInDown"></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <img src="<?= base_url(); ?>assets/img/circle_left_top.svg" alt="" style="position: absolute; z-index: 1; margin-top: -80px; width: 5%;"> -->
</div>
<!-- slider_area_end -->

<!-- Client section -->
<div class="testimonial_area gray-bg">
    <div class="container">
        <p data-aos="fade-up" data-aos-duration="1000" style="font-size: 28px; color: #888888; font-weight: 600; text-align: center; padding-bottom: 40px;">Mitra Kami</p>
        <div class="client_active owl-carousel" data-aos="fade-up" data-aos-duration="3000">
            <?php
            foreach ($client as $c) {
            ?>
                <div class="single_testmoial">
                    <div class="container">
                        <div class="testmonial_text text-center" style="width: 167px; margin-right: 40px;">
                            <div class="client_img">
                                <img src="https://digitalindo.co.id/admin/upload/client_track/<?= $c->image; ?>" title="<?= $c->name; ?>" style=" width: 7rem; height: 5rem">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- end clients section -->

<!-- popular_courses_start -->
<div class="popular_courses">
    <img src="<?= base_url(); ?>assets/img/TRACKS Application.png" style="position: absolute; width: 75px;" alt="">
    <div class="container">
        <div class="row mx-auto" style="width: 65%;">
            <div class="col-xl-12">
                <?php foreach ($tentang as $tentang) { ?>
                    <div class="section_title text-center mb-100" data-aos="fade-up" data-aos-duration="1000">
                        <p style="font-weight: 600;">Tentang Kami</p>
                        <h3 style="font-weight: 600;"><?= $tentang->title1; ?></h3>
                        <h3 style="color: #00297B; font-weight: 600;"><?= $tentang->title2; ?></h3>
                    </div>
                    <div class="row">
                        <?php
                        $isi = $tentang->description;
                        $pisah = explode(PHP_EOL, $isi);
                        // echo $pisah[0];
                        ?>
                        <div class="col-lg-6">
                            <p data-aos="fade-up" data-aos-duration="1000"><?= $pisah[0]; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <p data-aos="fade-up" data-aos-duration="2000"><?= $pisah[4]; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <img src="<?= base_url(); ?>assets/img/circle-right.svg" alt="" style="position: absolute; right: 0;">
</div>
<!-- popular_courses_end-->

<!-- Background_image full_start -->
<div class="popular_courses mx-auto" style="background: #00297B;  width: 90%; padding-top: 8%; padding-bottom: 3%;">
    <div class="container">
        <div class="background_blue">
            <img src="<?= base_url(); ?>assets/img/background_laptop_full.png" alt="" style="width: 72%; margin-top: -27%; margin-left: 10%;">
        </div>
    </div>
</div>
<!-- Background_image full_end-->

<!-- fitur start -->
<div class="fitur">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php foreach ($fitur as $fitur) { ?>
                    <div class="section_title mb-100" data-aos="fade-up" data-aos-duration="1000">
                        <p style="font-size: 28px; font-weight: 600; line-height: 50px;">Fitur Tracks</p>
                        <h4 style="color: black;font-size: 38px; font-weight: 600;"><?= $fitur->title1; ?></h4>
                        <h4 style="color: #00297B; font-size: 38px; font-weight: 600;"><?= $fitur->title2; ?></h4>
                        <span><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $fitur->description))) ?></span>
                    </div>
                <?php } ?>
                <a href="#test-form" class="login popup-with-form" data-aos="zoom-in"><img src="<?= base_url(); ?>assets/img/coba_arrow.svg" alt="" style="padding-bottom: 5%;"></a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <?php foreach ($fiturM as $f) { ?>
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                            <a href="<?= base_url('fitur'); ?>" target="_blank" title="<?= $f->title; ?>">
                                <div class="card" style="border: 0px; box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.05); border-radius: 20px; text-align: center;">
                                    <div class="circle_colorful">
                                        <img src="https://digitalindo.co.id/admin/upload/fitur_track/<?= $f->small_image; ?>" alt="" class="imgFitur">
                                    </div>
                                    <h3><?= $f->title; ?></h3>
                                    <p><?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $f->description))) ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    <!-- <div class="col-md-6" data-aos="fade-up" data-aos-duration="200">
                        <div class="card" style="border: 0px; border-radius: 20px; text-align: center;">
                            <div class="circle_colorful">
                                <img src="" alt="" class="imgFitur" style="background-color: #00297B; opacity: 0.1;">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="300">
                        <div class="card" style="border: 0px; border-radius: 20px; text-align: center;">
                            <div class="circle_colorful">
                                <img src="" alt="" class="imgFitur" style="background-color: #FFC602; opacity: 0.1;">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="400">
                        <div class="card" style="border: 0px; border-radius: 20px; text-align: center;">
                            <div class="circle_colorful">
                                <img src="" alt="" class="imgFitur" style="background-color: #00297B; opacity: 0.1;">
                            </div>
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <img src="<?= base_url(); ?>assets/img/circle-left.svg" alt="" style="padding-bottom: 70px;">
</div>
<!-- fitur end-->

<?php
function time_ago($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes      = round($seconds / 60);        // value 60 is seconds  
    $hours        = round($seconds / 3600);       //value 3600 is 60 minutes * 60 sec  
    $days         = round($seconds / 86400);      //86400 = 24 * 60 * 60;  
    $weeks        = round($seconds / 604800);     // 7*24*60*60;  
    $months       = round($seconds / 2629440);    //((365+365+365+365+366)/5/12)*24*60*60  
    $years        = round($seconds / 31553280);   //(365+365+365+365+366)/5 * 24 * 60 * 60  
    if ($seconds <= 60) {
        return "Sekarang";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "Satu menit lalu";
        } else {
            return "$minutes menit lalu";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "Satu jam lalu";
        } else {
            return "$hours jam lalu";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "Kemarin";
        } else {
            return "$days hari lalu";
        }
    } else if ($weeks <= 4.3) {  //4.3 == 52/12
        if ($weeks == 1) {
            return "Satu minggu lalu";
        } else {
            return "$weeks minggu lalu";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "Satu bulan lalu";
        } else {
            return "$months bulan lalu";
        }
    } else {
        if ($years == 1) {
            return "Satu tahun lalu";
        } else {
            return "$years tahun lalu";
        }
    }
}
?>

<!-- slider article_start -->
<div class="testimonial_area" id="article" style="padding: 160px 0 80px 0;">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-xl-12">
                    <?php foreach ($artikel as $artikel) { ?>
                        <div class="section_title mb-100" data-aos="fade-up" data-aos-duration="1000">
                            <p style="font-size: 28px; font-weight: 600; line-height: 50px;">Artikel Berita</p>
                            <h4 style="color: black;font-size: 38px; font-weight: 600;"><?= $artikel->title1; ?></h4>
                            <h4 style="color: #00297B; font-size: 38px; font-weight: 600;"><?= $artikel->title2; ?></h4>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="article_active owl-carousel" data-aos="fade-up" data-aos-duration="1000">
            <?php foreach ($berita as $b) { ?>
                <div class="single_testmoial">
                    <div class="container">
                        <div class="row">
                            <div class="container">
                                <div class="col-xl-12">
                                    <div class="testmonial_text" title="<?= $b->Title; ?>" style="background: #fff; padding: 15px; box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.05); border-radius: 20px; box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.05); height: 23rem;">
                                        <a href="<?= base_url(); ?>blog/baca/<?= $b->slug; ?>" target="_blank">
                                            <div class="author_img">
                                                <img src="https://digitalindo.co.id/admin/upload/news_post/<?= $b->image; ?>" style="width: 100%; height: 172px; border-radius: 20px;">
                                            </div>
                                        </a>
                                        <?php if (strlen($b->Title) > 50) { ?>
                                            <a href="<?= base_url(); ?>blog/baca/<?= $b->slug; ?>" target="_blank">
                                                <h4><?= substr($b->Title, 0, 50); ?>...</h4>
                                            </a>
                                        <?php } else if (strlen($b->Title) <= 50) { ?>
                                            <a href="<?= base_url(); ?>blog/baca/<?= $b->slug; ?>" target="_blank">
                                                <h4><?= substr($b->Title, 0, 50); ?></h4>
                                            </a>
                                        <?php } ?>
                                        <span style="color: #898989;"><img src="<?= base_url(); ?>assets/img/time_icon.svg" alt=""> di posting <?= time_ago($b->created_date); ?></span>
                                        <a href="<?= base_url(); ?>blog/baca/<?= $b->slug; ?>" target="_blank">
                                            <h5 style="color: #898989; padding-top: 10px;"><?= substr(strip_tags($b->content), 0, 100); ?>...</h5>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- slider article_end -->

<!-- testimonial_area_start -->
<div class="testimonial_area overlay">
    <div class="container">
        <img src="<?= base_url(); ?>assets/img/TRACKS.png" alt="" style="position: absolute;width: 75px;top: 13%;right: 0;;">
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
                                                <h4 style="color: black;font-size: 38px; font-weight: 600;"><?= $t->title1; ?></h4>
                                                <h4 style="color: #00297B; font-size: 38px; font-weight: 600;"><?= $t->title2; ?></h4>
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
</div>
<!-- testimonial_area_end -->