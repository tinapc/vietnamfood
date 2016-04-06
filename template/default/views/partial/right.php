<div class="col-xs-3 right-col">
	<div class="row">
		<div class="col-xs-12 shadow-top">
			<div class="title">Video tâm điểm</div>
			<div class="info">
				<iframe width="100%" height="200" src="//www.youtube.com/embed/<?=$this->load->get_var('video_td')?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="row">
		<?php echo modules::run('widget/support'); ?>
	</div>
	<div class="row">
		<?php echo modules::run('widget/partner');?>
	</div>

	<?php 
		$this->db->select('config_online');
		$re = $this->db->get_where('configs', array('id' => 1));
		$row = $re->row();

		$config_online = explode(',', unserialize($row->config_online));
	?>

	<div class="row">
		<div class="col-xs-12 thongke">
			<div class="title">Thống kê</div>
			<div class="info">
				<ul class="nav nav-pills nav-stacked">
					<?php if(in_array('online', $config_online)) : ?>
						<li><i class="fa fa-user"></i> Đang online: <span class="badge pull-right"><?php echo $this->counter->online()?></span></li>
					<?php endif ?>
					<?php if(in_array('today', $config_online)) : ?>	
						<li><i class="fa fa-bar-chart-o"></i> Hôm nay: <span class="badge pull-right"><?php echo $this->counter->today()?></span></li>
					<?php endif?>
					<?php if(in_array('yesterday', $config_online)) : ?>
						<li><i class="fa fa-area-chart"></i> Hôm qua: <span class="badge pull-right"><?php echo $this->counter->yesterday()?></span></li>
					<?php endif ?>
					<?php if(in_array('total', $config_online)) : ?>
						<li><i class="fa fa-line-chart"></i> Tổng số: <span class="badge pull-right"><?php $this->counter->total()?></span></li>
					<?php endif?>
					<?php if(in_array('avg', $config_online)) : ?>
						<li><i class="fa fa-pie-chart"></i> Trung bình: <span class="badge pull-right"><?php $this->counter->avg()?></span></li>
					<?php endif?>
				</ul>
			</div>
		</div>
	</div>
</div><!--End Right Col-->