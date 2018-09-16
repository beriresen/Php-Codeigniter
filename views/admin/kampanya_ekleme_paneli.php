<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> 
	<a href="<?=base_url()?>admin/home/urunler_listesi" title="Ürünler" class="tip-bottom" ><i class="icon icon-user"></i> Ürünler</a>
	<a href="<?=base_url()?>admin/urunler/urun_ekleme_paneli" class="current tip-bottom" title="Ürün Ekle" ><i class="icon icon-plus"></i> Ürün Ekle</a></div>
    <h1>Ürün Ekle</h1>
  </div>
<!--End-breadcrumbs-->
  <script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>

<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ürün Ekleme Paneli</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo base_url(); ?>/admin/urunler/urun_ekle" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Ürün Adı</label>                  
              <div class="controls">
                  <select name="category_id" style="display: none;">
                  <?php foreach($categories as $rs ){ ?>
                  <!--<option><?=$rs->category_name?></option>-->
				<option value="<?=$rs->category_id?>"><?=$rs->category_name?></option>

                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Kampanya adı</label>
              <div class="controls">
                <input name="urun_adi" class="span11" placeholder="Kampanya adı " type="text" required>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">FYT</label>
              <div class="controls">
                <input name="fiyat" class="span11" placeholder="FYT" type="number" required>
              </div>
            </div>      
            <div class="control-group">
              <label class="control-label">Ürün Fotografı Yükle</label>
              <div class="controls">
                <div class="uploader" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
              </div>
            </div>        
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>
</div>
<!--end-main-container-part-->
