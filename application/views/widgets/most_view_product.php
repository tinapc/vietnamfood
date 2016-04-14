<div class="sp-xem-nhieu">
	<div class="title title-s-13"><i class="fa fa-shopping-cart"></i> <?=$this->lang->line('txt_viewed_product');?></div>

	<?php if (count($most_view_products) > 0) : ?>
		<?php foreach ($most_view_products as $product) : ?>
			<?php 
				if ($product->price_promotion != 0) {
					$percent = ceil(($product->price_promotion * 100) / $product->price);
				} else {
					$percent = 0;
				}

				$this->db->select('image1');
				$img = $this->db->get_where('product_image', array('pro_id' => $product->id))->row();
			?>
			<div class="row">
				<div class="col-sm-12">
					<div class="item-product">
						<?php if ($percent > 0) : ?>
						<div class="save-money">-<?=$percent?>%</div>
						<?php endif ?>
						<a href="<?=site_url('product/view/'. $product->id)?>">
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
					</div>	
				</div>
			</div>
		<?php endforeach ?>
	<?php endif ?>
</div>
