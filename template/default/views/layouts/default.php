<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $template['title']?></title>
		<meta name="description" content="<?=$this->load->get_var('seo_description')?>"/>
		<meta name="keywords" content="<?=$this->load->get_var('seo_keyword')?>"/>
		<link rel="canonical" href="<?=($this->load->get_var('seo_url')) ? $this->load->get_var('seo_url') : current_url()?>" />

		<!--This meta only for Facebook-->
		<meta property="og:image" content="<?=$this->load->get_var('seo_image')?>"/>
		<meta property="og:url" content="<?=($this->load->get_var('seo_url')) ? $this->load->get_var('seo_url') : current_url()?>"/>
		<meta property="og:title" content="<?php echo $template['title']?>"/>
		<meta property="og:description" content="<?=$this->load->get_var('seo_description')?>"/>
		<meta property="og:site_name" content="<?=$this->load->get_var('site_name')?>"/>
		<meta property="fb:app_id" content="872365952794421">
		<!--End Meta for Facebook-->

		<!--Meta for Twitter-->
		<meta name="twitter:card" content="summary"/> 
		<meta name="twitter:site" content="<?=$this->load->get_var('site_name')?>"/> 
		<meta name="twitter:title" content="<?php echo $template['title']?>"/> 
		<meta name="twitter:description" content="<?=$this->load->get_var('seo_description')?>"/> 
		<meta name="twitter:image" content="<?=$this->load->get_var('seo_image')?>"/>

		<!-- Schema.org markup for Google+ --> 
		<meta itemprop="name" content="<?php echo $template['title']?>"/> 
		<meta itemprop="description" content="<?=$this->load->get_var('seo_description')?>"/> 
		<meta itemprop="image" content="<?=$this->load->get_var('seo_image')?>"/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<link href="<?= base_url() ?>assets/front/css/vietnamesefood.css" rel="stylesheet">
    	<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/responsive.css">

    	<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570fd759e9e79ca5"></script>


		<script type="text/javascript">
			var base_url = '<?php echo base_url()?>',
				txt_success = '<?=$this->lang->line("txt_send_email_ok")?>',
				txt_error = '<?=$this->lang->line("txt_send_email_error")?>';
		</script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
	<?php 
	$this->db->select('id, title, title_en, alias');
	$this->db->order_by('menu_index', 'asc');
	$catePros = $this->db->get_where('resource', array('content_type' => 'cate_product', 'published' => 1))->result();
	?>

		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<a class="logo" href="/">
							<img src="<?=cover_image_path($this->load->get_var('logo'))?>" alt="" style="max-width: 112px; max-height: 110px">
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
									        	<a href="<?php echo site_url('product')?>" class="dropdown-toggle"><?=$this->lang->line('nav_sp')?> <span class="caret"></span></a>
									        	<?php if (count($catePros) > 0) : ?>
									          	<ul class="dropdown-menu">
									          		<?php foreach ($catePros as $cat) : ?>
									            	<li><a href="<?=site_url('product/category/' . $cat->alias)?>"><?php echo ($s_lang == 'vi') ? $cat->title : $cat->title_en ?></a></li>
									            	<?php endforeach ?>
									          	</ul>
									          	<?php endif ?>
									        </li>
									        <li><a href="<?php echo site_url('news/job')?>"><?=$this->lang->line('nav_km')?></a></li>
									        <li><a href="<?php echo site_url('news/distributary')?>"><?=$this->lang->line('nav_distributary')?></a></li>
									        <li><a href="<?php echo site_url('news/culinary')?>"><?=$this->lang->line('nav_quality')?></a></li>
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
			<div class="crumb">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php widget::run('breadcrumb', $breadcrumb) ?>		
						</div>
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
		
		<script type="text/javascript" src="<?=base_url()?>assets/front/plugin/elevatezoom/jquery.elevatezoom.js"></script>

 		<!-- <script src="Hello World"></script> -->
 		<script type="text/javascript">
 			jQuery(document).ready(function($) {
 				$('.carousel-inner .item:first').addClass('active');

 				// Zoom image
 				$('.img-zoom').elevateZoom({
 					tint:true, tintColour:'#F90', tintOpacity:0.5
 				}); 
 			});
 		</script>
 		<script src="<?=base_url()?>assets/front/js/main.js"></script>
	</body>
</html>