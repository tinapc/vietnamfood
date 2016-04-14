$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip({
		'container': 'body'
	});

	var firstPhoto = $('.list-photos ul li:first-child a img').attr('src');
	loadImage(firstPhoto);

	//Menu
	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	 	$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	
});

function loadImage(imgPath)
{
	$('.big-photo').html('<img src="'+ imgPath +'" data-zoom-image="'+ imgPath +'" class="img-zoom img-responsive" alt=""/>');
	// Zoom image
	$('.img-zoom').elevateZoom({
		tint:true, tintColour:'#F90', tintOpacity:0.5
	}); 
}

// Change language
function changeLang(lang)
{
	$.ajax({
		url: base_url + 'welcome/changeLang/?l=' + lang,
		type: 'GET',
		dataType:'json',
		success: function(data) {
			window.location.reload(true);
		}
	});		
}

// Load Modal
function loadModalOrder(productName)
{
	$('#order_product_name').val(productName);
	$('#modal-order').modal();
}

function order_email()
{
	var order_product_name = $('#order_product_name'),
		order_fullname = $('#order_fullname'),
		order_address = $('#order_address'),
		order_phone = $('#order_phone'),
		order_email = $('#order_email'),
		order_message = $('#order_message');

	var $btn = $('#btn-submit');


	if (order_product_name.val() == '' || order_fullname.val() == '' || order_address.val() == '' || order_phone.val() == '' || order_email.val() == '' || order_message.val() == '' ) {
		alert('Vui lòng nhập thông tin cần thiết.');
		return false;
	} else {
		$btn.button('loading');
		$.ajax({
			url: base_url + 'welcome/order_email',
			type: 'POST',
			dataType: 'json',
			data: {'order_product_name': order_product_name.val(), 'order_fullname': order_fullname.val(), 'order_address': order_address.val(), 'order_phone': order_phone.val(), 'order_email': order_email.val(), 'order_message': order_message.val()},
			success: function(data) {
				if (data.status) {
					$btn.button('reset');
					alert(txt_success);
					$('#modal-order').modal('hide');

					order_product_name.val('');
					order_fullname.val('');
					order_address.val('');
					order_phone.val('');
					order_email.val('');
					order_message.val('');
				} else {
					$btn.button('reset');
					alert(txt_error);
					$('#modal-order').modal('hide');

					order_product_name.val('');
					order_fullname.val('');
					order_address.val('');
					order_phone.val('');
					order_email.val('');
					order_message.val('');
				}
			}
		});
		
	}
}