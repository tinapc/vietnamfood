$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip({
		'container': 'body'
	});
});

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