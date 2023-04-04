<html>
    <head>
		<meta charset="UTF-8">
        <title><?=$title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="templates/css/bootstrap.min.css" />
		<link rel="stylesheet" href="templates/css/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="templates/css/main.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body>
		<div class="row">
			<div class="header">
				<div class="content">
					<div class="col-4 fl">
						<div class="logo">
							ToDo list
						</div>
					</div>
					<div class="col-8 fr">
						<button class="btn btn-primary add_task">Добавить задачу</button>
						<?php
						if ($inc_file == 'login') {
						?>
						<button class="btn btn-primary login"><i class="fa fa-user"></i></button>
						<?php
						}
						else {
						?>
						<button class="btn btn-primary exit"><i class="fa fa-sign-in"></i></button>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="col-12">
					<?=$content?>
				</div>
			</div>
		</div>
		<div class="open_window"></div>
		<script src="templates/js/bootstrap.bundle.min.js"></script>
		<script src="templates/js/main.js"></script>
    </body>
</html>