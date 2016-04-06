<div class="col-xs-12">
	<div class="row">
		
		<div class="col-xs-12">
			<h3 class="title-big"><img src="<?=base_url()?>assets/front/images/category_icon.png" alt=""> Sản Phẩm & Dịch Vụ</h3>
			<div class="row">
				<?php foreach($content as $row) : ?>
					<div class="col-sm-4">
						<div class="item-field">
							<a href="<?=site_url('dich-vu/'.$row->alias)?>">
								<?php if($row->image !== '') : ?>
									<img src="<?=cover_image_path($row->image)?>" alt="<?=$row->title?>" class="img-responsive"/>
								<?php else : ?>
									<img src="http://dummyimage.com/45x46/4d494d/686a82.gif&text=No Image" alt="placeholder+image" class="img-responsive">
								<?php endif ?>
								<div class="clearfix"></div>
								<p><?=$row->title?></p>
								<p class="intro">
									<?=word_limiter($row->intro, 15)?>
								</p>
							</a>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</div><!--End Left Col-->