<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/urunler_listesi" title="Ürünler" class="tip-bottom" ><i class="icon icon-user"></i> Ürünler</a> <a href="<?=base_url()?>admin/urunler/urun_resim_ekleme_paneli/" class="current tip-bottom" title="Ürün Ekle" ><i class="icon icon-plus"></i> Ürün Ekle</a></div>
    <h1>Ürün Galeri Resim Ekleme Menüsü</h1>
	
	 <?php  if ($this->session->set_flashdata("sonuc","Resim istenen kriterlere uygun değil.")) {?>
       <div class="alert alert-info alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Bilgi!</h4>
                   İşlem:</div>
                   <p><?$this->session->set_flashdata("sonuc")?> </p>
				  <?php }?>
  </div>
<!--End-breadcrumbs-->
  <script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>

<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ürün Resmi Ekleme Paneli</h5>
        </div>
        <div class="widget-content nopadding">       
            <form  class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/resim_ekle_kaydet/<?=$urun_id?>" enctype="multipart/form-data" >
            <div class="control-group">
              <div class="controls">
                <div class="uploader" id="uniform-undefined">               
				 <input name="userfile" type="file" size="19" style="opacity: 0;"><span class="file_name"></span>
              </div>
            </div>
             <div class="form-actions">
              <button type="submit" class="btn btn-success">Resmi Yükle</button>
            </div>
          </form>
		  
		  <table>
		  <tr>
		 
		  <?php foreach($urunler_resim as $rs) { ?>
			<td>
		  <img src="<?=base_url()?>uploads/<?=$rs->Resim?>" width="100" height="100">
			</td>
			  <?php }?>
			</tr>
			</table>
			
			
			  </div>
      </div>
</div>
<!--end-main-container-part-->
