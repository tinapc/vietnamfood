<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
							
						</div>
						<div class="content">
							<div class="row">
								<div class="col-sm-3">
								<form id="frm1" method="post">
									<ul class="nav nav-pills nav-stacked" id="active_counter">
										<li>
											<input type="checkbox" value="yes" name="online" id="online" <?php if(in_array('online', $config_online)) echo "checked=checked"; ?>/>
											Đang online: <span class="badge pull-right"><?php echo $this->counter->online()?></span></li>
										<li>
											<input type="checkbox" value="yes" name="today" id="today" <?php if(in_array('today', $config_online)) echo "checked=checked"; ?>/>
											Hôm nay: <span class="badge pull-right"><?php echo $this->counter->today()?></span></li>
										<li>
											<input type="checkbox" value="yes" name="yesterday" id="yesterday" <?php if(in_array('yesterday', $config_online)) echo "checked=checked"; ?>/>
											Hôm qua: <span class="badge pull-right"><?php echo $this->counter->yesterday()?></span></li>
										<li>
											<input type="checkbox" value="yes" name="total" id="total" <?php if(in_array('total', $config_online)) echo "checked=checked"; ?>/>
											Tổng số: <span class="badge pull-right"><?php $this->counter->total()?></span></li>
										<li>
											<input type="checkbox" value="yes" name="avg" id="avg" <?php if(in_array('avg', $config_online)) echo "checked=checked"; ?>/>
											Trung bình: <span class="badge pull-right"><?php $this->counter->avg()?></span></li>
									</ul>
								</form>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>	

	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#active_counter input').change(function(){
				var arr = [];
				var val;
				$('#active_counter input').each(function(i, e){
					if($(this).is(':checked')) {
						val = $(this).attr('name');
					} else {
						val = 'No';
					}
					var name = $(this).attr('name');
					arr.push(val);
				});
				
				$.ajax({
					url: '<?=base_url()?>dashboard/config_online',
					type: 'POST',
					dataType: 'json',
					data: {'data':arr},
					success: function(data){
						window.location.reload(true);
					}
				})
				
			})
		});
	</script>