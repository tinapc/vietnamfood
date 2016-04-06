<div class="col-xs-12">
	<div class="title">Hổ trợ trực tuyến</div>
	<div class="info support_online">
		<div class="row">
			<div class="col-md-3" id="online">
				<h5>Online:</h5>
				<a href="javascript:;" rel="yahoo"><img src="<?=base_url()?>assets/front/images/yahoo.gif" style="max-width:50px"/></a>
				<a href="javascript:;" rel="skype"><img src="<?=base_url()?>assets/front/images/skype.gif" style="max-width:50px"/></a>
			</div>

			<?php 
				$hotlines = explode(',', $this->load->get_var('hotline'));
			?>

			<div class="col-md-8 hotline">
				<h5>Hotline:</h5>
				<?php if(count($hotlines)) {
					foreach($hotlines as $hotline) {  ?>
						<a href="javascript:;"><img src="<?=base_url()?>assets/front/images/icon_hotline.gif"/> <?=$hotline?></a>
					<?php } 
				} ?>
			</div>
		</div>
	</div>
</div>

<div id="yahoo" style="display:none">
	<?php foreach($supports as $row) : ?>
		<p style="margin:20px">
			<a href="ymsgr:sendIM?<?=$row->yahoo?>" style="margin:0px; display:inline"><img align="absmiddle" class="img" alt="Trợ giúp qua Yahoo Messenger!" src="http://opi.yahoo.com/online?u=<?=$row->yahoo?>&amp;m=g&amp;t=2"></a><br><span class="nick"><a href="ymsgr:sendIM?hotroonthi" style="margin:0px; display:inline"><?=$row->yahoo?></a></span><br>Họ và Tên  : <b><?=$row->name?></b><br>Chức danh : <b><?=$row->position?></b><br>
		</p>
	<?php endforeach?>
</div>
<div id="skype" style="display:none">
	<?php foreach($supports as $row) : ?>
		<?php if($row->skype !=='') : ?>
		<p style="margin:20px">
			<a href="skype:<?=$row->skype?>?chat" style="margin:0px; display:inline"><img align="absmiddle" class="img" alt="Trợ giúp qua Skype!" src="<?=base_url()?>assets/front/images/icons/skype.png"></a><br><span class="nick"><a href="skype:<?=$row->skype?>?chat" style="margin:0px; display:inline"><?=$row->skype?></a></span><br>Họ và Tên  : <b><?=$row->name?></b><br>Chức danh : <b><?=$row->position?></b><br>
		</p> <?php endif ?>
	<?php endforeach?>
</div>

<div class="modal fade" id="modal_yahoo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    </div>
  </div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#online a').click(function(){
			var rel = $(this).attr('rel');
			var content = $('#' + rel).html();
			$('#modal_yahoo .modal-content').html(content);
			$('#modal_yahoo').modal('show');
		});

	});
</script>