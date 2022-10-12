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

.search {
    color: black;
    border-radius: 20px;
    border: 1px solid #868686;
    padding-left: 13px;
    padding-right: 25px;
}

.button {
    background: #ffffff00;
    border: 0px;
    color: #FFC602;
    position: absolute;
    margin-left: -28px;
    padding: 2px 4px;
}

.pBlue {
    line-height: 50px;
}

@media (max-width: 767px) {
    .berita {
        width: 50%;
    }
}

/* zoom 400% */
@media only screen and (min-width:200px) and (max-width:500px) {
    .pBerita {
        font-size: 10px;
        line-height: 0px;
        padding-top: 48px;
    }

    .pBlue {
        font-size: 10px;
        line-height: 0;
    }

    .pText {
        font-size: 6px;
        line-height: 7px;
    }

}
</style>
<!-- Berita start -->
<div class="slider_area" id="slider_area" style="background-color: #F8F8F8;">
    <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
        <?php foreach ($bannerImage as $b) { ?>
        <img src="https://digitalindo.co.id/admin/upload/banner_track/<?= $b->image ?>"
            style="position: absolute; width: 100%;">
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class=" align-items-center justify-content-center">
                        <?php foreach ($artikel as $artikel) { ?>
                        <div class="slider_info berita text-center">
                            <p class="pBerita animated fadeInLeft"><?= $artikel->title1; ?></p>
                            <p class="pBlue animated fadeInRightBig"><?= $artikel->title2; ?></p>
                            <p class="pText animated fadeInUpBig" style="color: black;">
                                <?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $artikel->description))) ?>
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Beritaend -->


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
<!--================Berita area  =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form role="search" method="get" action="<?= base_url(); ?>blog" data-aos="fade-up"
                    data-aos-duration="1000" style="text-align: center; padding-bottom: 50px;">
                    <span><input class="search" name="search" type="text" placeholder="Cari Berita..."></span>
                    <span><button class="button" type="submit"><i class="fa fa-search"></i></button></span>
                </form>
            </div>
        </div>
        <div class="row">
            <?php
            if (($blog->num_rows()) > 0) {
                foreach ($blog->result() as $b) {
            ?>
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="2000"
                style="padding-bottom: 30px;">
                <div class="testmonial_text" title="<?= $b->Title; ?>"
                    style="background: #fff; padding: 15px;  border-radius: 20px; box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.05); height: 23rem;">
                    <a href="<?= base_url(); ?>berita/baca/<?= $b->slug; ?>" target="_blank">
                        <div class="author_img">
                            <img src="https://digitalindo.co.id/admin/upload/news_post/<?= $b->image; ?>"
                                style="width: 100%; height: 172px; border-radius: 20px;">
                        </div>
                    </a>

                    <?php if (strlen($b->Title) > 40) { ?>
                    <a href="<?= base_url(); ?>berita/baca/<?= $b->slug; ?>" target="_blank">
                        <h3><?= substr($b->Title, 0, 40); ?>...</h3>
                    </a>
                    <?php } else if (strlen($b->Title) <= 40) { ?>
                    <a href="<?= base_url(); ?>berita/baca/<?= $b->slug; ?>" target="_blank">
                        <h3><?= substr($b->Title, 0, 40); ?></h3>
                    </a>
                    <?php } ?>

                    <span style="color: #898989;"><img src="<?= base_url(); ?>assets/img/time_icon.svg" alt=""> di
                        posting <?= time_ago($b->created_date); ?></span>
                    <a href="<?= base_url(); ?>berita/baca/<?= $b->slug; ?>" target="_blank">
                        <h5 class="content" style="color: #898989; padding-top: 10px;">
                            <?= substr(strip_tags($b->content), 0, 100); ?>...</h5>
                    </a>
                </div>
            </div>
            <?php
                }
            } else {
                ?>
            <div class="col-md-4 col-sm-6">
                <div class="box-image-text blog">
                    <?php
                        echo "Maaf Berita tidak ditemukan";
                        ?>
                </div>
            </div>

            <?php
            }
            ?>

        </div>
        <nav class="blog-pagination justify-content-center d-flex" data-aos="fade-up" data-aos-duration="1000">
            <?php echo $pagination; ?>

        </nav>

    </div>
</section>
<!--================Berita area end =================-->