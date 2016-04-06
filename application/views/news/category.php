<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-big"><img src="<?=base_url()?>assets/front/images/category_icon.png" alt=""> <?=$this->load->get_var('title')?></h3>
			<div class="clearfix"></div>
			<div class="list-news">
				<?php foreach($content as $row) : ?>
				<div class="row">
					<div class="col-xs-3">
						<?php if($row->image !=='') : ?>
							<img src="<?=cover_image_path($row->image)?>" class="img-thumbnail" alt="<?=$row->title?>">
						<?php else : ?> 
							<img src="http://dummyimage.com/250x150/4d494d/686a82.gif&text=No Image" class="img-thumbnail" alt="<?=$row->title?>">
						<?php endif?>
					</div>
					<div class="col-xs-9">
						<a href="<?=site_url('tin-tuc/'. $row->alias)?>" class="title"><?=$row->title?></a>
						<p class="intro"><?=$row->intro?></p>
					</div>
				</div>
				<?php endforeach?>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<nav class="text-center">
		<?php echo $pagi?>

	</nav>

</div><!--End Left Col-->