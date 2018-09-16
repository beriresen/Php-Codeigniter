<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> 
      <a href="<?=base_url()?>admin/home/categories" class="tip-bottom" title="Kategoriler"><i class="icon-book"></i>Kategoriler</a> 
    </div>
    <h1>Kategoriler</h1>
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
    <div class="span8">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Kategori Ekle</h5>
        </div>
        <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/insert_categories" name="password_validate" id="password_validate" novalidate="novalidate">
            <div class="control-group">
              <label class="control-label">Kategori İsmi </label>
              <div class="controls">
                <input name="category_name" class="span11" id="pwd" type="text">
              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-warning"><li class="icon icon-plus"></li> Kategori Ekle</button>
            </div>
          </form>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">      
        <div class="widget-title"> 
          <span class="icon"><i class="icon-info-sign"></i></span>
          <h5>Kategoriler</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th></th>
                <th>Kategori ismi</th>
                <th>Düzenle</th>
                <th>İşlemler</th>
              </tr>
            </thead>
            <tbody>
              <script type="text/javascript">
              function confirm_delete() {
                return confirm('Emin misiniz ? ');
              }
              // <a onclick="return confirm('Silmek istediğinizden emin misiniz?');" ></a>
              </script>
              <?php 
              $i=0;
              foreach($categories as $rs){ $i++;
              ?>
              <tr class="odd gradeX">
                <td><span class="badge"><?=$i?></span></td>
                <td><?=$rs->category_name?> </td>
                <td>
                  <form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/update_categories/<?=$rs->category_id?>" name="password_validate" id="password_validate" novalidate="novalidate">
                    <input name="category_name" value="<?=$rs->category_name?>" type="text">
                    <button  class="btn btn-info"><li class="icon icon-edit"></li> Güncelle
                     </button>
                  </form>
                </td>
                <td>
                  <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
                  
                    <a href="<?=base_url()?>admin/home/delete_categories/<?=$rs->category_id?>" onclick="return confirm_delete()">
                      <button class="btn btn-danger" ><li class="icon icon-trash"> </li> Sil</button>
                    </a>
                  
                  <?php } ?>
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
            <li><a href="#">Next</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  </div>

</div>