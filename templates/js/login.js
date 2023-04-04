$('.to_login').on('click', function(){
	var test_name = $('input[name="a_name"]').val();
	var test_text = $('input[name="a_pass"]').val();
	if (test_name !== '' && test_text !== '') {
		$.ajax({
			type: 'post',
			url: 'index.php?ajax=login',
			data: $('#to_login').serialize(),
			success:function ( data ) {
				if (data == 1) {
					location.reload();
				}
				else {
					alert('Логин и/или пароль введен не верно');
				}
			}
		});
	}
	else {
		alert('Поля не могут быть пустыми');
	}
})

$('.close_window').on('click', function(){
	$('.open_window').hide();
	$('.open_window').html('');
	 $('.row').css('opacity', '1');
})