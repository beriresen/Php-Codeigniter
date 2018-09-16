<section class="homepage-slider" id="home-slider">
<div class="flexslider">						
				
					<ul class="slides">
  <?php
			$say=0;
			$aktf=null;
			foreach($kampanya as $rs)
			{
				$say++;
				if($say==1)
					$aktf="active";
			else
				$aktf=null;
				?> 
				
							<li class="flex-<?=$aktf?>-slide  style="width: 100%; height: 2%; float: left; margin-right: -100%; position: relative; display: list-item;"">
							<img height="20px" src="<?=base_url()?>uploads/<?=$rs->Resim?>" alt="">
						</li>
						
					
			<?php }?>
			</ul>
				<ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>			
			</section>