<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;

if ($user->email == $pc) {
	echo "YES";
	echo "$user";
$getstatus = R::find('users', 'status = ?', array(1));
}

else {
  echo "BYE";
}

	?>
