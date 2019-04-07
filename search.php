<?php
session_start();
	require 'db.php';

	$op = $_SESSION['trans'];
	$operation = R::findOne('payments', ' transid = ? ', array($op));

	if ($operation->transid == $op) {

	 echo "Success";
	 session_unset();
	 session_destroy();
	}
	else {
	  echo "Fail";
		session_unset();
		session_destroy();
	}
 ?>
