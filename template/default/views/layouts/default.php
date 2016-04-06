<?php echo $template['partials']['header']; ?>

<?php if($this->router->fetch_class() == 'welcome') : ?>
	<div id="main">
		<div class="container main">
			<div class="row">
				<?php echo $template['body']; ?>
			</div>
		</div>
	</div><!--End Main-->

<?php else : ?>
	<div id="main">
		<div class="container main" style="margin-top:0px">
			<div class="row">
				<div class="inner-main">
					<?php echo $template['body']; ?>
					<?php //echo $template['partials']['right']; ?>
				</div>
			</div>
		</div>
	</div><!--End Main-->
<?php endif ?>

<?php echo $template['partials']['footer']; ?>		
