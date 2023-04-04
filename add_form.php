<div class="col-9 fl">
	<h5>Добавить задачу</h5>
</div>
<div class="col-3 fr">
	<button type="button" class="btn btn-primary xs fr close_window">X</button>
</div>
<div class="col-12 fl">
	<form action="" method="POST" id="add_task">
		<div class="form-group">
			<label>Ваше имя</label>
			<input class="form-control" type="text" name="u_name" placeholder="Введиите Ваше имя">
		</div>
		<div class="form-group">
			<label>Ваш E-mail</label>
			<input class="form-control" type="text" name="u_mail" id="email_validation" placeholder="Введиите Ваш E-mail">
			<small class="email_error"></small>
		</div>
		<div class="form-group">
			<label>Описание задачи</label>
			<textarea class="form-control" name="u_text"></textarea>
		</div>
		<button type="button" class="btn btn-primary add_task" disabled>Добавить задачу</button>
	</form>
</div>
<script src="templates/js/validate.js"></script>