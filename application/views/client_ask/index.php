<div class="container-fluid" id="pcont">
	<div class="cl-mcont">
		<!--Start Content-->
		<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<?=$template['partials']['breadcrum'];?>
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
												Người hỏi
											</th>
											<th>Điện thoại</th>
											<th>Email</th>
											<th>Ngày</th>
											<th>Trạng thái</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($resources as $resource):?>
										<tr class="odd gradeX">
											<td><?=$resource->id?></td>
											<td>
												<?=$resource->name?>
											</td>
											<td>
												<?=$resource->phone?>
											</td>
											<td>
												<?=$resource->email?>
											</td>
											<td><?=date('d-m-Y h:i:s',$resource->created_at)?></td>
											<td>
												<?php if($resource->status) : ?> 
												<a href="javascript:void(0)"><i class="fa fa-check-square-o"></i> Đã xem</a>
												<?php else : ?>
												<a href="javascript:void(0)"><i class="fa fa-square-o"></i> Chưa xem</a>
												<?php endif ?>
											</td>
											<td class="center">
												<a class="btn btn-primary btn-xs" href="<?=base_url()?>client_ask/view/<?=$resource->id?>" data-original-title="Xem nội dung" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>
												<a class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="admin.resource.delete('<?=base_url()?>client_ask/delete/<?=$resource->id?>', '<?=$return_url?>')" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>
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