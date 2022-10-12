<style type="text/css">
.prof{
    margin-top: -70px;
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
      <img class="img-responsive" src="<?=base_url();?>assets/img/profile.png" alt="First slide">
    </div>
  </div>
</div>


<div id="heading-breadcrumbs2" class="no-mb">
    <div class="container"  data-animate="fadeInUp" style="margin-top: -90px;">
      <section>

        <div class="container">
            <br><br><br><br><br>
              <h3 style="color:#000">Profil</h3>
                        
                    
            

            <div class="row">
            
                    <div class="col-md-3">
                        
                        <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" style="width: 200px;text-align: center;font-size: 13px;" href="#dashboard-2" role="tab" data-toggle="tab">
                                    Company Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#schedule-2" style="width: 200px;text-align: center;font-size: 13px;" role="tab" data-toggle="tab">
                                   Visi & Misi
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane active prof" id="dashboard-2">
                                <center><h2 style="color: #000;">Company Profile</h2></center>
                                <!-- <br> -->
                                <?php foreach($this->db->query("SELECT * FROM tbl_profile where posisi='Company Profile'")->result() as $g) { ?>    
                                <img class="img-responsive" src="https://ant.digitalindo.co.id/upload/profile/<?=$g->image;?>">
                                <br>
                                <?=$g->content;?>
                                 <?php
                                }
                                ?>
                              
                            </div>
                            <div class="tab-pane prof" id="schedule-2">
                                <center><h2 style="color: #000;">Visi & Misi</h2></center>
                              <!-- <br> -->
                                <?php foreach($this->db->query("SELECT * FROM tbl_profile where posisi='Visi & Misi'")->result() as $g) { ?>    
                                <img class="img-responsive" src="https://ant.digitalindo.co.id/upload/profile/<?=$g->image;?>">
                                <br>
                                <?=$g->content;?>
                                 <?php
                                }
                                ?>
                            </div>
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
