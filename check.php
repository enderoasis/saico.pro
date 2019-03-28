<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;
$p = "enderoasis@gmail.com";
if ($user->email == $p) {

	echo "HI";
}
else {
  echo "BYE";
}

	?>
