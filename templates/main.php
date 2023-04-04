<?php
ob_start();
?>
<table class="table table-hover">
	<thead>
		<tr>
			<th><a href="<?=$url?>?page=<?=$page?>&s_param=name&sort=<?=$to_sort?>">Имя</a></th>
			<th><a href="<?=$url?>?page=<?=$page?>&s_param=mail&sort=<?=$to_sort?>">Email</a></th>
			<th>Задача</th>
			<th><a href="<?=$url?>?page=<?=$page?>&s_param=status&sort=<?=$to_sort?>">Статус</a></th>
			<?php
			if ($inc_file == 'admin') {
			?>
			<th></th>
			<?php
			}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($tasks as $task) {
		?>
		<tr>
			<td><?=$task['name']?></td>
			<td><?=$task['mail']?></td>
			<td width="100%"><?=showBR($task['text'])?></td>
			<td><?=$task['status']?></td>
			<?php
			if ($inc_file == 'admin') {
			?>
			<td><button type="button" class="btn btn-primary" onclick="changeTask(<?=$task['id']?>);"><i class="fa fa-pencil"></i></button></td>
			<?php
			}
			?>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<nav class="mt-4 mb-3">
	<ul class="pagination justify-content-center mb-0">
		<?=$pages?>
	</ul>
</nav>
<?php
$content = ob_get_clean();