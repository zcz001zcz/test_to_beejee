<?php
function getAllTask($s_param, $sort, $pages) {
	$ret = [];
	$sql = "SELECT * FROM tasks ORDER BY `".$s_param."` ".$sort." ".$pages."";
	$connect = db_connect();
	$s = $connect->prepare($sql);
	$s->execute();
	while($row = $s->fetch(PDO::FETCH_ASSOC)){
		if ($row['status'] == 0) {
			$status = '';
		}
		elseif ($row['status'] == 1) {
			$status = 'Отредактировано администратором';
		}
		else {
			$status = 'Выполнено';
		}
		$row['status'] = $status;
		$ret[] = $row;
	}
	db_close($connect);
    return $ret;
}

function Taskpagination($page, $max_in_page, $s_param, $sort, &$total_pages) {
	$sql = "SELECT COUNT(*) as count FROM tasks";
	$connect = db_connect();
	$s = $connect->prepare($sql);
	$s->execute();
	$r = $s->fetch(PDO::FETCH_ASSOC);
	db_close($connect);
	$total_pages = ceil($r['count']/$max_in_page);
	if ($page == 1) {
		$start = 0;
		$end = $max_in_page;
	}
	else {
		$start = ($page-1)*$max_in_page;
		$end = $max_in_page;
	}
	$pages = "LIMIT ".$start.",".$end;
	$ret = getAllTask($s_param, $sort, $pages);
	return $ret;
}

function addTask($name, $mail, $text) {
	$sql = "INSERT INTO tasks (text, name, mail) VALUES (:text,:name,:mail)";
	$connect = db_connect();
	$s = $connect->prepare($sql);
	$s->bindValue(':text', $text, PDO::PARAM_STR);
	$s->bindValue(':name', $name, PDO::PARAM_STR);
	$s->bindValue(':mail', $mail, PDO::PARAM_STR);
	$s->execute();
	db_close($connect);
}

function getAdminAuth($login, $pass) {
	$sql = "SELECT id FROM `admin` WHERE `login`=:login AND `pass`=:pass";
	$connect = db_connect();
	$s = $connect->prepare($sql);
	$s->bindValue(':login', $login, PDO::PARAM_STR);
	$s->bindValue(':pass', $pass, PDO::PARAM_STR);
	$s->execute();
	$num_rows = $s->fetchColumn();
	db_close($connect);
	if ($num_rows > 0) {
		$ret = 1;
		setAdminSession();
	}
	else {
		$ret = 0;
	}
	return $ret;
}
function getTaskByID($id) {
	$sql = "SELECT text FROM tasks WHERE id=:id";
	$connect = db_connect();
	$s = $connect->prepare($sql);
	$s->bindValue(':id', $id, PDO::PARAM_INT);
	$s->execute();
	$r = $s->fetch(PDO::FETCH_ASSOC);
	db_close($connect);
	return $r['text'];
}

function editTask($id, $text, $status, $inc_file) {
	$ret = testAdmLogin($inc_file);
	if ($ret == 1) {
		action_logout();
		return 2;
	}
	else {
		$sql = "UPDATE tasks SET `text`=:text, `status`=:status WHERE id=:id";
		$connect = db_connect();
		$s = $connect->prepare($sql);
		$s->bindValue(':text', $text, PDO::PARAM_STR);
		$s->bindValue(':status', $status, PDO::PARAM_INT);
		$s->bindValue(':id', $id, PDO::PARAM_INT);
		$s->execute();
		return 1;
	}
}

function showBR($t) {
	$t = str_replace("\r\n", "<br>", $t);
	return $t;
}

function testAdmLogin($inc_file) {
	if ($inc_file == 'login') {
		return 1;
	}
	else {
		return 0;
	}
}

function Reload() {
	header("Refresh:0");
}