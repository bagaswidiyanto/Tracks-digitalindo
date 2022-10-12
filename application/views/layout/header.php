<style>
    .tracks {
        margin-top: 15px;
    }

    @media only screen and (max-width : 320px) {
        .tracks {
            margin-top: 17px;
        }
    }

    /* zoom 200% */
    @media only screen and (min-width:360px) and (max-width:780px) {
        .tracks {
            margin-top: 7px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .tracks {
            margin-top: 0px;
        }
    }

    /* zoom 500% */
    @media only screen and (min-width:150px) and (max-width:400px) {
        .tracks {
            margin-top: -8px;
        }
    }
</style>

<?php
$hal = $this->uri->segment(1);
?>
<header>
    <?php if ($hal == 'welcome' || $hal == '') { ?>
        <!-- header untuk halaman utama -->
        <style>
            .header-area .main-header-area.sticky .imgHeader {
                border: 1px solid #fff;
                border-radius: 10px;
            }
        </style>

        <div class="header-area">
        <?php } else { ?>
            <!-- header untuk halaman lainnya yang beda warna -->
            <style>
                .header-area .main-header-area .main-menu ul li a {
                    color: #fff;
                }

                .header-area .main-header-area .main-menu ul li a::before {
                    /* border: 2px solid #FFC602; */
                    background-color: #FFC602;
                }

                .header-area .main-header-area .main-menu ul li a:hover {
                    color: #FFC602;
                }

                .header-area .main-header-area .main-menu ul li a.active {
                    color: #FFC602;
                }

                .header-area .main-header-area .imgHeader {
                    border: 1px solid #fff;
                    border-radius: 10px;
                }

                .header-area .main-header-area.sticky .imgHeader {
                    border: 1px solid #fff;
                    border-radius: 10px;
                }

                .header-area .main-header-area.sticky .tracks {
                    color: #fff;
                    margin-top: 10px;
                }

                .tracks {
                    color: #fff;
                }

                @media (max-width: 767px) {
                    .header-area .main-header-area.sticky .imgHeader {
                        border: 1px solid #fff;
                        border-radius: 3px;
                    }

                    .header-area .main-header-area .imgHeader {
                        border: 1px solid #fff;
                        border-radius: 3px;
                    }

                    .header-area {
                        padding-top: 0;
                        height: 54px;
                    }

                    /* .tracks {
                        margin-top: 20px;
                    } */
                }

                /* zoom 500% */
                @media only screen and (min-width:150px) and (max-width:400px) {
                    /* .tracks {
                        margin-top: -8px;
                    } */

                }

                /*@media only screen and (min-width:1024px) and (max-width:1600px) {*/
                /* #navigation{
                         padding: 0 0 0 0 !important;
                          justify-content: end;
                          display: flex;
                   }*/
                /*}*/
            </style>
            <div class="header-area" style="background-color: #00297B;">
            <?php } ?>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="#">
                                    <p class="tracks" style="font-weight: 600;"><img src="<?= base_url(); ?>assets/img/icon_track_new.png" width="30%" class="imgHeader"> TRACKS</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <?php foreach ($this->db->query("SELECT * FROM tbl_navigationtrack WHERE parent = 0 AND status = 1")->result() as $key) { ?>
                                            <li><a class="<?php
                                                            if ($key->slug != "") {
                                                                if ($this->uri->segment(1) == $key->slug) {
                                                                    echo "active";
                                                                }
                                                            } else {
                                                                if ($this->uri->segment(1) == "") {
                                                                    echo "active";
                                                                }
                                                            }
                                                            ?> " href="<?= ($key->title != 'Home') ? base_url() . strtolower($key->slug) : base_url() ?>" onclick="window.location.href='<?= base_url() . $key->slug; ?>/';"><?= $key->title ?></a></li>
                                        <?php } ?>

                                        <!-- <li><a class="<?= ($hal == 'fitur') ? 'active' : ''; ?>" href="<?= base_url('fitur'); ?>">Fitur</a></li>

                                        <li><a class="<?= ($hal == 'harga') ? 'active' : ''; ?>" href="<?= base_url('harga'); ?>">Harga</a></li>
                                        <li><a class="<?= ($hal == 'berita') ? 'active' : ''; ?>" href="<?= base_url('berita'); ?>">Berita</a></li>
                                        <li><a class="<?= ($hal == 'api') ? 'active' : ''; ?>" href="<?= base_url('api'); ?>">API Doc</a></li> -->
                                        <?php
                                        if ($this->session->userdata('username')) {
                                        ?>
                                            <li><a href="<?= base_url('members'); ?>" class="">Member</a></li>
                                        <?php } else { ?>
                                            <li><a href="#test-form" class="login popup-with-form ">Member</a></li>
                                        <?php } ?>
                                        <!-- <li><a href="https://newapps.digitalindo.co.id/login.php">Login</a></li> -->
                                        <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>

                                            <ul class="submenu">

                                                <li><a href="course_details.html">course details</a></li>

                                                <li><a href="elements.html">elements</a></li>

                                            </ul>

                                        </li> -->


                                        <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>

                                            <ul class="submenu">

                                                <li><a href="blog.html">blog</a></li>

                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a href="<?= base_url(); ?>login/logout" class="boxed_btn_orange mx-auto" style="width: 200px;">
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>