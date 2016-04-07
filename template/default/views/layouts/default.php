<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<link href="<?= base_url() ?>assets/front/css/vietnamesefood.css" rel="stylesheet">
    	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/responsive.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<a class="logo" href="">
							<img src="<?=base_url()?>assets/front/images/logo.png" alt="">
							<span class="comp-name">Company Name</span>
						</a>
					</div>
					<div class="col-sm-7 col-md-7">
						<div class="search-block text-right">
							<div class="form pull-right">
								<?=$this->lang->line('txt_search')?>
								<input class="" type="text" placeholder="Nhập từ khóa" />
							</div>

							<div class="icon-langs pull-right">
								<a href="" class="en"></a>
								<a href="" class="vi"></a>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="main-nav">
							<nav class="navbar navbar-default">
							 	<div class="container-fluid">
							    	<!-- Brand and toggle get grouped for better mobile display -->
								    <div class="navbar-header">
									    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									    	<span class="sr-only">Toggle navigation</span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									    </button>
								    </div>

								    <!-- Collect the nav links, forms, and other content for toggling -->
								    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								      
								     	<ul class="nav navbar-nav navbar-right">
									        <li><a href="#">Giới thiệu</a></li>
									        <li class="dropdown">
									        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm <span class="caret"></span></a>
									          	<ul class="dropdown-menu">
									            	<li><a href="#">Action</a></li>
									            	<li><a href="#">Another action</a></li>
									            	<li><a href="#">Something else here</a></li>
									            	<li role="separator" class="divider"></li>
									            	<li><a href="#">Separated link</a></li>
									          	</ul>
									        </li>
									        <li><a href="#">Khuyến mãi</a></li>
									        <li><a href="#">Phân phối</a></li>
									        <li><a href="#">Chất lượng</a></li>
									        <li><a href="#">Liên hệ</a></li>
								      	</ul>
								    </div><!-- /.navbar-collapse -->
							  	</div><!-- /.container-fluid -->
							</nav>
						</div>			
					</div>
				</div>
			</div>
		</div>

		<?php
	    $this->db->where(array('published' => 1, 'subPage' => 0));
	    $this->db->order_by('order', 'asc');
	    $banners = $this->db->get('bigbanner')->result();
	    ?>

	    <?php if($this->router->fetch_class() == 'welcome') : ?>
	    <div class="container-fluid" style="padding:0">
	        <div class="row">
	            <div class="col-xs-12">
	                <div id="banner">
	                    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
	                        <!-- Wrapper for slides -->
	                        <div class="carousel-inner" role="listbox">
	                            <?php foreach ($banners as $row) : ?>
	                                <div class="item">
	                                    <a href="<?= $row->linkTo ?>"><img src="<?= cover_image_path($row->image) ?>" alt=""></a>
	                                </div>
	                            <?php endforeach ?>
	                        </div>

	                        <!-- Controls -->
	                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	                            <span class="sr-only">Previous</span>
	                        </a>
	                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	                            <span class="sr-only">Next</span>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<?php else : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
						  	<li><a href="#">Library</a></li>
						  	<li class="active">Data</li>
						</ol>		
					</div>
				</div>
				
			</div>
		<?php endif ?>

	    <div id="main">
		    <?php echo $template['body']; ?>
	    </div>


	    <div id="footer">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-4 col-md-4 col-lg-4">
	    				<div class="copyright">
	    					<h4 class="title-s-13">COMPANY NAME</h4>
							<p>
							Địa chỉ: Số 0 TKD, P.Tân Định, Quận 1, Tp. Hồ Chí Minh.<br>
							Tel:  +84 11111111 - Fax: +84 111111111<br>
							Cell phone:  + 111111111 - Email: info@company.com<br>
							Copyright © Company. All Right Reserved.
							</p>
	    				</div>
	    			</div>
	    			<div class="col-sm-4 col-md-4 col-lg-4">
	    				<div class="social text-center">
	    					<h4 class="title-s-13"><?=$this->lang->line('txt_social')?></h4>
	    					<div class="link">
	    						<a class="fb" href=""><i class="fa fa-facebook"></i></a>
	    						<a class="google" href=""><i class="fa fa-google-plus"></i></a>
	    						<a class="tw" href=""><i class="fa fa-twitter"></i></a>
	    						<a class="pin" href=""><i class="fa fa-pinterest"></i></a>
	    						<a class="youtube" href=""><i class="fa fa-youtube"></i></a>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-sm-4 col-md-4 col-lg-4">
	    				<div class="tracking text-center">
	    					<h4 class="title-s-13"><?=$this->lang->line('txt_visitor')?></h4>
	    					<p>
	    					<?=$this->lang->line('txt_online')?>: 10<br>
	    					<?=$this->lang->line('txt_total')?>: 110</p>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<!-- <script src="Hello World"></script> -->
 		<script type="text/javascript">
 			jQuery(document).ready(function($) {
 				$('.carousel-inner .item:first').addClass('active');
 			});
 		</script>
 		<script src="<?=base_url()?>assets/front/js/main.js"></script>
	</body>
</html>