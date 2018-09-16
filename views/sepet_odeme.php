	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?=base_url()?>/home/uyeol">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">odeme Sayfasi</li>
    </ul>
	<hr class="soft"/>
	<?php if($this->session->flashdata("sonuc")) {?>
	<div class="col-md-12">
		<div class="well well-lg">
			<?=$this->session->flashdata("sonuc")?>
		</div>
	</div>
	<?php } ?>
	<div class="row">
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Odeme Sayfasi</h5>
			 <?php
			  $toplam=0;
			  if($urunler){
				  foreach($urunler as $rs ){
						$toplam+=($rs->fiyat*$rs->adet);
				  }
			  
			  ?>
			<form action="<?=base_url()?>home/siparisi_tamamla" method="post" >
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Alıcının Ad - Soyad</label>
				<div class="controls">
				  <input type="text" name="adsoyad" id="inputEmail" value="<?=$musteri[0]->adsoyad?>"  placeholder="ad - soyad giriniz">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Adres</label>
				<div class="controls">
				  <input type="text" name="adres" id="inputEmail" value="<?=$musteri[0]->adres?>"  placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">il</label>
				<div class="controls">
				  <input type="text" name="il" id="inputEmail" value="<?=$musteri[0]->il?>"  placeholder="Telefon giriniz">
				</div>
			  </div>
			  
			  <hr class="soft"/>
			  <h5>Kredi kartı bilgileri</h5>

			  <div class="control-group">
			  <label class="control-label" for="inputEmail1">Toplam Tutar</label>
				<div class="controls">
				  <input type="text" name="tutar" id="inputEmail"  value="<?=$toplam?>" readonly />
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Ad - Soyad</label>
				<div class="controls">
				  <input type="text" name="kard_adsoyad" id="inputEmail" placeholder="ad - soyad giriniz">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Kart no</label>
				<div class="controls">
				  <input type="text" name="kartno" id="inputEmail"  placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Son kullanma tarihi</label>
				<div class="controls">
				  <input type="text" name="kart_tarih" id="inputEmail" placeholder="Son kullanma tarihi">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Guvenlik kodu</label>
				<div class="controls">
				  <input type="text" name="kart_kodu" id="inputEmail" placeholder="Guvenlik kodu">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Siparisi yap</button>
				</div>
			  </div>
			  
			</form>
			<?php }else{ ?>
			<div class="alert alert-error">
			  Urununuz bulunmamaktadır.
			</div>
			<?php }?>
		</div>
		</div>
	</div>	
	
</div>