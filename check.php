<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;
if ($user2->status == 1) {

	echo "HI";
}
else {
  echo "BYE";
}

	?>
