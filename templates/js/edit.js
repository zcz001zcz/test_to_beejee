$('.edit_task').on('click', function(){
	var test_text = $('textarea[name="a_text"]').val();
	if (test_text !== '') {
		$.ajax({
			type: 'post',
			url: 'index.php?ajax=edit&change=yes',
			data: $('#edit_task').serialize(),
			success:function ( data ) {
				if (data == 1) {
					location.reload();
				}
				else if (data == 2) {
					alert('Сессия была сброшена');
					location.reload();
				}
				else {
					alert('Ошибка сохранения.');
				}
			}
		});
	}
	else {
		alert('Поле текста не может быть пустым');
	}
})

$('.close_window').on('click', function(){
	$('.open_window').hide();
	$('.open_window').html('');
	 $('.row').css('opacity', '1');
})