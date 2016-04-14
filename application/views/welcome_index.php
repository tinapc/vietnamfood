<?php foreach ($cates as $cate) : ?>
<div class="product-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="product-big-photo">
					<a href="<?=site_url('product/category/' .$cate->alias)?>">
						<img src="<?=cover_image_path($cate->image)?>" class="img-responsive" alt=""/>
					</a>
					<span><?php echo ($s_lang == 'vi') ? $cate->title : $cate->title_en ?></span>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="cate-product">
					<div class="cate-intro">
						<h2 class="title-s-18"><a href="<?=site_url('product/category/' .$cate->alias)?>"><?php echo ($s_lang == 'vi') ? $cate->title : $cate->title_en ?></a></h2>
						<p><?php echo ($s_lang == 'vi') ? word_limiter($cate->intro,25) : word_limiter($cate->intro_en,25) ?></p>	
					</div>

					<?php 
						$this->db->select('title, title_en, alias,id');
						$this->db->where(array('parent' => $cate->id, 'published' => 1) );
						$this->db->limit(3);
						$this->db->order_by('id', 'desc');
						$products = $this->db->get('resource')->result();
					?>
					<?php if (count($products) > 0) : ?>
					<div class="row">
						<?php foreach($products as $product) : ?>
							<?php 
								$this->db->select('image1');
								$img = $this->db->get_where('product_image', array('pro_id' => $product->id))->row();
							?>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<div class="pro-item text-center">
									<a href="<?=site_url('product/view/'. $product->id)?>">
										<img src="<?=cover_image_path($img->image1)?>" class="img-responsive" alt=""/>
									</a>
									<div class="pro-info">
										<h3><a href="<?=site_url('product/view/'. $product->id)?>"><?php echo ($s_lang == 'vi') ? $product->title : $product->title_en ?></a></h3>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
					<?php endif ?>
					<div class="clearfix"></div>
					<div class="text-right">
    					<a href="<?=site_url('product/category/' .$cate->alias)?>" class="view-all-product">
    						<i class="fa fa-long-arrow-right"></i> <?=$this->lang->line('txt_view_more')?>
    					</a>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<?php endforeach ?>

<div class="footer-home">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="block">
					<h3 class="title-s-18"><a href="<?=site_url('introduction')?>"><?php echo ($s_lang === 'vi') ? $introduc->title : $introduc->title_en?></a></h3>
					<p><?php echo ($s_lang === 'vi') ? word_limiter($introduc->intro, 60) : word_limiter($introduc->intro_en,60)?></p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="block">
					<h3 class="title-s-18"><a href="<?=site_url('promotion')?>"><?php echo ($s_lang === 'vi') ? $promotion->title : $promotion->title_en?></a></h3>
					<p>
						<img src="<?=cover_image_path($promotion->image)?>" class="img-responsive" alt=""/>
					</p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="block support">
					<h3 class="title-s-18"><a href="">hổ trợ trực tuyến</a></h3>
					<div class="c">
						<div class="nickchat text-right">
							<a href="javascript:;" rel="skype"><img src="<?=base_url()?>assets/front/images/icons/skype2.png"></a>
							<a href="javascript:;" rel="yahoo"><img src="<?=base_url()?>assets/front/images/icons/callphone.png"></a>
						</div>
						<p class="hotline">Hotline: <?=$this->load->get_var('hotline')?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>