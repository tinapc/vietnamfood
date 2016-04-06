<?php 
	$introActive = '';
	$activeWhyChooseTD = '';
	$activeSupport = '';

	if($this->router->fetch_class() == 'welcome' || $this->router->fetch_method() == 'introduction' || $this->uri->segment(2) == 've-tam-diem' || $this->uri->segment(2) == 'ton-chi-hoat-dong') {
		$introActive = '';
	}

	if($this->uri->segment(2) == 'dien-thoai-ho-tro' || $this->uri->segment(2) == 'so-do-duong-di' || $this->router->fetch_method() == 'faq') {
		$activeSupport = 'active';
	}

	if( $this->uri->segment(2) == 'ly-do-chon-tam-diem') {
		$activeWhyChooseTD = 'active';
	}
?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav nav-pills">

	<li><a href="<?=site_url('lien-he')?>" class="<?php if($this->router->fetch_method() == 'job') echo "active"; ?>" title="Tuyển dụng">Liên hệ</a></li>
	<li class="dropdown">
		<a class="dropdown-toggle disabled <?=$activeSupport?>" data-toggle="dropdown" role="button" aria-expanded="false" href="<?=site_url('page/dien-thoai-ho-tro')?>" title="">Hổ trợ khách hàng</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="<?=site_url('page/dien-thoai-ho-tro')?>" title="Điện thoại hổ trợ">Điện thoại</a></li>
			<li><a href="<?=site_url('hoi-dap')?>" title="Hỏi & đáp">Hỏi & đáp</a></li>
			<li><a href="<?=site_url('page/so-do-duong-di')?>" title="Sơ đồ đường đi">Sơ đồ đường đi</a></li>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle disabled <?=$activeWhyChooseTD?>" data-toggle="dropdown" role="button" aria-expanded="false" href="<?=site_url('page/ly-do-chon-trung-dung-media')?>" title="">Lý do chọn TrungDungMedia</a>

	</li>
	<li class="dropdown">
		<a class="dropdown-toggle disabled <?php if($this->router->fetch_class() == 'service') echo "active"; ?>" data-toggle="dropdown" role="button" aria-expanded="false" href="<?=site_url('dich-vu')?>" title="">Sản phẩm Dịch vụ</a>
		<ul class="dropdown-menu" role="menu">
			<?php foreach($data_nav_cate_service as $row) : ?>
				<?php if($row->external_link !== '') : ?>
					<li><a href="<?=prep_url($row->external_link)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
				<?php else : ?>
					<li><a href="<?=site_url('dich-vu/'. $row->alias)?>#detail_entry" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle disabled <?php if($this->router->fetch_class() == 'news') echo "active"; ?>" data-toggle="dropdown" role="button" aria-expanded="false" href="<?=site_url('tin-tuc')?>" title="">Tin tức & Sự kiện</a>
		<ul class="dropdown-menu" role="menu">
			<?php foreach($data_nav_cate_news as $row) : ?>
				<?php if($row->external_link !== '') : ?>
					<li><a href="<?=prep_url($row->external_link)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
				<?php else : ?>
					<li><a href="<?=site_url('danh-muc-tin/'. $row->alias)?>#detail_entry" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
	</li>
	<li class="dropdown">
		<a class="dropdown-toggle disabled <?php echo $introActive; ?>" data-toggle="dropdown" role="button" aria-expanded="false" href="<?=site_url('gioi-thieu')?>" title="">Giới thiệu</a>
		<ul class="dropdown-menu" role="menu">
			<?php foreach($data_nav_introduc as $row) : ?>
				<?php if($row->external_link !== '') : ?>
					<li><a href="<?=prep_url($row->external_link)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
				<?php else : ?>
					<li><a href="<?=site_url('page/'. $row->alias)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
	</li>
</ul>
</div>