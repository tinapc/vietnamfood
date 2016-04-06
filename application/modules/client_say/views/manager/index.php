<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
							<a href="<?=$linkAdd?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo mới</a>
						</div>
						<div class="content">
							<div>
								<table class="table table-bordered" id="datatable-icons" >
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Created</th>
											<th>Updated</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($resources as $resource):?>
										<tr class="odd gradeX">
											<td><?=$resource->id?></td>
											<td><?=$resource->who_say?></td>
											<td><?=date('d-m-Y h:i:s',$resource->created_at)?></td>
											<td class="center"><?=date('d-m-Y h:i:s',$resource->updated_at)?></td>
											<td>
												<?php if($resource->published) : ?> 
												<a href="javascript:void(0)" onclick="admin.resource.status('<?=base_url()?>manager/client_say/changeStatus/<?=$resource->id?>', 0)"><i class="fa fa-check-square-o"></i></a>
												<?php else : ?>
												<a href="javascript:void(0)" onclick="admin.resource.status('<?=base_url()?>manager/client_say/changeStatus/<?=$resource->id?>', 1)"><i class="fa fa-square-o"></i></a>
												<?php endif ?>
											</td>
											<td class="center">
												<a class="btn btn-primary btn-xs" href="<?=site_url('manager/client_say/edit/'. $resource->id)?>" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
												<a class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="admin.resource.delete('<?=base_url()?>manager/client_say/delete/<?=$resource->id?>', '<?=$return_url?>')" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>
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