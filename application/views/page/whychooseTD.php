<div class="col-xs-9">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-cat"><?=$this->load->get_var('title')?></h3>
			<div class="clearfix"></div>
			<div class="list-news">
					<div class="row">
						<?php foreach($content as $row) : ?>
							<div class="col-xs-6">
								<div class="item-field text-center" style="line-height:50px;">
									<a href="<?=site_url('tai-sao-chon-tam-diem/'.$row->alias)?>">
										<p><?=$row->title?></p>
									</a>
								</div>
							</div>
						<?php endforeach ?>
					</div>
			</div>
		</div>
		
	</div>

	</div><!--End Left Col-->
