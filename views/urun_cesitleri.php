



			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Kategoriye Ait <strong>Ürünler</strong></span></span></span>
						<span class="pull-right">
							<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
						</span>
					</h4>
					
							
					
					<div id="myCarousel-2" class="myCarousel carousel slide">
						<div class="carousel-inner">
						<div class="row">
							<div class="span12">
							<ul class="thumbnails listing-products">												
									
						  <?php
								foreach($urunler as $rs)
								{
							?>
							
								<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="<?=base_url()?>home/urun_detay/<?=$rs->urun_id?>"><img src="<?=base_url()?>uploads/<?=$rs->Resim?>" alt="" /></a></p>
											<a href="product_detail.html" class="title"><?=$rs->urun_adi?></a><br/>
											<p class="price"><?=$rs->fiyat?> TL</p>
										</div>
									</li>
									<?php } ?>
								</ul>
								</div>
							</div>
							
							
								
						</div>							
					</div>
				</div>						
			</div>
			<div class="row feature_box">						
		</div>				
	</div>
</section>