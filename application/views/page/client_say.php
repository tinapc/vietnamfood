<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-cat"><?=$this->load->get_var('title')?></h3>
			<div class="clearfix"></div>
			<div class="client-say">
				<div class="row">
					<?php foreach($content as $row) : ?>
					<div class="col-xs-12">
						<blockquote>
							<p><?=$row->content?></p>
							<footer><?=$row->who_say?> là <cite title="Source Title"><?=$row->position?></cite></footer>
						</blockquote>
					</div>
					<?php endforeach?>
				</div>		
			</div>
		</div>
		
	</div>

	</div><!--End Left Col-->
