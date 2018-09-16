			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products">
				<h4> <?php=$categories->category_name?><span>Ürünleri</span></h4>
				<?php 
				foreach($urunler as $rs)
				{
					?>
			</section>
			<section class="main-content">
				
				<div class="row">
							<div class="span4">
								<a href="<?=base_url()?>home/urun_detay/<?=$rs->urun_id?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?=base_url()?>uploads/<?=$rs->Resim?>"></a>												
						
							</div>
						<div class="span5">
								<address>


									<strong>Ürün Adı:</strong> <span><?=$rs->urun_adi?></span><br>
									<strong><font color="red">Ürün Kategori:</strong></font> <span><?=$rs->u_kategori_id?></span>                            
								<h4><strong>Fiyat: <?=$urun[0]->fiyat?> TL</strong></h4>
							</div>
							<div class="span5">
							<form class="form-inline" method="post" action="<?=base_url()?>home/sepete_ekle >
									<label class="checkbox">
										<input type="checkbox" value="">Hediye Paketi
									</label>
									<br/>									
									<p>&nbsp;</p>
					<label class="control-label"><span>Adet </span></label>
									<input type="number" class="span1" name="adet" value="1" placeholder="Miktar"/>

									
				<?php if($this->session->logged['id']){ ?>
							<?php }else{ ?>
				  <div class="control-group">
					<div class="controls">
					<a href="<?=base_url()?>home/uyeol_paneli">
						<span class="btn btn-large btn-primary pull-right"><i class="icon-shopping-cart icon-white"></i> Sepete Ekle</span> 
					</a>
				   </div>
				   </div><br/>
				<?php } ?>

								</form>
							</div>							
						</div>						
						</div>
				
					
			
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Hayallerinideki Işıltı.</p>
						<br>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
	
	<?php } ?>