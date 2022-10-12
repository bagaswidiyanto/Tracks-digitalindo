 <style type="text/css">
   .service ol{
    font-weight:400;
    color:#fff;
  }

  .prof{
    margin-top: -80px;
} 

@media screen and (max-width: 768px) {
.prof{
    margin-top: -20px;
} 
} 
</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-responsive" src="<?=base_url();?>assets/img/service_ant.png" alt="First slide">
    </div>
  </div>
</div>


<div id="heading-breadcrumbs2" class="no-mb">
    <div class="container"  data-animate="fadeInUp" style="margin-top: -60px;">
      <section>

        <div class="container">
            <br><br><br><br><br>
              <h3 style="color:#000">Service</h3>
                        
                    
            

            <div class="row">
            
                    <div class="col-md-3">
                        
                        <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                          <?php foreach($this->db->query("SELECT * FROM tbl_service group by id order by id asc")->result() as $g) { ?>  
                            <li class="nav-item">
                                <a class="nav-link active" style="width: 200px;text-align: center;font-size: 12px;" href="#tes<?=$g->id?>" role="tab" data-toggle="tab">
                                    <?=$g->nama?>
                                </a>
                            </li>
                          <?php }?>
                          
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane active prof" id="tes2">
                               <?php foreach($this->db->query("SELECT * FROM tbl_service where id='2'")->result() as $g) { ?>
                                <center><h2 style="color: #000;"><?=$g->nama?></h2></center>
                        
                                <img class="img-responsive" src="https://ant.digitalindo.co.id/upload/service/<?=$g->foto;?>">
                                <br>
                                <?=$g->deskripsi;?>
                                 <?php
                                }
                                ?>
                              
                            </div>
                            <?php foreach($this->db->query("SELECT * FROM tbl_service where id!=2 group by id order by id asc")->result() as $g) { ?>  

                              <div class="tab-pane prof" id="tes<?=$g->id?>">
                                <center><h2 style="color: #000;"><?=$g->nama?></h2></center>
                              <!-- <br> -->
                               
                                <img class="img-responsive" src="https://ant.digitalindo.co.id/upload/service/<?=$g->foto;?>">
                                <br>
                                <?=$g->deskripsi;?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
        </div>

        <br><br><br>

        </div>
        <!-- /.container -->

    </section>

</div>
</div>
<!-- /.bar -->
