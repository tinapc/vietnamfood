<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $template['title']?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<link href="<?= base_url() ?>assets/front/css/vietnamesefood.css" rel="stylesheet">
    	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/responsive.css">

    	<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>

		<script type="text/javascript">
			var base_url = '<?php echo base_url()?>';
		</script>

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
						<a class="logo" href="/">
							<img src="<?=base_url()?>assets/front/images/logo.png" alt="">
							<span class="comp-name"><?=$this->load->get_var('company_name')?></span>
						</a>
					</div>
					<div class="col-sm-7 col-md-7">
						<div class="search-block text-right">
							<div class="form pull-right">
								<?=$this->lang->line('txt_search')?>
								<input class="" type="text" placeholder="Nhập từ khóa" />
							</div>

							<div class="icon-langs pull-right">
								<a href="javascript:void(0)" onclick="changeLang('en')" class="en"></a>
								<a href="javascript:void(0)" onclick="changeLang('vi')" class="vi"></a>
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
									        <li><a href="<?php echo site_url('introduction')?>"><?=$this->lang->line('nav_gt')?></a></li>
									        <li class="dropdown">
									        	<a href="<?php echo site_url('product')?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$this->lang->line('nav_sp')?> <span class="caret"></span></a>
									          	<ul class="dropdown-menu">
									            	<li><a href="#">Action</a></li>
									            	<li><a href="#">Another action</a></li>
									            	<li><a href="#">Something else here</a></li>
									            	<li role="separator" class="divider"></li>
									            	<li><a href="#">Separated link</a></li>
									          	</ul>
									        </li>
									        <li><a href="<?php echo site_url('promotion')?>"><?=$this->lang->line('nav_km')?></a></li>
									        <li><a href="<?php echo site_url('distributary')?>"><?=$this->lang->line('nav_distributary')?></a></li>
									        <li><a href="<?php echo site_url('quality')?>"><?=$this->lang->line('nav_quality')?></a></li>
									        <li><a href="<?php echo site_url('contact')?>"><?=$this->lang->line('nav_lh')?></a></li>
								      	</ul>
								    </div><!-- /.navbar-collapse -->
							  	</div><!-- /.container-fluid -->
							</nav>
						</div>			
					</div>
				</div>
			</div>
		</div>

	    <?php if($this->router->fetch_class() == 'welcome') : ?>
	   		<?php widget::run('main_banner');?>
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


	    <?php echo $template['partials']['footer'];?>

		
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