<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/users" title="Üyeler" class="tip-bottom" ><i class="icon icon-user"></i> Üyeler</a> <a href="<?=base_url()?>admin/uyeler/user_insert_panel" class="current tip-bottom" title="Üye Ekle" ><i class="icon icon-plus"></i> Üye Ekle</a></div>
    <h1>Üyeler</h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>     
    <div class="row-fluid">
        <div class="span6">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Üye Ekleme Paneli</h5>
            </div>
            <div class="widget-content nopadding">
              <form action="<?=base_url()?>admin/uyeler/user_insert" method="post" class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Adı Soyadı</label>
                  <div class="controls">
                    <input name="username" class="span11" placeholder="Adı Soyadı" type="text" required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">E-mail</label>
                  <div class="controls">
                    <input name="email" class="span11" placeholder="E-mail" type="email" required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Şifre</label>
                  <div class="controls">
                    <input name="password" class="span11" placeholder="Şifre" type="password" required>
                  </div>
                </div>
				 <div class="control-group">
                  <label class="control-label">Telefon</label>
                  <div class="controls">
                    <input name="tel" class="span11" placeholder="Telefon" type="text" required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Şehir Seçiniz</label> <!--Bunu formdan aldım-->
                  <div class="controls">
                    <select name="sehir" required>
    				<?php foreach( $sehirler as $rs){ ?>
                      <option value="<?=$rs->il_id?>"><?=$rs->il_adi?></option>
    				<?php } ?>
                    </select>
                  </div>
				  <div class="control-group">
                  <label class="control-label">Yetkiler</label> <!--Bunu formdan aldım-->
                  <div class="controls">
                    <select name="position" required>
					<option>Admin</option>
					<option>Üye</option>
					<option>Aşırı Engelli</option>
					<option>Askıda</option>
					<option>Engelli</option>
                    </select>
                  </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	
  </div>
</div>
<!--end-main-container-part-->
