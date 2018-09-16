<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$veri[0]->admin_title?></title>
<meta charset="UTF-8" />  
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/fullcalendar.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/googleapis.css" />

<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/colorpicker.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/datepicker.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/uniform.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/select2.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap-wysihtml5.css" />

<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/jquery.gritter.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/matrix-style.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/matrix-media.css" />
<link href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header" >
  <h1><a href="dashboard.html"></a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse" >
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" >
      <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
        <i class="icon icon-user"></i>  <span class="text">Hoşgeldiniz <?=$this->session->admin_logged_in["username"]?></span><b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a href="<?=base_url()?>admin/home/user_view_panel/<?=$this->session->admin_logged_in["id"]?>"><i class="icon-user"></i> Profilim </a></li>
        <li class="divider"></li>
        <li><a href="<?=base_url()?>admin/home/user_update_panel/<?=$this->session->admin_logged_in["id"]?>"><i class="icon-check"></i> Düzenle</a></li>
        <li class="divider"></li>
        <li><a href="<?=base_url()?>admin/login/logout"><i class="icon-key"></i> Çıkış</a></li>
      </ul>
    </li>
    <li  class="dropdown" id="cc-messages" >
      <a title="" href="#" data-toggle="dropdown" data-target="#cc-messages" class="dropdown-toggle">
        <i class="icon icon-plus"></i>  <span class="text">steps  </span><b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a href=""><i class="icon-plus"></i> step 1 </a></li>
        <li class="divider"></li>
        <li><a href=""><i class="icon-plus"></i> step 2 </a></li>
        <li class="divider"></li>
        <li><a href=""><i class="icon-plus"></i> step 3 </a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages">
      <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
        <i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="<?=base_url()?>admin/home/write_message_panel"><i class="icon-plus"></i> Yeni mesaj</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> Gelen Kutusu</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> Giden Kutusu</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>    
    <li class=""><a title="" href="<?=base_url()?>admin/home/urunler"><i class="idcon icon-book"></i> <span class="text"> Ürünler </span></a></li>
    <li class=""><a title="" href="<?=base_url()?>admin/home/settings"><i class="icon icon-cog"></i> <span class="text"> Ayarlar </span></a></li>
    <li class=""><a title="" href="<?=base_url()?>admin/login/logout"><i class="icon icon-share-alt"></i> <span class="text"> Çıkış </span></a></li>
  </ul>
</div>
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->