var admin = {};

/*======================
	NOTIFICATION
=======================*/
admin.not = {
	alertSuccess: function(text) {
		$.gritter.add({
	        title: 'Success',
	        text: text,
	        class_name: 'success'
	     });
	},
	alertError: function(text) {
		$.gritter.add({
	        title: 'Error',
	        text: text,
	        class_name: 'warning'
	     });
	},
};



/** Deactive or Active user **/
admin.user = {
	statusUser: function(linkAction) {
		if(linkAction == '') {
			admin.not.alertError('The link request is not valid');
		} else {
			$.ajax({
				url: linkAction,
				//type: 'default GET (Other values: POST)',
				dataType: 'json',
				success: function(data){
					if(data.status) {
						admin.not.alertSuccess('Thông tin đã được cập nhật');
					} else {
						admin.not.alertError('Yêu cầu của bạn đã có lỗi');
					}
				}
			})
			
		}
	},

	// Delete user
	deleteUser: function(linkAction) {
		var confrm = confirm('Bạn chắc rằng muốn xóa User này?');
		if(linkAction == '') {
			admin.not.alertError('The link request is not valid');
			return false;
		} else if(confrm) {
			$.ajax({
				url: linkAction,
				//type: 'default GET (Other values: POST)',
				dataType: 'json',
				success: function(data){
					if(data.status) {
						admin.not.alertSuccess('User đã được xóa');
						window.location.reload();
					} else {
						admin.not.alertError('Yêu cầu của bạn đã có lỗi');
					}
				}
			})
			
		}
	},
};

/** RESOURCE **/
admin.resource = {
	status: function(linkAction, StatusValue) {
		if(linkAction == '') {
			admin.not.alertError('The link request is not valid');
		} else {
			$.ajax({
				url: linkAction,
				type: "POST",
				data: {'status' : StatusValue},
				dataType: 'json',
				success: function(data){
					if(data.status) {
						admin.not.alertSuccess('Thông tin đã được cập nhật');
					} else {
						admin.not.alertError('Yêu cầu của bạn đã có lỗi');
					}
				}
			})
			
		}
	},

	// Delete 
	delete: function(linkAction, returnUrl) {
		var confrm = confirm('Bạn chắc rằng muốn xóa bản tin này?');
		if(linkAction == '') {
			admin.not.alertError('The link request is not valid');
			return false;
		} else if(confrm) {
			$.ajax({
				url: linkAction,
				//type: 'default GET (Other values: POST)',
				dataType: 'json',
				success: function(data){
					if(data.status) {
						admin.not.alertSuccess(data.message);
						window.location.href = returnUrl;
					} else {
						admin.not.alertError(data.message);
					}
				}
			})
			
		}
	},
};