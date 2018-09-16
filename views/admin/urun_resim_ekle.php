
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/users" class="current">Kullanıcılar</a> </div>
    <h1>boş</h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
	
	



       
            <form  class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/resim_ekle_kaydet/<?=$urunid[0]?>" enctype="multipart/form-data" >

            <div class="control-group">
			  <h5> <?=$urunid[0]?>  </h5>


              <div class="controls">
                <div class="uploader" id="uniform-undefined">
							<!--*Maksimum Ölçüler 1024x768 ve 1000 kb olmalıdır!  bunu yapamadım:(-->
               
				          <input name="userfile" type="file" size="19" style="opacity: 0;"><span class="file_name"></span>
              </div>
            </div>
             <div class="form-actions">
              <button type="submit" class="btn btn-success">Resmi Yükle</button>
            </div>
          </form>
	
  </div>
</div>


