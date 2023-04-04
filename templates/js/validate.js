$('#email_validation').keyup(function () {
	var email = $(this).val();
	validateEmail(email);
})

function validateEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(email)) {
       $('.email_error').text('E-mail введен не верно');
    } else {
		 $('.email_error').text('');
		 $('button').removeAttr('disabled');
    }
}
function checkInput() {
	$('#add_task input').blur(function () {
		if( !$(this).val() ) {
			return 0;
		}
	})
}

$('.add_task').on('click', function(){
	var test_name = $('input[name="u_name"]').val();
	var test_text = $('textarea[name="u_text"]').val();
	if (test_name !== '' && test_text !== '') {
		$.ajax({
			type: 'post',
			url: 'index.php?ajax=add_task',
			data: $('#add_task').serialize(),
			success:function ( data ) {
				location.reload();
			}
		});
	}
	else {
		alert('Все поля обязательны к заполнению');
	}
})

$('.close_window').on('click', function(){
	$('.open_window').hide();
	$('.open_window').html('');
	 $('.row').css('opacity', '1');
})