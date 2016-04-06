<div class="col-xs-9">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-cat"><?=$this->load->get_var('title')?></h3>
			<div class="clearfix"></div>
			<h4><?=$s_title?></h4>
			<div class="list-news">
				<?php foreach($content as $row) : ?>
					<?php 
						if($row->content_type == 'news_item') {
							$url = site_url('tin-tuc/'. $row->alias);
						} elseif ($row->content_type == 'cate_service') {
							$url = site_url('dich-vu/'. $row->alias);
						}
					?>
				<div class="row">
					<div class="col-xs-3">
						<?php if($row->image !=='') : ?>
							<img src="<?=$row->image?>" class="img-thumbnail" alt="<?=$row->title?>">
						<?php else : ?> 
							<img src="http://dummyimage.com/250x150/4d494d/686a82.gif&text=No Image" class="img-thumbnail" alt="<?=$row->title?>">
						<?php endif?>
					</div>
					<div class="col-xs-9">
						<a href="<?=$url?>" class="title"><?=$row->title?></a>
						<p class="intro"><?=$row->intro?></p>
					</div>
				</div>
				<?php endforeach?>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<nav class="text-center">
		<?php //echo $pagi?>
	</nav>

</div><!--End Left Col-->