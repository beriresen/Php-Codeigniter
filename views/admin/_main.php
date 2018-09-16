<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=base_url()?>admin/home" title="Anasayfaya git" class="current tip-bottom"  ><i class="icon-home"></i> Anasayfa</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lo"> <a href="<?=base_url()?>admin/"> <i class="icon-home"></i> Anasayfa</a> </li>
        <li class="bg_lb"> <a href="<?=base_url()?>admin/home/users"> <i class="icon-user"></i> <span class="label label-important"><?=$user_count[0]->user_count;?></span> Üyeler </a> </li>
        <li class="bg_lg span3"> <a href="<?=base_url()?>admin/home/settings"> <i class="icon-cog"></i> Genel Ayarlar</a> </li>
        <li class="bg_ly"> <a href="<?=base_url()?>admin/home/subjects"> <i class="icon-book"></i><span class="label label-success"><?=$subject_count[0]->subject_count?></span> Ürünler </a> </li>
        <li class="bg_ls"> <a href=""> <i class="icon-inbox"></i><span class="label label-success">101</span> Gelen Kutusu</a> </li>
        <li class="bg_ly span3"> <a href="<?=base_url()?>admin/home/write_message_panel"> <i class="icon icon-envelope"></i> Mesaj Yazınız</a> </li>
        <li class="bg_lo"> <a href="<?=base_url()?>admin/home/about">   <i class="icon-book"></i> Hakkımızda</a> </li>
        <li class="bg_ls"> <a href="<?=base_url()?>admin/home/contact"> <i class="icon-phone-sign"></i> İletişim</a> </li>
        <li class="bg_lg"> <a href=""> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_ly"> <a href=""> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
        <li class="bg_lb"> <a href=""> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lr"> <a href=""> <i class="icon-info-sign"></i> Error</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

    <hr/>

  </div>
</div>

<!--end-main-container-part-->