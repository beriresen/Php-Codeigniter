<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">      
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="assets/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="assets/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="assets/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="assets/themes/js/jquery-1.7.2.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>				
		<script src="assets/themes/js/superfish.js"></script>	
		<script src="assets/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
	
		<div id="wrapper" class="container">
					
			
			<section class="header_text sub">
			<img class="pageBanner" src="<?=base_url()?>assets/themes/images/pageBanner.png" alt="New products" >
				<h4><span>İletişim Bilgilerimiz</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div style="margin-left:45px; class="container">	
						<?=$veri[0]->contact?>
					</div>
						<form method="post" action="#"						
						</form>
				</div>	
			</section>				
		</div>
						
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
						<p class="logo"><img src="<?=base_url()?>assets/themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Hayallerinizdeki Işıltı.</p>
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
		<script src="<?=base_url()?>assets/themes/js/common.js"></script>		
    </body>
</html>