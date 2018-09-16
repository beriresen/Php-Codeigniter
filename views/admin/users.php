
<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/uyeler" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/users" title="Üyeler" class="current tip-bottom " ><i class="icon icon-user"></i> Üyeler</a> </div>
    <h1>Üyeler Listesi</h1>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">  <!--//üyeler listesi box ı-->
	
          <div class="widget-content">
            <p>
              <a href="<?=base_url()?>admin/uyeler/user_insert_panel"><button class="btn btn-success btn-mini"><li class="icon icon-plus">     </li> Kullanıcı ekle</button></a>
			        <a href="<?=base_url()?>admin/uyeler"> <button class="btn btn-info">   <li class="icon  icon-refresh"> </li> Yenile</button></a>
            </p>
            <hr>
            </hr>
          </div>
  
 <?php if($this->session->flashdata("sonuc")) {?>      <!--üye eklendi mesajımız burda gsteriyor-->
	<div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Başarılı!</h4>
			  <?=$this->session->flashdata("sonuc")?> 
               </div>
  <?php } ?>
		
	<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Üyeler</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>İsim Soyisim</th>    <!--tablodaki Sütun başlığı-->
                  <th>Email</th>
                  <th>Posizyon</th>
                  <th>Şehir</th>
                  <th>İşlemler</th>
                </tr>
              </thead>
              <tbody>

              <?php 
              $i=0;
              foreach($users as $rs){   //Tüm satırları döngüye soktum.
              ?>
                <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>   <!--üye girişiyapan adminse verileri ai-->
                <tr class="odd gradeX">
                  <td><span class="badge"><?=++$i?></span></td>   <!--sıra no-->
                  <td><?=$rs->username?></td> <!--veileri rs nin içinden alıyorum listelemek için-->
                  <td><?=$rs->email?></td>
                  <td><?=$rs->position_type?></td>
                  <td><?=$rs->il_adi?></td>
                  <td> 
                    <a href="<?=base_url()?>admin/uyeler/user_view_panel/<?=$rs->id?>">		<span class="btn btn-mini btn-info"><li class="icon icon-zoom-in"> </li> Göster</span></a>
                    <a href="<?=base_url()?>admin/uyeler/user_update_panel/<?=$rs->id?>">		<span class="btn btn-mini btn-warning"><li class="icon icon-edit"> </li> Düzenle</span></a>
                    <a href="<?=base_url()?>admin/uyeler/user_delete/<?=$rs->id?>" onclick="return confirm('Silinecek emin misiniz?')"><span class="btn btn-mini  btn-danger"><li class="icon icon-trash"> </li> Sil</span></a>
                  </td>
                </tr>
                <?php }elseif($this->session->admin_logged_in["id"]==$rs->id){ ?> <!-- admin değilse id ile loginde id yi kontrol et -->
                <tr class="odd gradeX">
                  <td><?=$rs->username?></td>    <!--tablodaki içerik-->
                  <td><?=$rs->email?></td>
                  <td><?=$rs->position_type?></td>
                  <td><?=$rs->il_adi?></td>
                  <td> 
                    <a href="<?=base_url()?>admin/home/user_view_panel/<?=$this->session->admin_logged_in["id"] ?>">		<span class="btn btn-mini btn-info"><li class="icon icon-zoom-in"> </li> Göster</span></a>
                    <?php if( $rs->id == $this->session->admin_logged_in["id"] && $this->session->admin_logged_in["position"] != 1 ){ ?> 
                    <a href="<?=base_url()?>admin/uyeler/user_update_panel/<?=$this->session->admin_logged_in["id"]?>">		<span class="btn btn-mini btn-success"><li class="icon icon-edit"> </li> Düzenle</span></a>
                    <a href="<?=base_url()?>admin/uyeler/user_delete/<?=$this->session->admin_logged_in["id"]?>" onclick="return confirm('Silinecek emin misiniz?')"><span class="btn btn-mini  btn-danger"><li class="icon icon-trash"> </li> Sil</span></a>
                    <?php } ?>
                  </td>
                </tr>
                  <?php } ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>	
  </div>
</div>
<!--end-main-container-part-->

