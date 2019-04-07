<?php
session_start();
	require 'db.php';

	$op = $_SESSION['trans'];
	$operation = R::findOne('payments', ' transid = ? ', array($op));

	if ($operation->transid == $op) {

	 echo "Success";
	 echo $op;
	 unset($_SESSION['trans']);
	 	session_unset();
	 	session_destroy();
	}
	else {
	  echo "Fail";
		echo $op;
		unset($_SESSION['logged_user']);
			session_unset();
			session_destroy();
	}
 ?>
