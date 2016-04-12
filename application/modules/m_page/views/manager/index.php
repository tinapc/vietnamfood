<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
							<!-- <a href="<?=$linkAdd?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tạo mới</a> -->
							<a href="<?=$return_url?>" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i>  Refresh</a>
							<a href="javascript:void(0)" onclick="$('#frm1').submit()" class="btn btn-info btn-sm"><i class="fa fa-save"></i>  Update</a>
						</div>
						<div class="content">
							<div>
							<form id="frm1" method="post" action="<?=$return_url?>">
								<table class="table table-bordered" id="datatable-icons" >
									<thead>
										<tr>
											<th>ID</th>
											<th>
												Tên trang
											</th>
											<th>Created</th>
											<?php if($contentType =='cate_product') : ?>

											<?php else : ?>
												<th>Updated</th>
											<?php endif?>
											<th>Order</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($resources as $resource):?>
										<tr class="odd gradeX">
											<td><?=$resource->id?></td>
											<td>
												<?=$resource->title?>
											</td>
											<td><?=date('d-m-Y h:i:s',$resource->created_at)?></td>
											<?php if($contentType =='cate_product') : ?>

											<?php else :?>
												<td class="center"><?=date('d-m-Y h:i:s',$resource->updated_at)?></td>
											<?php endif?>
											<td>
												<input type="text" size="5" name="menu_index[]" value="<?=$resource->menu_index?>"/>
												<input type="hidden" value="<?=$resource->id?>" name="id[]"/>
											</td>
											<td>
												<?php if($resource->published) : ?> 
												<a href="javascript:void(0)" onclick="admin.resource.status('<?=base_url()?>m_page/changeStatus/<?=$resource->id?>', 0)"><i class="fa fa-check-square-o"></i></a>
												<?php else : ?>
												<a href="javascript:void(0)" onclick="admin.resource.status('<?=base_url()?>m_page/changeStatus/<?=$resource->id?>', 1)"><i class="fa fa-square-o"></i></a>
												<?php endif ?>
											</td>
											<td class="center">

												<a class="btn btn-primary btn-xs" href="<?=base_url()?>m_page/edit/<?=$resource->id?>/?contentType=<?=$contentType?>" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
												<!-- <a class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="admin.resource.delete('<?=base_url()?>m_page/delete/<?=$resource->id?>', '<?=$return_url?>')" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a> -->
											</td>
										</tr>
										<?php endforeach?>
									</tbody>
								</table>
							</form>							
							</div>
						</div>
					</div>				
				</div>
			</div>	

	</div>