<div id="content">
    <section class="bar background-gray no-mb">
        <!-- /.container -->
    </section>
    <section class="bar background-pentagon no-mb min120">
        <div class="container" id="contact" data-animate="fadeInUp">
            <div class="row min30">
                <div class="col-md-12" align="center">
                    <center>
                    </center>
                    <section>
                        <div class="heading" style="padding: 150px 0 100px 0;">
                            <h1>Selamat Datang <?php echo $this->session->userdata('username'); ?></h1>
                            <h3><strong style="font-size: 34px;">Sukses Mengirim Pesan</strong> <br>Terima Kasih <br />Kami akan segera menghubungi anda secepatnya.</h3><br />
                            <h3><i>Successfully Sending Message <br>Thank You <br>We will contact you as soon as possible.</i></h3>
                            <br><br>
                            <a class="btn btn-primary " href="<?= base_url() ?>" style="line-height: 37px;"><span>Kembali</span></a>
                        </div>
                    </section>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#contact.container -->
    </section>
</div>
<!-- /#content -->