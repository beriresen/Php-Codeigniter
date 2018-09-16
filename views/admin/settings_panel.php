<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/settings" title="Genel Ayarlar" class=" current tip-bottom" ><i class="icon icon-cog"></i> Genel Ayarlar</a> </div>
    <h1>Genel Ayarlar</h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr> 
    <!--
    <div class="alert alert-success">
    <button class="close" data-dismiss="alert">×</button>
    <strong>Success!</strong> Libero, a pharetra augue. Praesent commodo
    </div>
-->
<?php if($this->session->flashdata("sonuc")) {?>
  <div class="alert alert-info">
    <button class="close" data-dismiss="alert">×</button>
    <strong>Bilgi!</strong> <?=$this->session->flashdata("sonuc")?> 
  </div>
<?php } ?>
<div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Genel Ayarlar </h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?=base_url()?>admin/home/settings_update/<?=$veri[0]->id?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Title</label>
              <div class="controls">
                <input name="title" class="span11" type="text" value="<?=$veri[0]->title?>" required>
              </div>
            </div>
			       <div class="control-group">
              <label class="control-label">Admin Title</label>
              <div class="controls">
                <input name="admin_title" class="span11" type="text" value="<?=$veri[0]->admin_title?>" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keywords</label>
              <div class="controls">
                <input name="keywords" class="span11" type="text" value="<?=$veri[0]->keywords?>" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Smtpserver</label>
              <div class="controls">
                <input name="smtpserver" class="span11"  type="text" value="<?=$veri[0]->smtpserver?>" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Smtpmail</label>
              <div class="controls">
                <input name="smtpemail" class="span11"  type="email" value="<?=$veri[0]->smtpemail?>" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Smtpport</label>
              <div class="controls">
                <input name="smtpport" class="span11" type="number" value="<?=$veri[0]->smtpport?>" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Şifre</label>
              <div class="controls">
                <input name="password" class="span11"  type="text" value="<?=$veri[0]->password?>" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Doğum Tarihi</label>
              <div class="controls">
                <input name="borndate" type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span11">
                <span class="help-block">Gün - Ay - Yıl</span> </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Select input</label>
              <div class="controls">
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kaydet</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  </div>
</div>
<!--end-main-container-part-->
