<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
							<a href="<?=$linkAdd?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tạo mới</a>
							<a href="<?=$return_url?>" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
						</div>
						<div class="content">
							<div>
								<table class="table table-bordered" id="datatable-icons" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Yahoo</th>
											<th>Skype</th>
											<th>Phone</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($resources as $resource):?>
										<tr class="odd gradeX">
											<td><?=$resource->id?></td>
											<td><?=$resource->name?></td>
											<td><?=$resource->yahoo?></td>
											<td><?=$resource->skype?></td>
											<td><?=$resource->phone?></td>
											<td>
												<?php if($resource->published) : ?> 
												<a href="javascript:void(0)" onclick="admin.resource.status('<?=base_url()?>manager/support/changeStatus/<?=$resource->id?>', 0)"><i class="fa fa-check-square-o"></i></a>
												<?php else : ?>
												<a href="javascript:void(0)" onclick="admin.resource.status('<?=base_url()?>manager/support/changeStatus/<?=$resource->id?>', 1)"><i class="fa fa-square-o"></i></a>
												<?php endif ?>
											</td>
											<td class="center">
												<a class="btn btn-primary btn-xs" href="<?=site_url('manager/support/edit/'. $resource->id)?>" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
												<a class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="admin.resource.delete('<?=base_url()?>manager/support/delete/<?=$resource->id?>', '<?=$return_url?>')" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>
											</td>
										</tr>
										<?php endforeach?>
									</tbody>
								</table>							
							</div>
						</div>
					</div>				
				</div>
			</div>	

	</div>