<?php
$title = 'Список задачь';

function setAdminSession() {
	$_SESSION['adm'] = 'yes';
}

function action_logout() {
	session_destroy();
}

$in_page = 3;
$url = 'index.php';

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}
else {
	$page = 1;
}

if (isset($_GET['sort'])) {
	$s_param = $_GET['s_param'];
	$sort = $_GET['sort'];
}
else {
	$s_param = 'name';
	$sort = 'ASC';
}

$to_sort = 'ASC';
$sort == 'DESC' ? $to_sort='ASC' : $to_sort='DESC';
$tasks = Taskpagination($page, $in_page, $s_param, $sort, $total_pages);
$url_p = $url.'?page='.$page.'&amp;s_param='.$s_param.'&amp;sort='.$sort;
$pages = '';
for ($i = 1; $i <= $total_pages; $i++){
	if (!isset($page) && $i == 1) {$class="active";}
	else {
		if ($i == $page) {$class="active";} else {$class="";}
	}	
	$pages .= '
	<li class="page-item '.$class.'">
		<a class="page-link" href="'.$url_p.'&page='.$i.'">'.$i.'</a>
	</li>
	';
}