	<div class="span9" id="mainCol">
		<ul class="breadcrumb">
			<li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
			<li class="active">Kullanıcı Bilgileri</li>
		</ul>
		<h3> Kullanıcı Bilgileri</h3>	
		<hr class="soft"/>
						<?php if($this->session->flashdata("sonuc")) {?>
				<div class="col-md-12">
					<div class="well well-lg">
						<?=$this->session->flashdata("sonuc")?>
					</div>
				</div>
				<?php } ?>
		<div class="row">
			<div class="span6" >
				<h4>Kullanıcı Bilgileri</h4>
				  <table class="table table-striped table-hover">

					<tbody>
					  <tr>
						<th>İsim / Soyisim</th>
						<td><?=$musteri[0]->adsoy?></td>
					  </tr>
					  <tr>
						<th>Email </th>
						<td><?=$musteri[0]->email?></td>
					  </tr>
					 
					</tbody>
				  </table>

			</div>
		</div>

	</div>
