<div class="col-xs-12">
	<div class="row">
		
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-12">
					<h3 style="padding:0px; margin-top:0px; margin-bottom:20px;"><?=$content->title?></h3>
					<?php if($content->image !=='') : ?>
						<img style="max-width:300px; margin-right:10px; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 4px;" class="pull-left" src="<?=cover_image_path($content->image)?>" class="img-responsive" alt="<?=$content->title?>">
					<?php else : ?>
						<img style="max-width:300px; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 4px;" class="pull-left" src="http://dummyimage.com/250x150/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image" class="img-responsive">
					<?php endif ?>
					<div class="content-service">
						<?=$content->content?>
					</div>
				</div>
				<!-- <div class="col-xs-4">
					
				</div> -->
			</div>
		</div>
	</div>

	<?php if(count($catepros)) : ?>
	<?php foreach($catepros as $row) : ?>
		<?php 
			$this->db->where(array('published' => 1, 'content_type' => 'product_item', 'parent' => $row->id));
			$products = $this->db->get('resource')->result();
		?>
		<?php if(count($products)) : ?>
			<div class="row">
				<div class="col-xs-12">
					<h3 class="cate_pro"><span><?=$row->title?></span></h3>
					<div class="row list-product">
						 
							<?php foreach($products as $pro) : ?> 
								<div class="col-sm-4 text-center">
									<a href="<?=site_url('san-pham/'. $pro->alias)?>" style="color:#ec9523">
										<?php if($pro->image !=='') : ?>
										<img src="<?=cover_image_path($pro->image)?>" class="img-responsive img-thumbnail" alt="<?=$pro->title?>">
										<?php else : ?> 
										<img src="http://dummyimage.com/250x150/4d494d/686a82.gif&text=No Image" alt="placeholder+image" class="img-responsive img-thumbnail">
										<?php endif ?>
										<div class="clearfix"></div>
										<h4><?=$pro->title?></h4>
									</a>
								</div>
							<?php endforeach ?>
						
					</div>
				</div>
			</div>
		<?php endif ?>
	<?php endforeach; endif ?>

</div><!--End Left Col-->