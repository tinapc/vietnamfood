<style type="text/css">
	.content-detail table td,
	.VCSortableInPreviewMode{
		width:100% !important;
		padding: 15px !important;
	}
	.content-detail table{width: 100%;}

	.content-detail video{
		width: 100%; height: 400px;
	}

	.page_navigation , .alt_page_navigation{
		padding-bottom: 10px;
	}

	.page_navigation a, .alt_page_navigation a{
		padding:3px 5px;
		margin:2px;
		color:white;
		text-decoration:none;
		float: left;
		font-family: Tahoma;
		font-size: 12px;
		background-color:#252f4b;
	}
	.active_page{
		background-color:white !important;
		color:black !important;
	}

</style>
<script type="text/javascript" src="<?php echo base_url()?>assets/front/plugin/pagination/jquery.pajinate.js"></script>
<script type="text/javascript">
	$(function() {
		var tot = "<?php echo count($related)?>";
		$('#paging_container1').pajinate();
	});
</script>
<div class="col-xs-12" id="detail_entry">
    <div class="row">
    	
    	<div class="col-xs-12">
    		<h2><?=$content->title?></h2>
    		<div class="info-social">
    			<div class="posted-date pull-left">
    				Đăng ngày: <span><?php echo date('d/m/Y', $content->created_at)?></span>
    			</div>
    			<div class="share pull-left">
    				<!-- Go to www.addthis.com/dashboard to generate a new set of sharing buttons -->
    				<a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=<?=site_url('tin-tuc/'. $content->alias)?>&title=<?=$content->title?>&pco=tbxnj-1.0" target="_blank">
                        <img src="https://cache.addthiscdn.com/icons/v2/thumbs/16x16/facebook.png" border="0" alt="Facebook"/>
                    </a>
    				<a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=<?=site_url('tin-tuc/'. $content->alias)?>&pubid=ra-4f8641232c202083&ct=1&title=<?=$content->title?>&pco=tbxnj-1.0" target="_blank">
                        <img src="https://cache.addthiscdn.com/icons/v2/thumbs/16x16/twitter.png" border="0" alt="Twitter"/>
                    </a>
    				<a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=<?=site_url('ti-tuc/'. $content->alias)?>&pubid=ra-4f8641232c202083&ct=1&title=<?=$content->title?>&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/16x16/google_plusone_share.png" border="0" alt="Google+"/></a>


    			</div>
    		</div>
    		<div class="clearfix"></div>
    		<div class="content-detail">
    			<?=$content->content?>
    		</div>
    	</div>
    </div>

    <?php if(count($related)) : ?>
    <div class="row">
    	<div class="col-xs-12">
    		<h3 class="title-cat">tin liên quan</h3>
    		<div class="clearfix"></div>
    		<div class="list-news" style="margin-bottom:30px;">
				<div id="paging_container1">
					<ul class="nav nav-pills nav-stacked related-news nav-news content" style="border:none; padding-left:0">

						<?php foreach($related as $row) : ?>
							<?php if($row->external_link !== '') : ?>
							<li><a href="<?=$row->external_link?>" <?=$row->link_attr?>><i class="fa fa-angle-right"></i> <?=$row->title?> </a></li>
							<?php else : ?>
							<li><a href="<?=site_url('tin-tuc/'.$row->alias)?>#detail_entry" <?=$row->link_attr?>><i class="fa fa-angle-right"></i> <?=$row->title?> </a></li>
							<?php endif ?>
						<?php endforeach ?>
					</ul>
					<div class="page_navigation" style="padding-top:30px;"></div>
				</div>
    		</div>
    	</div>
    	
    </div>
    <?php endif ?>
</div><!--End Left Col-->