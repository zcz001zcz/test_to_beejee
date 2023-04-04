<div class="col-9 fl">
	<h5>Авторизация</h5>
</div>
<div class="col-3 fr">
	<button type="button" class="btn btn-primary xs fr close_window">X</button>
</div>
<div class="col-12 fl">
	<form action="" method="POST" id="to_login">
		<div class="form-group">
			<label>Логин</label>
			<input class="form-control" type="text" name="a_login" placeholder="Введиите логин">
		</div>
		<div class="form-group">
			<label>Пароль</label>
			<input class="form-control" type="password" name="a_pass" placeholder="Введиите пароль">
			<small class="email_error"></small>
		</div>
		<button type="button" class="btn btn-primary to_login">Войти</button>
	</form>
</div>
<script src="templates/js/login.js"></script>