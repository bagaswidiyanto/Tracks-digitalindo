<style type="text/css">
  .slick-clients {
    position: relative;
    z-index: 60;
    color: #0000;
  }

  .owl-pagination {
    background-color: #faf7f7;
  }
</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url(); ?>assets/img/customer.png" style="width:100%;height: auto;">
    </div>
  </div>
</div>
<br>

<section id="demos" style="background-color: #faf7f7;">
  <div class="container">
    <center>
      <h1 style="color: #000">Customer Kami</h1>
    </center>
    <div class="row">
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme" style="color:#000">
          <div class="item">
            <img src="<?= base_url(); ?>assets/img/custo1.png" class="">
          </div>
          <div class="item">
            <img src="<?= base_url(); ?>assets/img/custo2.png" class="">
          </div>
          <div class="item">
            <img src="<?= base_url(); ?>assets/img/custo3.png" class="">
          </div>
          <div class="item">
            <img src="<?= base_url(); ?>assets/img/custo4.png" class="">
          </div>
          <div class="item">
            <img src="<?= base_url(); ?>assets/img/custo5.png" class="">
          </div>
          <div class="item">
            <img src="<?= base_url(); ?>assets/img/custo6.png" class="">
          </div>
        </div>
        <!--         <a class="button secondary play">Play</a> 
          <a class="button secondary stop">Stop</a> 
          <h3 id="overview">Overview</h3>
          <p>Autoplay plugin has three options:</p> -->
        <!-- <pre><code>//default settings:
autoplay:false
autoplayTimeout:5000
autoplayHoverPause:false</code></pre>
          <p>In this example i&#39;ve added two buttons with custom events for play and stop:</p>
          <pre><code>var owl = $(&#39;.owl-carousel&#39;);
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$(&#39;.play&#39;).on(&#39;click&#39;,function(){
    owl.trigger(&#39;play.owl.autoplay&#39;,[1000])
})
$(&#39;.stop&#39;).on(&#39;click&#39;,function(){
    owl.trigger(&#39;stop.owl.autoplay&#39;)
})</code></pre> -->
        <script>
          $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
              items: 5,
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

<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/js/slick.js?>"></script> -->