<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url();?>assets/img/galeri.png" style="width:100%;height: auto;">
    </div>
  </div>
</div>


 <!-- *** LOGIN MODAL END *** -->
        <div id="heading-breadcrumbs2" class="no-mb" style="background-color: #faf7f7;margin-top: -50px;">
            <div class="container space"  data-animate="fadeInUp" >
                <div class="row"><center>
                    <div class="">
                                <h1 style="margin-bottom: 30px;color: #000;">Dokumentasi Kegiatan</h1>
                                <div data-animate="fadeInUp"> 
                                    <div class="form-group" >
                                       
                                  <!--     <div class="col-md-12 col-sm-12" style="text-align:center;margin-bottom: 20px;color: #fff;">

                                         <div class="service2">
                                            <h5>Armada</h5>
                                        </div>

                                    
                                        <img src="<?=base_url();?>assets/img/service2.png" style="width: 100%;height: auto;" >
                                       
                                      </div> -->

                                      <div class="col-md-12 col-sm-12 gallery" style="text-align:center;margin-bottom: 20px;">

                                      <div >
                                            <ul class="grid">
                                                      <?php
                                                    foreach($gallery as $a){
                                                    ?>
                                              <li>
                                                  <a href="https://ant.digitalindo.co.id/upload/galeri/<?=$a->image;?>" data-fancybox="gallery">
                                                  <img src="https://ant.digitalindo.co.id/upload/galeri/<?=$a->image;?>" alt="">
                                                  </a>
                                              </li>
                                            
                                               <?php
                                                  }
                                                ?>
                                            </ul>

                                            <!-- <ul class="grid">
                                              <li>
                                                   <a href="<?=base_url();?>assets/img/truk/5.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/5.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="<?=base_url();?>assets/img/truk/6.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/6.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                   <a href="<?=base_url();?>assets/img/truk/7.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/7.jpg" alt="">
                                                  </a>
                                              </li>
                                              <li>
                                                   <a href="<?=base_url();?>assets/img/truk/8.jpg" data-fancybox="gallery">
                                                  <img src="<?=base_url();?>assets/img/truk/8.jpg" alt="">
                                                  </a>
                                              </li>
                                            </ul> -->
                                       
                                      </div>

                                     

                                     
                            </div>
                             
                            </center>
                </div>
            </div>
        </div>
        <!-- /.bar -->