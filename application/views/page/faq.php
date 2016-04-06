<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="title-cat"><?=$this->load->get_var('title')?></h3>
			<div class="clearfix"></div>
			<div class="faq">
				<div class="row">
					<div class="col-xs-12">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<?php $i=1; foreach($content as $row) : ?>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading<?=$i?>">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
							          <i class="fa fa-caret-square-o-down"></i> <?=$row->title?>
							        </a>
							      </h4>
							    </div>
							    <div id="collapse<?=$i?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body">
							        <?=$row->content?>
							      </div>
							    </div>
							 </div>
						<?php $i++; endforeach?>
						</div>
					</div>
				</div>		
			</div>

			<div class="clearfix"></div>
			<h4 class="text-center">BẠN CẦN SỰ HỔ TRỢ?</h4>
			<form id="form-faq">
			<div class="row">
				<div class="col-md-4"><input type="text" id="qname" name="qname" placeholder="Họ tên" class="form-control"></div>
				<div class="col-md-4"><input type="text" id="qemail" name="qemail" placeholder="Email" class="form-control"></div>
				<div class="col-md-4"><input type="text" id="qphone" name="qphone" placeholder="Điện thoại" class="form-control"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<textarea class="form-control" rows="4" id="qmess" name="qmess" placeholder="Nội dung câu hỏi"></textarea>	
				</div>
				
			</div>
			</form>
			<div class="clearfix"></div>
			<br>
			<p class="text-center">
				<a class="btn btn-primary" href="javascript:;" id="sendFaq">Gởi câu hỏi</a>
			</p>
		</div>
		
	</div>

	</div><!--End Left Col-->

<script type="text/javascript">
	$(document).ready(function() {
		$('#sendFaq').click(function(){
			if($('#qmess').val() == '') {
				alert('Vui lòng nhập đầy đủ thông tin');
				return false;
			} else {
				$.ajax({
					url: site_url + 'sendFaq',
					type: 'post',
					dataType: 'json',
					data: $('#form-faq').serialize(),
					success: function(data) {
						alert('Câu hỏi của bạn đã được gởi. Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.');
						$('#qname').val('');
						$('#qemail').val('');
						$('#qphone').val('');
						$('#qmess').val('');
					}
				});
			}
		})
	});
</script>