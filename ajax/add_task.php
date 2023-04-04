<?php
$name = trim(strip_tags($_POST['u_name']));
$mail = trim(strip_tags($_POST['u_mail']));
$text = trim(strip_tags($_POST['u_text']));
addTask($name, $mail, $text);
exit();