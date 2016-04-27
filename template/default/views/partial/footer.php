<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="copyright">
					<h4 class="title-s-13"><?=$this->load->get_var('company_name')?></h4>
					<p>
					Address: <?=$this->load->get_var('company_address')?><br>
					Tel:  <?=$this->load->get_var('phone')?> - Fax: <?=$this->load->get_var('fax')?><br>
					Cell phone:  <?=$this->load->get_var('phone')?> - Email: <?=$this->load->get_var('email')?><br>
					Copyright © <?=$this->load->get_var('company_name')?>. All Right Reserved.
					</p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="social text-center">
					<h4 class="title-s-13"><?=$this->lang->line('txt_social')?></h4>
					<div class="link">
						<a class="fb" href="<?=$this->load->get_var('facebook')?>"><i class="fa fa-facebook"></i></a>
						<a class="google" href="<?=$this->load->get_var('google')?>"><i class="fa fa-google-plus"></i></a>
						<a class="tw" href="<?=$this->load->get_var('twitter')?>"><i class="fa fa-twitter"></i></a>
						<a class="pin" href="<?=$this->load->get_var('pinterest')?>"><i class="fa fa-pinterest"></i></a>
						<a class="youtube" href="<?=$this->load->get_var('youtube')?>"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<div class="tracking text-center">
					<h4 class="title-s-13"><?=$this->lang->line('txt_visitor')?></h4>
					<p>
					<?=$this->lang->line('txt_online')?>: <?php echo $this->counter->online()?><br>
					<?=$this->lang->line('txt_total')?>: <?php echo $this->counter->total()?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $supports = $this->load->get_var('supports');?>

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
		/*$('.nickchat a').click(function(){
			var rel = $(this).attr('rel');
			var content = $('#' + rel).html();
			$('#modal_yahoo .modal-content').html(content);
			$('#modal_yahoo').modal('show');
		});*/

	});
</script>