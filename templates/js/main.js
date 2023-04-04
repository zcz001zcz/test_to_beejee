$('.add_task').on('click', function(){
	$('.open_window').show();
	$.get("templates/add_form.php", function(data){
		 $('.open_window').html(data);
		 $('.row').css('opacity', '0.2');
	})
});

$('.login').on('click', function(){
	$('.open_window').show();
	$.get("templates/login.php", function(data){
		 $('.open_window').html(data);
		 $('.row').css('opacity', '0.2');
	})
});

function changeTask(task_id) {
	$.ajax({
		type: 'post',
		url: 'index.php?ajax=edit&view=yes',
		data: {'id':task_id},
		success:function ( data ) {
			$('.open_window').show();
			$.get("templates/edit.php", data, function(e){
				 $('.open_window').html(e);
				 $('textarea[name="a_text"]').val(data);
				 $('input[name="id"]').val(task_id);
				 $('.row').css('opacity', '0.2');
			});
		}
	});
}

$('.exit').on('click', function(){
	$.ajax({
		type: 'post',
		url: 'index.php?ajax=exit',
		data: 1,
		success:function ( data ) {
			location.reload();
		}
	});
});