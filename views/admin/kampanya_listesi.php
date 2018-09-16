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
      <a href="<?=base_url()?>admin/urunler/kampanya_ekleme_paneli">
        <button class="btn btn-warning"><li class="icon icon-plus"> </li> Kampanya ekle</button>
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
                  <th>Kampanya Adı</th>
            
                  <th>Urun Adı</th>
                  <th>Kampanya Resimi</th> 
               </tr>
              </thead>
              <tbody>
      			  <script type="text/javascript">
      			
      				</script>
					
      				<?php 
              $i=0;
      				foreach($kampanya as $rs){
      				?>
                <tr class="odd gradeX">
                 
                  <td><?=$rs->kampanya_adi?></td>
                  <td><?=$rs->urunadi?></td>
                 <td>
				 <a href="<?=base_url()?>admin/urunler/kampanya_resim_ekleme_paneli/<?=$rs->id?>">
									<?php
									if($rs->Resim==NULL)
									{?>
										 <a href="<?=base_url()?>admin/urunler/kampanya_resim_ekleme_paneli/<?=$rs->urun_id?>"  class="btn btn-inverse">Resim Ekle  </a>
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