<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title><meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/jquery.gritter.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/matrix-style.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/matrix-media.css" />
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/matrix-login.css" />
    <link href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>



	
</head>
<body>
    <div id="loginbox">            
        <form id="loginform" class="form-vertical" method="post" action="<?=base_url()?>admin/login/login_ol">
			<div class="control-group normal_text"> <h3><img src="<?=base_url()?>assets/admin/img/logo.png" alt="Logo" /></h3></div>
			<div class="control-group normal_text"> <h3>BRR</h3></div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" name="email" placeholder="Username" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
						<button class="btn btn-success">Login</button>
					</div>
                </div>
            </div>
		</form>	
		<?php 
			if($this->session->flashdata("sonuc")) {
		?>
		<div class="widget-content">
			<div class="alert alert-info">
			  <button class="close" data-dismiss="alert">×</button>
			  <strong>Info!</strong> <?=$this->session->flashdata("sonuc")?>
			</div>
		</div>
		<?php
		} 
		?>
    </div>
</body>
</html>
