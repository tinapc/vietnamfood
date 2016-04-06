<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
							<a href="<?=base_url()?>auth/create_user" class="btn btn-primary"><i class="fa fa-plus"></i> Tạo mới</a>
						</div>
						<div class="content">
							<div>
								<table class="table table-bordered" id="datatable-icons" >
									<thead>
										<tr>
											<th>ID</th>
											<th>FirstName</th>
											<th>LastName</th>
											<th>Email</th>
											<th>Group</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($users as $user):?>
										<tr class="odd gradeX">
											<td><?=$user->id?></td>
											<td><?=$user->first_name?></td>
											<td><?=$user->last_name?></td>
											<td class="center"><?=$user->email?></td>
											<td class="center">
												<?php foreach ($user->groups as $group):?>
													<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
								                <?php endforeach?>
											</td>
											<td>
												<?php if($user->active) : ?> 
												<a href="javascript:void(0)" onclick="admin.user.statusUser('<?=base_url()?>auth/deactivate/<?=$user->id?>')">Active</a>
												<?php else : ?>
												<a href="javascript:void(0)" onclick="admin.user.statusUser('<?=base_url()?>auth/activate/<?=$user->id?>')">Deactive</a>
												<?php endif ?>
											</td>
											<td class="center">
												<a class="btn btn-default btn-xs" href="#" data-original-title="Open" data-toggle="tooltip"><i class="fa fa-file"></i></a> 
												<a class="btn btn-primary btn-xs" href="<?=site_url('auth/edit_user/'. $user->id)?>" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> 
												<a class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="admin.user.deleteUser('<?=base_url()?>auth/delete_user/<?=$user->id?>')" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>
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