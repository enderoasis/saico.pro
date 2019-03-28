<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;

if ($user->email == $pc) {

	echo "HI";
}
else {
  echo "BYE";
}

	?>
