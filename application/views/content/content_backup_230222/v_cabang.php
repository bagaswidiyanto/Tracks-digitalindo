

 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url();?>assets/img/cabang.png" style="width:100%;height: auto;">
    </div>
  </div>
</div>



 <!-- *** LOGIN MODAL END *** -->
        
        <!-- /.bar -->

<?
$branch = $this->input->post('branch_h');

$brr = @$_GET['s']==''? '' : @$_GET['s'];

if($brr!=''){
  $serv=$this->db->query("SELECT id FROM tbl_branch where id='".$brr."' ");
  $services = $serv->row();
  $id_branch = $services->id;
}else{
  $id_branch ='';
}

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>



<div id="heading-breadcrumbs2" class="no-mb">
            <div class="container space"  data-animate="fadeInUp" >
                <div class="row">
                    <div class="heading">

                                
                                <div class="col-md-4 col-sm-4 col-xs-4  branch-section" style="float:left; background-color: #333433">
                                  <div class="branch-section2-search">
                                    <input type="text" id="branch" name="branch" class="form-control" placeholder="Cari" style="height: 40px;font-size: 18px;padding: 10px;border: none;" >
                                  </div>
                                  <div class="branch-section2" id="show-branch-list">
                                    <?foreach($this->db->query("SELECT * FROM tbl_branch  order by id ASC")->result() as $branch) { ?>
                                      <?
                                      $i=0;
                                      $first_id='';
                                      if($i==0){
                                        $first_id= $branch->id;
                                      }
                                      ?>
                                      <div class="branch-section3">
                                        <h4 style="font-weight: bold;color: #2f3562;border-bottom: solid 5px #333433"><a onclick="getBranch('<?=$branch->id?>')" style="cursor: pointer; color: #F8F9FC;"><?=$branch->kota;?></a></h4>
                                        <p style="color: #F8F9FC"><?=$branch->alamat1;?></p>
                                        <p style="color: #F8F9FC"><?='Email. '.$branch->email;?></p>
                                        <p style="color: #F8F9FC"><?=$branch->telepon;?></p>
                                      </div>
                                    <?
                                    $i++;
                                    }?>
                                  </div>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-8" id="show-branch" style=" margin-left:auto;" style="float:right;">
                                 
                                </div>

                               </div>

                </div>
            </div>
        </div>

  <?
$url =  base_url().'getbranch';
$url2 = base_url().'getbranchlist';
?>                    
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
 <script>
 $(".select2").select2();

$( document ).ready(function() {
  var brr = '<?php echo $id_branch;?>';  
    if(brr!=''){
      getBranch(brr);
    }else{
      getBranch(<?php echo $first_id;?>);
    }

 });  

function viewDetail(id)
{
       
     var base_url="<?php echo base_url(); ?>";
   $.ajax({
            type    : "POST",
            url     : base_url+"detail",
            data    : "id="+id,
            dataType:'json',
            async :true,
            success: function(response) {
             

                $("#search").html(response.tampil);
               
              
              

            }
        });   
}

function getBranch(id){
    base_url = '<?=$url;?>';
    var branch = id;
    $('#alert').html('');
    $('#show-branch').html('');
    $("#show-branch").LoadingOverlay("show");
    if(branch!=''){
        
        $.ajax({
            type: 'POST',
            data: {'branch':branch},
            url: base_url,
            success: function (html) {
                $("#show-branch").LoadingOverlay("hide", true);
                $('#show-branch').html(html);
            }
        });
    }else{
        $("#show-branch").LoadingOverlay("hide", true);
    }
}

$('input#branch').bind("keyup change keypress click",function(event) {
    base_url = '<?=$url2;?>';
    var branch =$('#branch').val();
    // $("#show-branch-list").LoadingOverlay("show");
      $.ajax({
              type: 'POST',
              data: {'branch':branch},
              url: base_url,
              success: function (html) {
                  // $("#show-branch-list").LoadingOverlay("hide", true);
                  $('#show-branch-list').html(html);
              }
          });

});
 </script>
