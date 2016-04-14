<div class="list-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-9 col-lg-9">

				<div class="product-detail">
					<div class="row">
						<div class="col-sm-5 col-md-5 col-lg-5">
							<div id="photo_product">
								<div class="big-photo">
									<img src="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image2.jpg" data-zoom-image="http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image2.jpg" class="img-zoom img-responsive" alt=""/>
								</div>
								<div class="list-photos">
									<ul class="list-unstyled">
										<?php if (!empty($photo->image1)) : ?>
										<li><a href="javascript:void(0)" onclick="loadImage('<?=cover_image_path($photo->image1)?>')" rel="<?=cover_image_path($photo->image1)?>"><img src="<?=cover_image_path($photo->image1)?>" class="img-responsive" alt=""/></a></li>
										<?php endif ?>
										<?php if (!empty($photo->image2)) : ?>
										<li><a href="javascript:void(0)" onclick="loadImage('<?=cover_image_path($photo->image2)?>')"><img src="<?=cover_image_path($photo->image2)?>" class="img-responsive" alt=""/></a></li>
										<?php endif ?>
										<?php if (!empty($photo->image3)) : ?>
										<li><a href="javascript:void(0)" onclick="loadImage('<?=cover_image_path($photo->image3)?>')"><img src="<?=cover_image_path($photo->image3)?>" class="img-responsive" alt=""/></a></li>
										<?php endif ?>
										<?php if (!empty($photo->image4)) : ?>
										<li><a href="javascript:void(0)" onclick="loadImage('<?=cover_image_path($photo->image4)?>')"><img src="<?=cover_image_path($photo->image4)?>" class="img-responsive" alt=""/></a></li>
										<?php endif ?>
										<?php if (!empty($photo->image5)) : ?>
										<li><a href="javascript:void(0)" onclick="loadImage('<?=cover_image_path($photo->image5)?>')"><img src="<?=cover_image_path($photo->image5)?>" class="img-responsive" alt=""/></a></li>
										<?php endif ?>
									</ul>
								</div>
							</div>	
						</div>
						<div class="col-sm-7 col-md-7 col-lg-7">
							<div class="detail">
								<h1><?php echo ($s_lang == 'vi') ? $product->title : $product->title_en ?></h1>
								<p class="price">
									<?php if ($product->price_promotion != 0) : ?>
										<span class="promotion"><?=$this->lang->line('txt_price_promotion')?>: <?=number_format($product->price_promotion, '3', ',', '')?> đ</span>
										<span><?=$this->lang->line('txt_price')?>: <?=number_format($product->price, '3', ',', '')?> đ</span>
									<?php else : ?>
										<span><?=$this->lang->line('txt_price')?>: <?=number_format($product->price, '3', ',', '')?> đ</span>
									<?php endif ?>
									<span class="viewed pull-right"><i class="fa fa-eye"></i> <?=$product->viewed?></span>
								</p>
								<div class="desc">
									<?php echo ($s_lang == 'vi') ? $product->content : $product->content_en ?>
								</div>

								<p class="text-center">
									<a href="javascript:void(0)" onclick="loadModalOrder('<?=$product->title?>')" class="btn btn-success"><i class="fa fa-shopping-bag"></i> <?=$this->lang->line('txt_addcart')?></a>
								</p>
							</div>	
						</div>
					</div>					
				</div><!--End Product Detail -->

				<div class="sp-related">
					<h3 class="title title-s-13"> <i class="fa fa-list-alt"></i> <?=$this->lang->line('txt_product_related');?></h3>
					<?php if (count($related) > 0) : ?>
						<div class="row">
							<?php foreach ($related as $product) : ?>
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
				</div><!--End San pham lien quan -->
				

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

<!--Modal order -->
<div class="modal fade" id="modal-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        	<h4 class="modal-title" id="myModalLabel"><?=$this->lang->line('txt_order')?></h4>
	      	</div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="form-order">
		        			<h2 class="title-s-30 text-center">
		        				<?=$this->lang->line('txt_order_form_title')?>
		        				<span>(<?=$this->lang->line('txt_order_form_subtitle')?>)</span>
		        			</h2>
		        			<div class="form-group">
		        				<input class="form-control" type="text" name="order_product_name" id="order_product_name" placeholder="" />
		        			</div>
		        			<div class="form-group">
		        				<input class="form-control" type="text" name="order_fullname" id="order_fullname" placeholder="<?=$this->lang->line('txt_fullname')?>" />
		        			</div>
		        			<div class="form-group">
		        				<input class="form-control" type="text" name="order_address" id="order_address" placeholder="<?=$this->lang->line('txt_address')?>" />
		        			</div>
		        			<div class="form-group">
		        				<input class="form-control" type="text" name="order_phone" id="order_phone" placeholder="<?=$this->lang->line('txt_phone')?>" />
		        			</div>
		        			<div class="form-group">
		        				<input class="form-control" type="text" name="order_email" id="order_email" placeholder="Email" />
		        			</div>
		        			<div class="form-group">
		        				<textarea class="form-control" name="order_message" id="order_message" placeholder="<?=$this->lang->line('txt_message')?>"></textarea>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		    </div>
		    <div class="modal-footer">
		    	<button type="button" class="btn btn-default" data-dismiss="modal"><?=$this->lang->line('txt_close')?></button>
		        <a href="javascript:void(0)" onclick="order_email()" class="btn btn-primary" id="btn-submit"><?=$this->lang->line('txt_send')?></a>
		    </div>
	    </div>	
  	</div>
</div>