<div class="container-fluid" id="pcont">
	<div class="fix-nav-tool">
	    <!-- <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary">Save</a> -->
	    <a href="<?=$return_url?>" class="btn btn-default">Close</a>
	 </div>
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
							<!-- <a href="<?=$linkAdd?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo mới</a> -->
						</div>
						<div class="content">
							<div>
							<h4>Người hỏi: <?=$resources->name?></h4>							
							<h4>Email: <?=$resources->email?></h4>							
							<h4>Phone: <?=$resources->phone?></h4>
							<h4>Nội dung:</h4>
							<p><?=$resources->mess?></p>
							</div>
						</div>
					</div>				
				</div>
			</div>	

	</div>