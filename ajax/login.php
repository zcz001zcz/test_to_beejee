<?php
$login = trim($_POST['a_login']);
$pass = trim($_POST['a_pass']);
$ret = getAdminAuth($login, $pass);
echo $ret;
exit();