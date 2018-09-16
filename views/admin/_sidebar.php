<!--sidebar-menu-->
<div id="sidebar" ><a href="#" class="visible-phone"><i class="icon icon-reorder"></i> Menü </a>
<?php 
  $home="";
  $kampanya="";
  $general_settings="";
  $settings="";
  $about="";
  $contact="";
  $users="";
  $message="";
  $message_write="";
  $general_subjects="";
  $user_settings="";
  $user_positions="";
  $subjects="";  
  $categories="";
  $types="";
  switch($menu){
    case "home":          $home="active";                                         break;
    case "kampanya":      $kampanya="active";                                   break;
    case "users":         $user_settings="active";     $users="active";           break;
    case "users_status":  $user_settings="active";     $user_positions="active";  break;
    case "subjects":      $general_subjects="active";  $subjects="active";        break; 
    case "categories":    $general_subjects="active";  $categories="active";      break;
    case "types":         $general_subjects="active";  $types="active";           break;
    case "settings":      $general_settings="active "; $settings="active";        break;
    case "about":         $general_settings="active "; $about="active";           break;
    case "contact":       $general_settings="active "; $contact="active";         break;
    case "message":       $message="active ";          $message_write="active";   break;
  }

?>
  <ul>
    <li class="<?=$home?>"><a href="<?=base_url()?>admin/home"><i class="icon icon-home"></i> <span>Anasayfa</span></a> </li>
    <li class="<?=$kampanya?>"><a href="<?=base_url()?>admin/urunler/kampanya"><i class="icon icon-home"></i> <span>Kampanya</span></a> </li>
    <li  class="submenu <?=$user_settings?>"> <a href="#"><i class="icon icon-user"></i> <span>Üyeler</span> </a>
      <ul>
        <li class="<?=$users?>"><a href="<?=base_url()?>admin/uyeler"><i class="icon icon-user"></i> <span>Üyeler </span></a></li>
      </ul>
	  
	      
    </li>
    <li  class="submenu <?=$general_subjects?>"> <a href="#"><i class="icon icon-bookmark"></i> <span>Ürünler</span> </a>
      <ul>
        <li class="<?=$subjects?>">   <a href="<?=base_url()?>admin/urunler">   <i class="icon icon-book"></i> <span>Ürünler1 </span></a></li>
        <li class="<?=$categories?>"><a href="<?=base_url()?>admin/home/categories"><i class="icon icon-cog"></i> <span>Kategoriler </span></a></li>
      </ul>
    </li>
    <li  class="submenu <?=$general_settings?>"> <a href="#"><i class="icon icon-cogs"></i> <span>Ayarlar</span> </a>
      <ul>
        <li class="<?=$settings?>"><a href="<?=base_url()?>admin/home/settings"><i class="icon icon-cog"></i> <span>Genel Ayarlar </span></a></li>
        <li class="<?=$about?>">   <a href="<?=base_url()?>admin/home/about">   <i class="icon icon-book"></i> <span>Hakkımızda </span></a></li>
        <li class="<?=$contact?>"> <a href="<?=base_url()?>admin/home/contact"> <i class="icon icon-phone-sign"></i> <span>İletişim      </span></a></li>
      </ul>
    </li>
    <li class="submenu <?=$message?>"> <a href="<?=base_url()?>admin/home/mesaj_listesi"><i class="icon  icon-envelope"></i> <span>Mesajlar</span> </a>

      <ul>
        <li class="<?=$message_write?>"><a href="<?=base_url()?>admin/home/mesaj_goster"><i class="icon icon-plus"></i> <span>Mesaj yaz    </span></a></li>
        <li class="<?=$about?>">   <a href="<?=base_url()?>admin/home/mesaj_listesi">   <i class="icon icon-envelope"> </i> <span>Gelen kutusu </span></a></li>
        <li class="<?=$contact?>"> <a href="<?=base_url()?>admin/home/contact"> <i class="icon icon-arrow-up">   </i> <span>Giden kutusu </span></a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>

  </ul>
</div>
<!--sidebar-menu-->
