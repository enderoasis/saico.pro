<?php
session_start();
	require 'db.php';

	$op = $_SESSION['trans'];
	$operation = R::findOne('payments', ' transid = ? ', array($op));

	if ($operation->transid == $op) {

	 echo "Success";
	 session_unset();
	 unset($_SESSION['trans']);
	 session_destroy();
	}
	else {
	  echo "Fail";
		session_unset();
		unset($_SESSION['trans']);
		session_destroy();
	}
 ?>
