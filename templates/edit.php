<div class="col-9 fl">
	<h5>Изменить задачу</h5>
</div>
<div class="col-3 fr">
	<button type="button" class="btn btn-primary xs fr close_window">X</button>
</div>
<div class="col-12 fl">
	<form action="" method="POST" id="edit_task">
		<input type="hidden" name="id">
		<div class="form-group">
			<label>Описание задачи</label>
			<textarea class="form-control" name="a_text"></textarea>
		</div>
		<div class="form-group">
			<input type="checkbox" id="check" name="done" value="2">
			<label for="check">Выплнено</label>
		</div>
		<button type="button" class="btn btn-primary edit_task">Изменить</button>
	</form>
</div>
<script src="templates/js/edit.js"></script>