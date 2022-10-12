<style>
    .pages li::before {
        content: "";
        font-family: FontAwesome;
        font-size: 13px;
        margin-right: 5px;
        color: #fff;
    }

    .table-bordered td,
    .table-bordered th {
        background: #fff;
        border-right: 1px solid #e8e8e8;
    }

    .x {
        position: absolute;
        right: 64px;
        background: #BAB5B5;
        width: 25px;
        height: 25px;
        border-radius: 100%;
        padding: 1px;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border: 1.6px solid #00297B;
        /* border-color: #80bdff; */
        outline: 0;
        /* box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25) */
    }

    .popup_box .control-label {
        color: #0D438D;
        font-weight: 500;
    }

    .modal-col-6 {
        border-right: 1px solid #bdbdbd;
    }

    .save {
        background: linear-gradient(109.88deg, #0D438D 11.01%, #00132E 100%);
        height: 50px;
        border-radius: 10px;
        border: 0;
        color: #fff;
        font-weight: 600;
    }
</style>

<!-- footer -->
<footer class="footer footer_bg_1" data-aos="fade-up" data-aos-duration="100">
    <div class="footer_top">
        <div class="mx-auto" style="width: 90%;">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <img src="<?= base_url(); ?>assets/img/track_footer.png" style="width: 100%; margin-left: -13%; margin-top: -20%;">
                            <p style="margin-top: -10%; line-height: 18px; font-size: 14px;" title="<?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $website->description))) ?>">
                                <?= ucfirst(strtolower(str_replace(array('<p>', '</p>'), array('', ''), $website->description))) ?>
                            </p>
                        </div>
                    </div>
                </div>
                <style>
                    .footer_text {
                        font-size: 14px;
                    }
                </style>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Company
                        </h3>
                        <a href="<?= base_url('kontak'); ?>" title="Klik untuk melihat lokasi" target="_blank">
                            <p class="footer_text">Address : <?= $website->address; ?></p>
                        </a>
                        <p class="footer_text" title="<?= $website->phone; ?>">Call Us : <?= $website->phone; ?></p>
                        <p class="footer_text" title="<?= $website->email; ?>">Email : <?= $website->email; ?></p>
                        <p class="footer_text" title="<?= $website->working_hours; ?>">Mon Sat : <?= $website->working_hours; ?></p>
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Pages
                        </h3>
                        <ul class="pages">
                            <li><a href="<?= base_url('welcome'); ?>">Beranda</a></li>
                            <li><a href="<?= base_url('produk'); ?>"> Fitur</a></li>
                            <li><a href="<?= base_url('prices'); ?>">Harga</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Contact Us
                        </h3>



                        <?php foreach ($sosmed as $sosis) { ?>
                            <a href="<?= $sosis->link; ?>" title="<?= $sosis->name; ?>" style="color: #fff; padding-right: 10px; font-size: 25px;">
                                <i class="fa <?= $sosis->icon; ?>"></i>
                            </a>
                        <?php } ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>
<!-- footer -->

<style>
    @media (max-width: 767px) {

        /* line 121, C:/Users/SPN Graphics/Desktop/CL September/Edu mark/207 Education/HTML/scss/_bradcam.scss */
        .popup_box {
            width: 100%;
            padding: 45px 30px;
        }

    }
</style>


<!-- form itself end-->
<form action="<?php echo base_url() . 'Welcome/add_user'; ?>" id="test-form" method="post" class="white-popup-block mfp-hide form-horizontal animated zoomIn ">
    <div class="popup_box mx-auto">
        <div class="popup_inner">
            <h3 style="font-weight: 600; padding-left: 15px;">DAFTAR</h3>
            <table>
                <div class="row">
                    <div class="col-lg-6 modal-col-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">No. Telp</label>
                                <input type="text" name="telp" placeholder="No. Telp" class="form-control" required onkeypress="return hanyaAngka(event)">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Nama Logistics</label>
                                <input type="text" name="namaLogistics" placeholder="Nama Logistics" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Domisili</label>
                                <input type="text" name="domisili" class="form-control" placeholder="Domisili" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Paket yang diinginkan</label>
                                <!-- <input type="text" name="domisili" class="form-control" placeholder="Domisili" required> -->
                                <select name="paket" class="form-control">
                                    <option selected disabled>--Pilih Paket--</option>
                                    <?php foreach ($harga as $key) { ?>
                                        <option value="<?= $key->name; ?>"><?= $key->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label">Dari mana Anda mengetahui informasi tentang Digitalindo?</label>
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="col-sm-12">

                                <div id="recaptcha" class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>" data-callback="enableBtn"></div>
                            </div>
                        </div> -->
                        <div class="modal-footer">
                            <button type="submit" id="btn-validate" class="save">Save changes</button>
                        </div>
                    </div>
                </div>
            </table>
</form>
</div>
</div>
</form>
<!-- form itself end -->


<!-- <script>
    function enableBtn() {
        document.getElementById("btn-validate").disabled = false;
    }
</script> -->

<!-- JS here -->
<script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ajax-form.js"></script>
<script src="<?= base_url(); ?>assets/js/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/js/scrollIt.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/js/nice-select.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.slicknav.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins.js"></script>
<script src="<?= base_url(); ?>assets/js/gijgo.min.js"></script>

<!--contact js-->
<script src="<?= base_url(); ?>assets/js/contact.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.form.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/js/mail-script.js"></script>

<script src="<?= base_url(); ?>assets/js/main.js"></script>

<!-- Aos animation -->
<script src="<?= base_url(); ?>assets/aos/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    $("#pop").click(function() {
        $("#pop").css("display", "none");
    });

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>