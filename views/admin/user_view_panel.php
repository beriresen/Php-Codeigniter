<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="tip-bottom"><i class="icon-home"></i> Anasayfa</a> <a href="<?=base_url()?>admin/home/users" title="Üyeler" class="tip-bottom" ><i class="icon icon-user"></i> Üyeler</a> <a href="<?=base_url()?>admin/uyeler/user_view_panel/<?=$user[0]->id?>" class="current tip-bottom" title="Üye Bilgileri" ><i class="icon icon-plus"></i> Üye Bilgileri</a></div>
    <h1>Üye Bilgileri </h1>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <hr>
	
<div class="row-fluid">
    <div class="span6">
       <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Üye bilgileri</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th><span class="icon"> <i class="icon-th"></i></th>
                  <th>Bilgiler</th>
                </tr>
              </thead>
              <tbody>
			  <script type="text/javascript">
				function confirm_delete() {
				  return confirm('Emin misiniz ? ');
				}
				// <a onclick="return confirm('Silmek istediğinizden emin misiniz?');" ></a>
			  </script>
			    <tr class="odd gradeX">
                  <td style="text-align: center;font-weight: bold">İsim Soyisim</td>
                  <td><?=$user[0]->username?></td>
				</tr>
			    <tr class="odd gradeX">
                  <td style="text-align: center;font-weight: bold">Email</td>
                  <td><?=$user[0]->email?></td>
				</tr>
          <tr class="odd gradeX">
                  <td style="text-align: center;font-weight: bold">Şehir</td>
                  <td><?=$user[0]->il_adi?></td>
        </tr>
          <tr class="odd gradeX">
                  <td style="text-align: center;font-weight: bold">Pozisyon</td>
                  <td><?=$user[0]->position_type?></td>
        </tr>
			    <tr class="odd gradeX">
                  <td style="text-align: center;font-weight: bold">Doğum Tarihi</td>
                  <td>0/0/0</td>
				</tr>
                <tr class="odd gradeX">
                  <td style="text-align: center;font-weight: bold">İşlemler</td>
				  <td>
				  <a href="<?=base_url()?>admin/uyeler/user_update_panel/<?=$user[0]->id?>"><span class="btn btn-success"><li class="icon icon-edit"> </li> Düzenle</span></a>
				  <a href="<?=base_url()?>admin/uyeler/user_delete/<?=$user[0]->id?>/<?=$this->session->admin_logged_in["id"]?>" onclick="return confirm_delete()"><span class="btn btn-danger"><li class="icon icon-trash"> </li> Sil</span></a>
				  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
          <h5>Yetenekler</h5>
        </div>
        <div class="widget-content">
          <ul class="unstyled">
            <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 81% Clicks <span class="pull-right strong">567</span>
              <div class="progress progress-striped active">
                <div style="width: 81%;" class="bar"></div>
              </div>
            </li>
            <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 72% Uniquie Clicks <span class="pull-right strong">507</span>
              <div class="progress progress-success progress-striped active ">
                <div style="width: 72%;" class="bar"></div>
              </div>
            </li>
            <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> 53% Impressions <span class="pull-right strong">457</span>
              <div class="progress progress-warning progress-striped active">
                <div style="width: 53%;" class="bar"></div>
              </div>
            </li>
            <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 13% Online Users <span class="pull-right strong">8</span>
              <div class="progress progress-danger progress-striped active">
                <div style="width: 13%;" class="bar"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>	
	
	
  </div>
</div>