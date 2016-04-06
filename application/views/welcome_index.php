<?php
	$this->db->select('alias,image');
	$this->db->where(array('published' => 1, 'content_type' => 'cate_service'));
	$this->db->order_by('id','desc');
	$this->db->limit(1);
	$oneService = $this->db->get('resource')->row();

	$this->db->select('alias,image');
	$this->db->where(array('published' => 1, 'content_type' => 'news_item'));
	$this->db->order_by('id','desc');
	$this->db->limit(1);
	$oneNew = $this->db->get('resource')->row();

	$this->db->select('alias,image');
	$this->db->where(array('published' => 1, 'content_type' => 'product_item', 'parent' => 79));
	$this->db->order_by('id','desc');
	$this->db->limit(1);
	$onePro = $this->db->get('resource')->row();
?>


<div class="col-xs-12">
	<div class="box3-homepage">
		<div class="row">
			<div class="col-sm-4 text-center">
				<a href="<?=site_url('dich-vu/'.$oneService->alias)?>">
					<img src="<?php echo cover_image_path($oneService->image)?>" class="img-responsive" alt="">
					<span>SẢN PHẨM & DỊCH VỤ</span>
				</a>

			</div>
			<div class="col-sm-4 text-center">
				<a href="<?=site_url('tin-tuc/'.$oneNew->alias)?>">
					<img src="<?php echo cover_image_path($oneNew->image)?>" class="img-responsive" alt="">
					<span>TIN TỨC & SỰ KIỆN</span>
				</a>

			</div>
			<div class="col-sm-4 text-center">
				<iframe width="100%" height="245" src="//www.youtube.com/embed/<?=$this->load->get_var('video_td')?>" frameborder="0" allowfullscreen></iframe>
				<a href="<?=site_url('san-pham/'.$onePro->alias)?>">
					<span>VIDEO MEDIA</span>
				</a>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-big">
				<img src="<?=base_url()?>assets/front/images/category_icon.png" alt="">
				DỊCH VỤ CỦA CHÚNG TÔI
			</h3>
			<div class="clearfix"></div>
			<div class="row">
				<?php foreach($this->load->get_var('data_nav_cate_service') as $row) : ?>
				<div class="col-sm-4">
					<div class="item-field">
						<a href="<?=site_url('dich-vu/'.$row->alias)?>">
							<?php if($row->image !== '') : ?>
							<img src="<?php echo cover_image_path($row->image)?>" alt="<?=$row->title?>" class="img-responsive"/>
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