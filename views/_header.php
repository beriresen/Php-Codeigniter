<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$sayfa?><?=$veri[0]->admin_title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?$veri[0]->description?>"><!-- dataları sayfaya gönderiyorum-->
		<meta name="keywords" content="<?$veri[0]->keywords?>">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?=base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="<?=base_url()?>assets/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?=base_url()?>assets/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?=base_url()?>assets/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>				
		<script src="<?=base_url()?>assets/themes/js/superfish.js"></script>	
		<script src="<?=base_url()?>assets/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div class="span6">

	<span class="text"><span class="line"><strong>Hoşgeldiniz</strong></span></span></span>
	
	<?php if($this->session->flashdata("login_hata")) {?>
	<div class="alert alert-error">
		<strong><?=$this->session->flashdata("login_hata")?></strong>
		</div>
	<?php }else{ ?>
		<strong><?=$this->session->logged["adsoy"]?></strong>
	<?php } ?>
	</div>
	<div class="span6">
	<div class="pull-right">
		<?php 
			if($this->session->logged["id"]!=NULL ){ 
			$query=$this->db->query("SELECT count(id) as say FROM sepet WHERE musteri_id=".$this->session->logged["id"]);
			$sepet=$query->result();
		?>
		<a href="<?=base_url()?>home/sepet_listesi">
			<span class="btn  btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?=$sepet[0]->say?> ] Sepeti Goster </span> 
		</a> 
        <?php }else{ ?>
		
		<?php } ?>
		<div class="btn-group">
			<a href="<?=base_url()?>home/musteri_goster/<?=$this->session->logged["id"]?>" style="padding-right:0">
				<span class="btn btn-success"><?=$this->session->logged["adsoyad"]?></span>
			</a>
          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>home/musteri_goster/<?=$this->session->logged["id"]?>">Goruntule</a></li>
            <li><a href="<?=base_url()?>home/musteri_duzenle/<?=$this->session->logged["id"]?>">Duzenle</a></li>
            <li class="divider"></li>
            <li><a href="<?=base_url()?>home/log_out">Cikis</a></li>
          </ul>
        </div>
	</div>
	</div>
</div>
	
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form href="" method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">		
							
							<?php if( $this->session->front_logged_in["adsoy"] ){ ?>
							<li><a href="<?=base_url()?>home/musteri_goster/<?=$this->session->front_logged_in["Id"]." "?>">uyebilgiler</a></li>
							<li><a href="<?=base_url()?>home/log_out">Çıkış</a></li>
							<?php } else{ ?> 
								<li><a href="<?=base_url()?>home/login">Üye Girişi</a></li>

							<?php } ?>
							<li><a href="<?=base_url()?>home/sepet_listesi">Sepet</a></li>						                      	
						</ul>
					</div>
				</div>  
			</div>
		</div>
		
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?=base_url()?>" class="logo pull-left"><img src="assets/themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
					
						<ul>				
							<li><a href="<?=base_url()?>home">Anasayfa</a></li>
							<li><a href="<?=base_url()?>home/kategori"> Kategoriler  </a>							</li>								
							<li><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>	
							<li><a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
						    <li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
						    <?php if( $this->session->front_logged_in["id"]<1 ){ ?>	
						    <li><a href="<?=base_url()?>home/uyeol_paneli">Üye Ol</a></li>
							<?php  } ?>
						    													
						</ul>

					</nav>
				</div>
			</section>
			</div>