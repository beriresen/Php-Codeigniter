<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> 
  <a href="<?=base_url()?>admin/home/urunler_listesi" title="Ürünler" class="tip-bottom" ><i class="icon icon-user"></i> Ürünler</a>
  <a href="<?=base_url()?>admin/urunler/urun_guncelleme_paneli" class="current tip-bottom" title="Ürün Ekle" ><i class="icon icon-plus"></i> Ürün Güncelle</a></div>
    <h1>Ürün Güncelle</h1>
  </div>
<!--End-breadcrumbs-->

<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ürün Güncelleme Paneli</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?=base_url() ?>/admin/urunler/urun_guncelle/<?=$urunler[0]->urun_id?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Kategori <?=$urunler[0]->urun_id?></label>                  
              <div class="controls">
                  <select name="u_kategori_id" >
                  <?php foreach($categories as $rs ){ ?>
                  <option value="<?=$rs->category_id?>"> <?=$rs->category_name?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ürün adı</label>
              <div class="controls">
			         <input name="urun_adi" class="span11" placeholder="Ürün adı " type="text" required value="<?=$urunler[0]->urun_adi?>">
              </div>
            </div>

			 <div class="control-group">
              <label class="control-label">Grubu: <?=$urunler[0]->grubu?></label>                  
              <div class="controls">
                  <select name="grubu" >
                 
                  <option value="<?=$urunler[0]->grubu?>"> <?=$urunler[0]->grubu?></option>
				 <option>normal</option>
				 <option>kampanya</option>
				 <option>indirim</option>
					
                </select>
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Ürün içerigi</label>
              <div class="controls">
               <input name="urun_icerik" class="span11" placeholder="Ürün adı " type="text" required value="<?=$urunler[0]->urun_icerik?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Fiyatı</label>
              <div class="controls">
                <input name="fiyat" class="span11" placeholder="FYT" type="number" required value="<?=$urunler[0]->fiyat?>" >

              </div>
            </div>      
            <div class="control-group">
              <label class="control-label">Ürün Fotografı Yükle</label>
              <div class="controls">

			  
                <div class="uploader" id="uniform-undefined">
				<input type="file"  size="19" style="opacity: 0;">
				<span class="filename">No file selected</span><span class="action">Choose File</span></div>
              </div>
            </div>        
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Güncelle</button>
            </div>
          </form>
        </div>
      </div>
</div>
<!--end-main-container-part-->
