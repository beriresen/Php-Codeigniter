<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> 
      <a href="<?=base_url()?>admin/home/categories" class="tip-bottom" title="Kategoriler">Kategoriler</a> 
    </div>
    <h1>Türler</h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
    <div class="widget-content">
      <p>
        <a href="<?=base_url()?>admin/home/categories">
          <button class="btn btn-info"> <li class="icon  icon-refresh"> </li> Yenile</button>
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
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Kategori Ekle</h5>
        </div>
        <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
      <div class="widget-content nopadding">
        <form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/insert_categories" name="password_validate" id="password_validate" novalidate="novalidate">
 

            <div class="control-group">
              <label class="control-label">Kategori</label>
              <div class="controls">
                <select name="category_id" required>

                  <option value="">1</option>
                  <option value="">12</option>
                  <option value="">13</option>
 
                </select>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Tür</label>
              <div class="controls">
                <input name="type_name"  class="span11" placeholder="Tür Giriniz" type="text" value="" required>
              </div>
            </div>
          <div class="form-actions">
            <button class="btn btn-warning"><li class="icon icon-plus"></li> Tür Ekle</button>
          </div>
        </form>
      </div>
      <?php } ?>
      <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Kategori ismi</th>
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
            <?php foreach($categories as $rs){ ?>
            <tr class="odd gradeX">
              <td><?=$rs->category_name?></td>
              <td> 
                <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
                <a href="">
                  <span class="btn btn-success"><li class="icon icon-edit"> </li> Düzenle</span>
                </a>

                <a href="" onclick="return confirm_delete()">
                  <span class="btn btn-danger"><li class="icon icon-trash"> </li> Sil</span>
                </a>
                <?php } ?>
              </td>
            </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  </div>

  </div>
</div>