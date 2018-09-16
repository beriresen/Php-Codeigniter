<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/about" title="Genel Ayarlar" class=" current tip-bottom" ><i class="icon icon-book"></i> Hakkımda</a> </div>
    <h1>Hakkımda</h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
	<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
      <button class="close" data-dismiss="alert">×</button>
      <strong>Bilgi!</strong> <?=$this->session->flashdata("sonuc")?> 
    </div>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12">
		    <div class="widget-box">

				<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
					<h5>Hakkimda</h5>
				</div>
				<div class="widget-content">
					<div class="control-group">
					
						<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
						<form action="<?=base_url()?>admin/home/about_update/<?=$veri[0]->id?>" method="post" class="form-horizontal">
							<textarea name="about" id="about"  cols="80" >
							<?=$veri[0]->about?>
							</textarea>
							<script>
								CKEDITOR.replace( 'about' );
							</script>
							<div class="form-actions">
								<button type="submit" class="btn btn-success">Kaydet</button>
							</div>
						</form>
					</div>

				</div>	
			</div>
		</div>
	</div>
  </div>
</div>