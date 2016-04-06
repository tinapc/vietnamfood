<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>Login Access</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="../assets/admin/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="../assets/admin/fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
	<link href="../assets/admin/css/style.css" rel="stylesheet" />	
	<link href="../assets/admin/css/custom.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center">LOGIN</h3>
			</div>
			<div>
				<form style="margin-bottom: 0px !important;" class="form-horizontal" action="<?=base_url()?>auth/login" method="post">
					<div class="content">
						<h4 class="title">Login Access</h4>
							
							<?php $mess = $this->session->flashdata('message');  if( $mess !=='') : ?>
								<div class="form-group">
			                        <div class="alert alert-danger">
			                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			                              <i class="fa fa-times-circle sign"></i>
			                              <strong>Error!</strong> <?php echo $this->session->flashdata('message');?>
			                         </div>
			                    </div>
		                    <?php endif ?>
						
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Username" id="identity" name="identity" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" id="password" name="password" class="form-control">
									</div>
								</div>
							</div>
							<input type="hidden" id="remember" name="remember" value="1" class="form-control">
							
					</div>
					<div class="foot">
						<!-- <button class="btn btn-default" data-dismiss="modal" type="button">Quên mật khẩu</button> -->
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Đăng nhập</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; <?php echo date('Y')?> VietnameseFoodTraditional.Com</a></div>
	</div> 
	
</div>

<script src="../assets/admin/js/jquery.js"></script>
<script type="text/javascript" src="../assets/admin/js/behaviour/general.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/admin/js/behaviour/voice-commands.js"></script>
<script src="../assets/admin/s/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
