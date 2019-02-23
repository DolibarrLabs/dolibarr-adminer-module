
$(document).ready(function () {
	$('#show_password').click(function() {
		$('input[name="password"]').attr('type', 'text');
		$(this).hide();
	});
});
