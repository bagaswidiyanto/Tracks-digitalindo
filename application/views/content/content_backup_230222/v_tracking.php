<style>


 a:focus, a:hover {
    text-decoration: none;
 	color: #fff;
}

.fa-inverse {
    color: #282828;
}


</style>
<div style="background:  #282828;
padding: 20px 0;  background-size: 90%; " class="no-mb">


            <div class="container space"  data-animate="fadeInUp" style="margin-top: -10px;">
                <div class="row"><center>
                    <div class="heading">
					<h3 class="h-bold">TRACKING</h3>
			<div data-animate="fadeInUp"> 
                           
                        </div>
                     </div>



			

					<h3>Tracking AWB No: <?php echo $barcode;?></h3>

					<?php
					if($query->num_rows() > 0){

					 foreach ($query->result_array() as $res) { ?>
					<fieldset>	
					<legend>Keterangan Pengirim</legend>
					<table style="width:50%;margin-left:15%;">
						<tr>

							<td width="5%">
                            	<span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-barcode fa-stack-1x fa-inverse size17"></i>
                                </span> <a  class="size15 link">No. Resi</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Konid']; ?></td>
						</tr>	
						<tr>
							<td>
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-user fa-stack-1x fa-inverse size17"></i>
                                </span> <a  class="size15 link" >Nama Pengirim</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['namaPengirim']; ?></td>
						</tr>
						<tr>
							<td>
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-map-marker fa-stack-1x fa-inverse size17"></i>
                                </span> <a  class="size15 link" >Kota Asal</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['asal']; ?></td>
						</tr>
					</table>
				</fieldset>
				<br>
				<fieldset>
				    <legend>Keterangan Penerima</legend>
						<table style="width:50%;margin-left:15%;">
						<tr>
							<td width="5%">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-user fa-stack-1x fa-inverse size17"></i>
                                </span><a class="size15 link" >Nama Penerima</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['namaPenerima']; ?></td>
						</tr>	
						<tr>
							<td>
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-map-marker fa-stack-1x fa-inverse size17"></i>
                                </span> <a class="size15 link">Kota Tujuan</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['tujuan']; ?></td>
						</tr>
						<tr>
							<td>
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-cubes fa-stack-1x fa-inverse size17"></i>
                                </span> <a class="size15 link">Jumlah Barang</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Koli']; ?> Koli</td>
						</tr>
						<tr>
							<td>
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x size25"></i>
                                <i class="fa fa-balance-scale fa-stack-1x fa-inverse size17"></i>
                                </span> <a  class="size15 link">Berat</a>
                            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Kilo']; ?> Kg</td>
						</tr>		
					</table>
				</fieldset>
				<br>
				<fieldset>
				    <legend>Informasi Penerima Barang</legend>
						<table style="width:50%;margin-left:15%;">
						<tr>
							<td width="5%">
				                <span class="fa-stack fa-lg">
				                <i class="fa fa-circle fa-stack-2x size25"></i>
				                <i class="fa fa-check-square-o fa-stack-1x fa-inverse size17"></i>
				                </span> <a  class="size15 link">Status</a>
				            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php if($res['Diterima']==''){echo "On Progress";}else{echo "Diterima";} ?></td>
						</tr>	
						<tr>
							<td>
				                <span class="fa-stack fa-lg">
				                <i class="fa fa-circle fa-stack-2x size25"></i>
				                <i class="fa fa-user fa-stack-1x fa-inverse size17"></i>
				                </span> <a  class="size15 link">Diterima Oleh</a>
				            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php echo $res['Diterima']; ?></td>
						</tr>
						<tr>
							<td>
				                <span class="fa-stack fa-lg">
				                <i class="fa fa-circle fa-stack-2x size25"></i>
				                <i class="fa fa-calendar fa-stack-1x fa-inverse size17"></i>
				                </span> <a  class="size15 link">Tanggal Diterima</a>
				            </td>
							<td width="1%">:</td>
							<td width="10%" ><?php if($res['Diterima']==''){echo "";}else{echo $res['Tgl_Diterima'];} ?></td>
						</tr>		
					</table>
				</fieldset>
				<br>
				<fieldset>
				    <legend>Tracking</legend>
					<table  style="width:100%" border="1" style="border-style: solid;
				    border-color: #ccccc;">
				    		<tr style="background-color:#ffd400;color:#000; font-weight: bold;">
							<td width="10%" style="padding-left:8px;">Tanggal</td>
							<td width="40%" style="padding-left:8px;">Status</td>
						</tr>	
				<?php foreach ($tracking as $value) { ?>
						<tr style="background-color:#fff;color:#000">
							<td width="10%" style="padding-left:8px;"><?php echo $value['Tanggal']; ?></td>
							<td width="40%" style="padding-left:8px;"><?php echo $value['Status']; ?></td>
						</tr>	
				<?php } ?>				
					</table>
				</fieldset>
					<?php
					}
				}else{
					echo "<h5>Maaf data yang anda cari tidak ada</h5>";
				}
					?>

					<a href="<?=base_url();?>tracking" style=" text-decoration: underline;color: #fff;">Check Lainnya</a>

					<div class="divider-short"></div><br>
			</div>
            </div>
        </div>
        <!-- /.bar -->