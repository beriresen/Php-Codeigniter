<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> 
      <a href="<?=base_url()?>admin/home/user_positions" class="tip-bottom" title="Pozisyonlar"><i class="icon-book"></i>Pozisyonlar</a> 
    </div>
    <h1>Pozisyonlar</h1>
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
      <div class="span12">
        <div class="widget-box">
        <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Pozisyon Ekle</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/user_position_insert" name="password_validate" id="password_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Pozisyon İsmi </label>
                <div class="controls">
                  <input name="position_type" id="pwd" type="text">
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-warning"><li class="icon icon-plus"></li> Pozisyon Ekle</button>
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
            <h5>Pozisyonlar</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Pozisyon ismi</th>
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
                foreach($user_status as $rs){ 
                ?>
                <tr class="odd gradeX">
                  <td><span class="badge"><?=++$i?></span></td>
                  <td><?=$rs->position_type?></td>
                  <td>
                    <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
                    <form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/user_position_update/<?=$rs->position_id?>" name="password_validate" id="password_validate" novalidate="novalidate">
                      <input name="position_type" id="" value="<?=$rs->position_type?>" type="text">
                      <button id="" class="btn btn-info"><li class="icon icon-edit"></li> Güncelle
                       </button>
                    </form>
                    <?php } ?>
                  </td>
                  <td>
                    <?php if( $this->session->admin_logged_in["position"] == 1 ){ ?>
                      <a href="<?=base_url()?>admin/home/user_position_delete/<?=$rs->position_id?>" onclick="return confirm_delete()">
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
              <li><a href="#">Next</a></li>
            </ul>
          </div>  
        </div>
      </div>
    </div> 
  </div>
</div>