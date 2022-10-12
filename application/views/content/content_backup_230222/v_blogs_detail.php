        <div id="heading-breadcrumbs2" class="no-mb" style=" background-size: 90%; padding-top: 130px; padding-bottom: 70px;">
            <div class="container space" style="margin-top: -10px;">
                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-12" id="blog-listing-small" data-animate="fadeInUp">

                        <div class="row">
                            <div class="col-md-12 min20" id="blog-post">
                                <div class="text-center">
                                    <h2><?= $blog->Title; ?></h2>
                                </div>

                                <style>
                                    .image img {
                                        width: 70% !important;
                                    }
                                </style>

                                <!--<p class="lead">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>-->
                                <div class="image">
                                    <center style="padding-top: 30px;">
                                        <img src="https://digitalindo.co.id/admin/upload/news_post/<?= $blog->image; ?>" alt="" class="img-responsive">
                                    </center>
                                </div><br />
                                <p class="text-muted text-uppercase mb-small text-left" style="padding-top: 20px; padding-bottom: 10px;"><i class='fa fa-clock-o'></i><?= date('H:i, d M Y', strtotime($blog->created_date)); ?></p>

                                <div id="post-content">
                                    <?= $blog->content; ?>

                                </div>
                                <!-- /#post-content -->


                                <!-- /#comments -->



                                <!-- /#comment-form -->


                            </div>
                        </div>

                        <ul class="pager">
                            <li class="previous"><a href="<?= base_url('berita'); ?>" style="color: #00297B;">&larr; Back</a>
                            </li>

                        </ul>



                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3" data-animate="fadeInRight">

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->

                        <!--      <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">PENCARIAN</h3>
                            </div>

                            <div class="panel-body plus20">
                                <form role="search" method="get" action="<?= base_url(); ?>blog">
                                    <div class="input-group" >
                                        <input type="text" class="form-control" name="search" placeholder="Cari" required="required">
                                        <span class="input-group-btn">

		    <button type="submit" class="btn btn-template-main" style="color:#fff;"><i class="fa fa-search"></i></button>

		</span>
                                    </div>
                                </form>
                            </div>
                        </div>
 -->
                        <!--  <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading ">
                                <h3 class="panel-title">KATEGORI</h3>
                            </div>

                            <div class="panel-body plus20">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="berita.html">Berita</a>
                                    </li>
                                    <?php
                                    //foreach($this->db->get('tbl_kategori_berita') as $kb){
                                    ?>
                                    <li><a href="#"><?= $kb->namaKategori; ?></a>
                                    </li>
                                     <?php
                                        //}
                                        ?>
                                    
                                   
                                </ul>
                            </div>
                        </div> -->



                        <!-- *** MENUS AND FILTERS END *** -->

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
            </div>
        </div>
        <!-- /.bar -->