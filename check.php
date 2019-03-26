<?php
require 'db.php';
session_start();

	$check	=  $_SESSION['mail'];

 	$fon = R::findOne('users', 'email = ?', array($check));
  if ($fon) {
    $st = 1;
  $fnd	= R::findOne('users','status = ?', array($st));
  }
if ($fnd) {
  $_SESSION['status'] = "OK";
	header( 'Refresh: 0; url=study.php' );

}

 ?>
