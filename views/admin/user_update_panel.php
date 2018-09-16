<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/users" title="Üyeler" class="tip-bottom" ><i class="icon icon-user"></i> Üyeler</a> <a href="<?=base_url()?>admin/uyeler/user_update_panel/<?=$user[0]->id?>" class="current tip-bottom" title="Üye Güncelle" ><i class="icon icon-plus"></i> Üye Güncelle</a></div>
    <h1>Bilgileri Günccelle</h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>     
    <div class="row-fluid">
      <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Bilgileri Güncelle</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?=base_url()?>admin/uyeler/user_update/<?=$user[0]->id?>" method="post" class="form-horizontal"> <!--önemli olan burası sınavda soracak.0.elemanı id-->
              <div class="control-group">
                <label class="control-label">İsim Soyisim</label>
                <div class="controls">
                  <input name="username"  class="span11" placeholder="İsim Soyisim" type="text" value="<?=$user[0]->username?>" required> <!--nesnenin içini doldurmamız için 0.yı value değerine yazmamız lazım-->
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">E-mail</label>
                <div class="controls">
                  <input name="email" class="span11" placeholder="E-mail" type="email" value="<?=$user[0]->email?>" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Şifre</label>
                <div class="controls">
                  <input name="password" class="span11" placeholder="Şifre" type="text" value="<?=$user[0]->password?>" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pozisyon</label>
                <div class="controls">
                <?php if($this->session->admin_logged_in["position"]==1){ ?>
                  <select name="position" required>
                    <option value="<?=$user[0]->position?>">
  				          <?=$user[0]->position_type?>
  				          </option>
  				          <?php foreach( $positions as $rs){ ?>
                    <option value="<?=$rs->position_id?>"><?=$rs->position_type?></option>
  				          <?php } ?>
                  </select>
                <?php } else { ?>
                    <input name="position" class="span11" placeholder="Pozisyon" type="text" readonly value="<?=$user[0]->position_type?>" required>
                <?php } ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Şehir Seçiniz</label>
                <div class="controls">
                  <select name="sehir" required>
                    <option value="<?=$user[0]->sehir?>">
  				          <?=$user[0]->il_adi?>
  				          </option>
  				          <?php foreach( $sehirler as $rs){ ?>
                    <option value="<?=$rs->il_id?>"><?=$rs->il_adi?></option>
  				          <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Güncelle</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
    </div>
  </div>
</div>

<!--end-main-container-part-->