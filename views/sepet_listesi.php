
	<div id="carouselBlk"></div>
	<div class="span9">
		<?php if($this->session->flashdata("sonuc")) {?>
		<div class="alert alert-error">
			<strong><h5><?=$this->session->flashdata("sonuc")?></h5></strong>
		</div>
	<?php }?>
	  	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Urun Adi</th>
                  <th>Quantity/Update</th>
				  <th>Fiyat</th>
                  <th>Adet</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
			  <?php 
			  $total=0;
			  
			  $adet=0;
			  if($urunler){
			 foreach($urunler as $rs){
			   $toplam=0;
			   $toplam+=($rs->fiyat*$rs->adet);
			   $total+=$toplam;
			   $adet+=$rs->adet;
			   $query=$this->db->query("SELECT * FROM evler where id=$rs->urun_id");
			   $result=$query->result();
			   ?>
                <tr>
                  <td> <img style="height:50px" src="<?=base_url()?>uploads/<?=$result[0]->resim?>" alt=""/></td>
                  <td><?=$rs->adi?></td>
				  <td>
					<div class="input-append">				
					<a href="<?=base_url()?>home/ev_detay/<?=$rs->urun_id?>/">
						<span class="btn btn-info"><i class="icon-zoom-in icon-white"></i> Goster</span> 
					</a> 				
					<a href="<?=base_url()?>home/sepetten_sil/<?=$rs->id?>"> 
						<span class="btn btn-danger"><i class="icon-remove icon-white"></i> Sil</span> 
					</a> 					
					</div>
				  </td>
                  <td> <?=$rs->fiyat?> TL</td>
                  <td><?=$rs->adet?></td>
                  <td> <?=$toplam?> TL</td>
                </tr>
			  <?php 
					}
				} 
			  ?>
                <tr>
                  <td colspan="6" style="text-align:right">Toplam Fiyat:	</td>
                  <td><?=$total?> TL</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right">Toplam Miktar:	</td>
                  <td> <?=$adet?></td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOPLAM FİYAT</strong></td>
                  <td class="label label-important" style="display:block"> <strong><?=$total?> TL </strong></td>
                </tr>				 
				<tr>
                  <td colspan="6" style="text-align:right"><strong>Odeme Sayfası</strong></td>
                  <td  style="display:block">					
					<a href="<?=base_url()?>home/sepet_odeme/">
						<span class="btn btn-info"><i class="icon-zoom-in icon-white"></i> Odeme Sayfası</span> 
					</a> 
				   </td>
                </tr>
				</tbody>
            </table>

	</div>
