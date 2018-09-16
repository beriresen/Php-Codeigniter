<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a>
	<a href="<?=base_url()?>admin/urunler/urunler_listesi" title="Ürünler" class="current tip-bottom " ><i class="icon icon-book"></i> Ürünler</a> </div>
    <h1>Ürünler</h1>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">
	<hr>
  <div class="widget-content">
    <p>
      <a href="<?=base_url()?>admin/urunler/urun_ekleme_paneli">
        <button class="btn btn-warning"><li class="icon icon-plus"> </li> Ürün ekle</button>
      </a>
      <a href="<?=base_url()?>admin/urunler">
        <button class="btn btn-info">   <li class="icon  icon-refresh"> </li> Yenile</button>
      </a>
    </p>
    <hr>
  </div>
<?php if($this->session->flashdata("sonuc")) {?>
  <div class="alert alert-info">
    <button class="close" data-dismiss="alert">×</button>
    <strong>Bilgi!</strong> <?=$this->session->flashdata("sonuc")?> 
  </div>
<?php } ?>
	<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Eklenen Ürünler</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Ürün Adı</th>
                  <th>Kategori</th>
                  <th>Galeri</th>
                  <th>Resim</th>
                  <th>Fiyat</th>
 				  <th>İşlemler</th>
               </tr>
              </thead>
              <tbody>
      			  <script type="text/javascript">
      			
      				</script>
					
      				<?php 
              $i=0;
      				foreach($urunler as $rs){
      				?>
                <tr class="odd gradeX">
                  <td><span class="badge"><?=++$i?></span></td>
                  <td><?=$rs->urun_adi?></td>
                  <td><?=$rs->categoryname?></td>
                  <td><a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->urun_id?>" class="btn btn-inverse">Galeriye Ekle  </a>
				          </td>
						  
						  
						  
						  
        				<td>
							
							<a href="<?=base_url()?>admin/urunler/urun_resim_ekleme_paneli/<?=$rs->urun_id?>">
									<?php
									if($rs->Resim==NULL)
									{?>
										 <a href="<?=base_url()?>admin/urunler/urun_resim_ekleme_paneli/<?=$rs->urun_id?>"  class="btn btn-inverse">Resim Ekle  </a>
									<?php
									}else
									{?>
								
								
						
									 <img src="<?=base_url()?>uploads/<?=$rs->Resim?>" width="100" height="100">
									<span>Değiştir</span>
									<?php
									}
									?>
								</a>
						</td>	
							
				          <td><?=$rs->fiyat?></td>
                  <td> 		  
        				  <a href="<?=base_url()?>admin/urunler/urun_goruntuleme_paneli/<?=$rs->urun_id?>">
                    <span class="btn btn-mini btn-info"><li class="icon icon-zoom-in"> </li> Göster</span>
                  </a>
        				  <a href="<?=base_url()?>admin/urunler/urun_guncelleme_paneli/<?=$rs->urun_id?>">
                    <span class="btn btn-mini btn-success"><li class="icon icon-edit"> </li> Düzenle</span>
                  </a>
         
        				  <a href="<?=base_url()?>admin/urunler/urun_silme/<?=$rs->urun_id?>" onclick="return confirm('Silinecek emin misiniz?')"
                    <span class="btn btn-mini btn-danger"><li class="icon icon-trash"> </li> Sil</span>
                  </a>
        		 </td>
                </tr>
			       	<?php } ?>
              </tbody>
            </table>
          </div>
          <div class="pagination alternate">
            <ul>
              <li class="disabled"><a href="#">Prev</a></li>
              <li class="active"> <a href="#">1</a> </li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>	
  </div>
</div>
<!--end-main-container-part-->