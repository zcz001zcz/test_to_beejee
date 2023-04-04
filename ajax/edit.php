<?php
$id = $_POST['id'];
if (isset($_GET['view'])) {
	$ret = getTaskByID($id);
	echo $ret;
}
if (isset($_GET['change'])) {
	$text = trim(strip_tags($_POST['a_text']));
	isset($_POST['done']) ? $status = 2 : $status = 1;
	$ret = editTask($id, $text, $status, $inc_file);
	echo $ret;
}
exit();