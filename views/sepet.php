<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$sayfa?><?=$veri[0]->admin_title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?$veri[0]->description?>"><!-- datalarý sayfaya gönderiyorum-->
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
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
						
							<li><a href="<?=base_url()?>home/hesabim">Hesabým</a></li>
							<li><a href="<?=base_url()?>home/sepet">Sepet</a></li>
							<li><a href="<?=base_url()?>home/login">Üye Giriþi</a></li>				
						</ul>
					</div>
				</div>
			</div>
		</div>
	
			</section>				

			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>