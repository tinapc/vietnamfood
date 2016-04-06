<div class="col-xs-12">
    			<div class="row">
    				
    				<div class="col-xs-12">
    					<h3 class="title-big"><img src="<?=base_url()?>assets/front/images/category_icon.png" alt=""> Tin tức & Sự kiện nổi bật</h3>
    					<div class="row">
    						<div class="col-sm-7">
    							<div class="row">
    								<?php foreach($isHot as $row) : ?>
	    								<div class="col-sm-6">
	    									<a href="<?=site_url('tin-tuc/'.$row->alias)?> <?=$row->link_attr?>" class="new-item">
	    										<?php if($row->image == '') : ?>
	    										<img src="http://dummyimage.com/250x150/4d494d/686a82.gif&text=No Image" alt="placeholder+image" class="img-thumbnail">
	    										<?php else : ?> 
	    										<img src="<?=cover_image_path($row->image)?>" style="min-height:120px" class="img-thumbnail" alt="placeholder+image">
	    										<?php endif ?>
	    										<div class="clearfix"></div>
	    										<h5 class="title"><?=$row->title?></h5>
	    										<p class="intro"><?=word_limiter($row->intro, 30)?></p>
	    									</a>
	    								</div>
    								<?php  endforeach?>
    							</div>
    						</div>
    						<div class="col-sm-5">
    							<ul class="nav nav-pills nav-stacked nav-news">
    								<?php if(count($content)) : ?>
    								<?php foreach($content as $row) : ?>
										<li>
											<a href="<?=site_url('tin-tuc/'. $row->alias)?> <?=$row->link_attr?>"><i class="fa fa-chevron-circle-right"></i> <?=$row->title?></a>
										</li>
									<?php endforeach ?>
									<?php endif ?>
								</ul>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="row">
    				<div class="col-xs-12">
    					<h3 class="title-big"><img src="<?=base_url()?>assets/front/images/category_icon.png" alt=""> Tin tức và sự kiện khác</h3>
    					<div class="clearfix"></div>
    					<div class="list-news">
    						<?php foreach($otherNews as $row) : ?>
	    					<div class="row">
	    						<div class="col-xs-3">
	    							<?php if($row->image == '') : ?>
									<img src="http://dummyimage.com/250x150/4d494d/686a82.gif&text=No Image" alt="placeholder+image" class="img-thumbnail">
									<?php else : ?> 
									<img src="<?=cover_image_path($row->image)?>" class="img-thumbnail" alt="<?=$row->title?>">
									<?php endif ?>
	    						</div>
	    						<div class="col-xs-9">
	    							<a href="<?=site_url('tin-tuc/'. $row->alias)?> <?=$row->link_attr?>" class="title"><?=$row->title?></a>
	    							<p class="intro"><?=$row->intro?></p>
	    						</div>
	    					</div>
	    					<?php endforeach ?>
    					</div>
    				</div>
    				
    			</div>

    		</div><!--End Left Col-->