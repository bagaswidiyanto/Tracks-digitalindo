<style type="text/css">
.slick-clients {
	position: relative;
	z-index: 60;
	color: #0000;
}

.owl-pagination{
  background-color: #faf7f7;
}



</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?=base_url();?>assets/img/transporter.png" style="width:100%;height: auto;">
		</div>
	</div>
</div>


 <section id="demos" style="background-color: #faf7f7;">
  <div class="container">
    <!-- <center><h1 style="color: #000">Customer Kami</h1></center> -->
<br><br><br>
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme" style="color:#000">
            <div class="item" style="width: 90%;margin-left: 10px;">
              <img src="<?=base_url();?>assets/img/tronton.png" class="">
              <br>
              <center><h5 style="color: #000;"><strong>Tronton 10 Meter</strong></h5></center>
              <center><h6 style="color: #000;">15-18 TON</h6></center>
            </div>
            <div class="item" style="width: 90%;margin-left: 10px;">
              <img src="<?=base_url();?>assets/img/diesel.png" class="">
              <br>
              <center><h5 style="color: #000;"><strong>COLT Diesel Double</strong></h5></center>
              <center><h6 style="color: #000;">4-5 TON</h6></center>
            </div>
            <div class="item" style="width: 90%;margin-left: 10px;">
              <img src="<?=base_url();?>assets/img/engkel2.png" class="">
              <br>
              <center><h5 style="color: #000;"><strong>COLT Diesel Engkel</strong></h5></center>
              <center><h6 style="color: #000;">2 TON</h6></center>
            </div>
          </div>

          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
        </div>
      </div>
      <br><br>
    </div>
    </section>

<!-- <script type="text/javascript" src="<?=base_url();?>assets/js/slick.js?>"></script> -->
