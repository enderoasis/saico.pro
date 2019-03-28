<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;
$p = "vasa@mail.ru";
if ($user->email == $p) {

	echo "HI";
}
else {
  echo "BYE";
}

	?>
