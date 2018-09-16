<!-- Sidebar baslangic-->
<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
							<?php 
				                 foreach($categories as $rs)
								 {					
												?>
						<li><a href="<?=base_url()?>home/kategori/<?=$rs->category_id?> "><span class="icon-obevron-right"></span><?=$rs->category_id?> <?=$rs->category_name?> </a></li>
						
							<?php }?>
							
							</ul>
							<br/>

						</div>


					</div>
					<!-- Sidebar kapanis// -->
				</div>
			</section>
							</div>						
						</div>
						<div class="row feature_box">						
							<!-- Burann içine bişey ekleyeceğin zaman bu kutuyu kullanırsın -->
					</div>				
				</div>
			</section>
			<!--urun detay kapanis-->