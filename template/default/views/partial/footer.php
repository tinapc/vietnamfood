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
						<a class="google" href=""><i class="fa fa-google-plus"></i></a>
						<a class="tw" href="<?=$this->load->get_var('twitter')?>"><i class="fa fa-twitter"></i></a>
						<a class="pin" href=""><i class="fa fa-pinterest"></i></a>
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