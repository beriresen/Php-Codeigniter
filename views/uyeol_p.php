	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
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
	

	
	<script>
		function validateForm() {
			if (document.forms["myForm"]["adsoy"].value == "") {
				alert("Ad soyad alanı dolu olmalı");
				return false;
			}
			if (document.forms["myForm"]["email"].value == "") {
				alert("Email alanı dolu olmalı");
				return false;
			}

			if (document.forms["myForm"]["sifre"].value == "") {
				alert("Şifre alanı dolu olmalı");
				return false;
			}
			
		}
	</script>
	<div id="wrapper" class="container">
		
				<?php if($this->session->flashdata("sonuc"))
				{ ?>
				<div class="alert alert-success" role="alert"> 
					<strong>İşlem:</strong><?=$this->session->flashdata("sonuc")?>
				
				</div>
				<?php }?>
			
			<section class="header_text sub">
			<img class="pageBanner" src="assets/themes/images/pageBanner.png" alt="New products">
				<h4><span>Üye Girişi / Üye Kaydı</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Üye</strong> Giriş Formu</span></h4>
						<form action="<?=base_url()?>home/login_ol" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Adınız</label>
									<div class="controls">
										<input type="text" name="adsoy" placeholder="Adınzı Giriniz" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifreniz</label>
									<div class="controls">
										<input type="password" name="sifre" placeholder="Şifrenizi Giriniz" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Hesaba Gir">
									<hr>
									<p class="reset">Kullanıcı adı ya da şifrenizi <a tabindex="4" href="#" title="Recover your username or password">doğru giriniz.</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Üye </strong> Kayıt Formu</span></h4>
						<form action="<?=base_url()?>home/uyeol" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Adınız</label>
									<div class="controls">
										<input type="text" name="adsoy" placeholder="Adınzı Giriniz" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Emailiniz:</label>
									<div class="controls">
										<input type="email" name="email"  placeholder="Emailinizi Giriniz" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifreniz:</label>
									<div class="controls">
										<input type="password" name="sifre" placeholder="Şifrenizi Giriniz" class="input-xlarge">
									</div>
								</div>							                            
							
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Hesabı oluştur"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>			
			
		</div>
	

 </body>
</html>