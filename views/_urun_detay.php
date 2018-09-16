						<div class="row">
							<div class="span12">
								<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
						<br>
							<div class="span4">
								<a href="themes/images/ladies/1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?=base_url();?>uploads/<?=$urun[0]->Resim;?>"></a>												
								<ul class="thumbnails small">

									<?php foreach($resimler as $rs){?>
									<li class="span1">
										<a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?=base_url()?>uploads/<?=$resimler[0]->Resim?>" alt=""></a>
									</li>								
									<?php } ?>
								</ul>
							</div>
							<div class="span5">
								<address>


							<strong><font color="red">Ürün Adı:</strong></font> 
							<span><?=$urun[0]->urun_adi?></span>                            
							<h4><strong>Fiyatı: <?=$urun[0]->fiyat?> TL</strong></h4>
							</div>
							<div class="span5">
							<form class="form-inline" method="post" action="<?=base_url()?>home/sepete_ekle/<?=$urun_idd?>">
									<label class="checkbox">
										<input type="checkbox" value="">Hediye Paketi
									</label>
									<br/>									
									<p>&nbsp;</p>
									<form action="<?=base_url()?>home/sepete_ekle/<?=$urun_idd?>" method="post">
										
									<label class="control-label"><span>Adet </span></label>
									<input type="number" class="span1" name="adet" value="1" placeholder="Miktar"/>
									</form>

									
				<?php 
				if($this->session->logged['id']){ 
					
					?>
							<?php }else{ ?>
				  <div class="control-group">
					<div class="controls">
					<a href="<?=base_url()?>home/uyeol_paneli">
						<span class="btn btn-large btn-primary pull-right"><i class="icon-shopping-cart icon-white"></i> Sepete Ekle </span> 
					</a>
				   </div>
				   </div><br/>
				<?php } ?>
			</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Açıklama</a></li>

								</ul>	
								
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?=$urun[0]->urun_icerik?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
										
										</table>
									</div>
								</div>							
							</div>						
							
						</div>
					</div>

					<!--urun detayın sonu burası değil devamı sidebarda ikisi bir containerin içinde oldugu için sidebarda kapanacak-->