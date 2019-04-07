<?php
session_start();
	require 'db.php';

	$op = $_SESSION['trans'];
	$operation = R::findOne('payments', ' transid = ? ', array($op));

	if ($operation->transid == $op) {

	 echo "Success";
	}
	else {
	  echo "Fail";
	}
 ?>
