<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/icon_track_new.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css"> -->

    <!-- Aos Animation -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/aos/aos.css">
    <style>
        .section-padding-member {
            padding-top: 70px;
            padding-bottom: 50px;
        }

        .member .member-form .regis-h2 {
            border-bottom: 1px solid #a2a2a2;
            line-height: 45px;
            color: #0D438D;

        }

        label {
            margin-bottom: 0;
        }

        .member .alert {
            color: #000;
            /* background-color: #03e7ff; */
        }

        .member .alert span {
            font-size: 13px;
        }

        .close::before,
        .close::after {
            left: 0;
            content: ' ';
            height: 0;
            width: 0;
        }

        .member .member-form .control-label {
            color: #0D438D;
        }

        .member .member-form .form-control {
            color: #0D438D;
        }

        .member .member-form .control-label span {
            color: red;
        }
    </style>
</head>

<body>
    <section class="member section-padding-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>
                    <form action="<?= base_url(); ?>member/proses" method="post">
                        <div class="member-form">
                            <h2 class="regis-h2">Registrasi</h2>
                            <div class="row">
                                <div class="col-lg-6 modal-col-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Nama Depan <span>*</span></label>
                                            <input type="text" name="first_name" placeholder="Nama Depan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Nama Belakang <span>*</span></label>
                                            <input type="text" name="last_name" placeholder="Nama Belakang" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Nama Perusahaan <span>*</span></label>
                                            <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Alamat Email <span>*</span></label>
                                            <input type="email" name="email" placeholder="Alamat Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Username <span>*</span></label>
                                            <input type="text" name="username" placeholder="Username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Password <span>*</span></label>
                                            <input type="password" id="pass" name="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class='alert alert-primary fade show alert-dismissible mt-2'>
                                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                                <strong>Tips untuk password yang aman:</strong><br>
                                                <span>Minimal 12 digit dan berisi huruf besar, kecil, angka dan simbol.</span>
                                                <span>Contoh: P4ssw0rd123#$</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Konfirmasi Password <span>*</span></label>
                                            <input type="password" id="pass2" name="password2" placeholder="Konfirmasi Password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Alamat 1 <span>*</span></label>
                                            <input type="text" name="alamat1" class="form-control" placeholder="Alamat 1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Alamat 2 <span>*</span></label>
                                            <input type="text" name="alamat2" class="form-control" placeholder="Alamat 2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Kota <span>*</span></label>
                                            <input type="text" name="kota" class="form-control" placeholder="Kota">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Provinsi <span>*</span></label>
                                            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Kode Pos <span>*</span></label>
                                            <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Negara <span>*</span></label>
                                            <select name="negara" class="form-control" style="height: 50px;">
                                                <option selected disabled>--Pilih Negara--</option>
                                                <option value="Indonesia">Indonesia</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Paket yang diinginkan <span>*</span></label>
                                            <select name="service" class="form-control" style="height: 50px;">
                                                <option selected disabled>--Pilih Paket--</option>
                                                <?php foreach ($this->db->query("SELECT * from tbl_hargatrack ORDER BY id ASC")->result() as $key) { ?>
                                                    <option value="<?= $key->id; ?>"><?= $key->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">No Handphone / WhatsApp <span>*</span></label>
                                            <input type="text" name="telp" class="form-control" placeholder="No Handphone / WhatsApp" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="member-footer" style="text-align: center; ">
                                <button type="submit" id="submit" class="save btn btn-primary">Register</button>
                            </div>
                            <p>Sudah punya akun?<a href="<?= base_url(); ?>" style="color: #00297B;">Login Sekarang</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
        $('#pass2').change(function() {
            var pass = $(this).val();
            var pass2 = $('#pass').val();
            if (pass != pass2) {
                alert('Password tidak sama !!!');
                $("#pass2").val('');
                $("#pass2").focus();
            }

        });

        // $(document).ready(function() {
        //     $('#submit').click(function() {
        //         base_url = "<?= base_url('member'); ?>";
        //         var pass = $('#pass').val();
        //         var pass2 = $('#pass2').val();
        //         if (pass != pass2) {
        //             alert("password tidak sama!");
        //             window.location = base_url;
        //         }
        //     });
        // });

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
    </script>


</body>

</html>