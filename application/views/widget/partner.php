<div class="col-xs-12">
	<div class="title">Đối tác</div>
	<div class="info partner">
		<ul class="row">
			
			<li>
				<div class="row">
					<?php $i=1;foreach($partners as $row) : ?>
						<div class="col-xs-6"><img src="<?=$row->logo?>" title="<?=$row->company_name?>"/></div>
						<?php if($i%2 == 0) : ?> 
							</div>
							</li>
							<li><div class="row">
						<?php endif?>

					<?php $i++; endforeach ?>
				</div>
			</li>
			
		</ul>
		
	</div>
</div>

<!--VTicker -->
<script src="<?=base_url()?>assets/front/plugin/vticker/jquery.vticker.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.partner').vTicker({
			speed: 500,
			pause: 3000,
			showItems: 3,
			animation: 'fade',
			mousePause: false,
			// margin:20,
			height: 0,
			direction: 'up'
		});
	});		
</script>