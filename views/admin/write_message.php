<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/message_write" title="Üyeler" class="current tip-bottom " ><i class="icon icon-user"></i> Üyeler</a> </div>
    <h1>E-Posta Yaz</h1>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">
	<hr>     
	<script type="text/javascript">
		function clearThis(){

		document.getElementById("refresh1").value=""
		document.getElementById("refresh2").value=""
		document.getElementById("refresh3").value=""
		id="refresh"

		}
	</script>
	<?php if($this->session->flashdata("sonuc")) {?>
    <div class="alert alert-info">
      <button class="close" data-dismiss="alert">×</button>
      <strong>Bilgi!</strong> <?=$this->session->flashdata("sonuc")?> 
    </div>
	<?php } ?>
	<div class="row-fluid">
	  <div class="span12">
		<p>
			<button class="btn btn-info" onfocus="clearThis(this)"  ><li class="icon  icon-refresh"></li> Temizle</button> 
			<a href="<?=base_url()?>admin/home">
				<button type="submit" class="btn btn-danger" > <li class="icon  icon-arrow-left"></li> Geri</button>
			</a>
		</p>
	  </div>
      <div class="span11">
        <div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Mesaj yazınız</h5>
			</div>
			<div class="widget-content nopadding">
			  <form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/send_message">
					<div class="control-group">
						<label class="control-label">Alıcı : </label>
						<div class="controls">
						<input class="span11" id="refresh1" placeholder="Alıcı İsmi" type="email" required name="receiver_mail">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Konu :</label>
						<div class="controls">
						<input class="span11" id="refresh2" placeholder="Konu" type="text" required name="message_subject">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Mesajınız : </label>
						<div class="controls">
						<textarea class="span11" style="height:100px" id="refresh3" required name="message_content"></textarea>
						</div>
					</div>
					<div class="form-actions">	
						<button type="submit" class="btn btn-success">Gönder</button>
					</div>
			  </form>
			</div>

        </div>

      </div>
    </div>	
  </div>
</div>
<!--end-main-container-part-->