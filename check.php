<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;
if ($user->status == 1) {

	echo "HI";
}
else {
  echo "BYE";
}

	?>
