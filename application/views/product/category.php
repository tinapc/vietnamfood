<div class="list-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-9 col-lg-9">
				<?php if (count($products) > 0) : ?>
				<div class="row">
					<?php foreach ($products as $product) : ?>
						<?php 
							if ($product->price_promotion != 0) {
								$percent = ceil(($product->price_promotion * 100) / $product->price);
							} else {
								$percent = 0;
							}

							$this->db->select('image1');
							$img = $this->db->get_where('product_image', array('pro_id' => $product->id))->row();
						?>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="item-product">
							<?php if ($percent > 0) : ?>
							<div class="save-money">-<?=$percent?>%</div>
							<?php endif ?>
							<a class="a-1" href="<?=site_url('product/view/'. $product->id)?>">
								<img src="<?=cover_image_path($img->image1)?>" class="img-responsive" alt=""/>
							</a>
							<div class="clearfix"></div>
							<div class="price">
								<?php if ($product->price_promotion != 0) : ?>
									<span class="price-1 pull-left"><?=number_format($product->price_promotion, '3', ',', '')?> đ</span>
									<span class="price-2 pull-right"><?=number_format($product->price, '3', ',', '')?> đ</span>
								<?php else : ?>
									<span class="price-1 pull-left"><?=number_format($product->price, '3', ',', '')?> đ</span>
								<?php endif ?>
							</div>
							<div class="clearfix"></div>
							<h2 class="title-s-13"><a href="<?=site_url('product/view/'. $product->id)?>"><?php echo ($s_lang == 'vi') ? $product->title : $product->title_en ?></a></h2>
							<p class="viewed text-right">
								<i class="fa fa-eye"></i> <?=$product->viewed?>
							</p>
						</div>	
					</div>
					<?php endforeach ?>
				</div>
				<?php endif ?>
				<div class="pagi text-center">
					<nav>
					  	<?php echo $this->pagination->create_links(); ?>
					</nav>
				</div>

			</div>

			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="sidebar">
					<?php widget::run('support_online')?>
					<?php widget::run('most_view_product')?>
				</div>	
			</div>

		</div>
	</div>
</div>