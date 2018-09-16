<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> 
	<a href="<?=base_url()?>admin/home/urunler_listesi" title="Konular" class="tip-bottom" ><i class="icon icon-book"></i> Ürünler</a> 
<a href="<?=base_url()?>admin/urunler/urun_goruntuleme_paneli" class="current tip-bottom" title="Konu İçeriği" ><i class="icon icon-book"></i> Konu İçeriği</a></div>
    <h1>Ürün Detayı</h1>
  </div>
<!--End-breadcrumbs-->

  <script type="text/javascript">
  function confirm_delete() {
    return confirm('Emin misiniz ? ');
  }
  // <a onclick="return confirm('Silmek istediğinizden emin misiniz?');" ></a>
  </script>


  <div class="container-fluid">
    <hr>
    <div class="widget-content">
      
        <a href="<?=base_url()?>admin/urunler/urun_ekleme_paneli">
          <button class="btn btn-warning"><li class="icon icon-plus"> </li> Ürün ekle</button>
        </a>
        <a href="<?=base_url()?>admin/urunler/urunler_listesi">
          <button class="btn btn-info">   <li class="icon  icon-refresh"> </li> Yenile</button>
        </a>

        <a href="<?=base_url()?>admin/urunler/urun_guncelleme_paneli/<?=$urunler[0]->urun_id?>">
          <button class="btn  btn-success"><li class="icon icon-edit"> </li> Düzenle</button>
        </a>
        <a href="<?=base_url()?>admin/urunler/urun_silme/<?=$urunler[0]->urun_id?>" onclick="return confirm_delete()">
          <span class="btn  btn-danger"><li class="icon icon-trash"> </li> Sil</span>
        </a>
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
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5><?=$urunler[0]->urun_adi?> </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Ürün Adı</th>
                  <th>Kategori</th>
                  <th>Ekleyen Kişi</th>
                  <th>Ekleyen Email</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td><?=$urunler[0]->urun_adi?> </td>
                  <td><?=$urunler[0]->category_name?> </td>
                  <td><?=$urunler[0]->username?></td>
                  <td><?=$urunler[0]->email?></td>				  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="widget-content">
            <div class="article-post">
              <div class="fr">
                <a href="<?=base_url()?>admin/urunler/urun_guncelleme_paneli/<?=$urunler[0]->urun_id?>" class="btn btn-mini btn-success ">Düzenle</a>
                <?php if($urunler[0]->publish==0){?>
                <?php }else{ ?>
                <?php }?>
                <a href="<?=base_url()?>admin/urunler/urun_silme/<?=$urunler[0]->urun_id?>" onclick="return confirm_delete()" class="btn btn-danger btn-mini">Sil</a>
              </div>
              <span class="user-info"><b> Ekleyen : </b> <?=$urunler[0]->username?>  / <b>Email : </b><?=$urunler[0]->email?></span>
              <br/>
              <br/>
              <pre><b><?=$urunler[0]->urun_adi?> </b><?=$urunler[0]->urun_icerik?>
              </pre>
			<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
            <h5>Gallery</h5>
          </div>
          <div class="widget-content">
            <ul class="thumbnails">
              <li class="span2"> <a> <img src="<?=base_url()?>uploads/<?=$urunler[0]->Resim?>" alt=""> </a>
                <div class="actions"> <a title="" class="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" ><i class="icon-search"></i></a> </div>
              </li>                                
            </ul>
            <ul class="thumbnails">
              <li class="span1"> <a> <img src="<?=base_url()?>uploads/<?=$urunler[0]->Resim?>" alt=""> </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>                       
            </ul>
          </div>
        </div>
      </div>
    </div>
            </div>
            <br/>
          </div>
        </div>  
      </div>
    </div>  
  </div>
</div>
<!--end-main-container-part-->