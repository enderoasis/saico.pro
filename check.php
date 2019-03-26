<?php
require 'db.php';
session_start();
if (!isset($_SESSION['logged_user'])) {
  	echo '<div style="color:red;">Пожалуйста, выполните вход!<br/>.</div><hr>';
	header( 'Refresh: 0; url=login.php' );
}
	$check	=  $_SESSION['mail'];
 $st = 1;
 	$fon = R::findOne('users', 'email = ?', array($check));
  if ($fon) {
  $fnd	= R::findOne('users','status = ?', array($st));
  }
if ($fnd) {
	header( 'Refresh: 0; url=study.php' );
  $_SESSION['status'] = "OK";
}
else {
  $fon1 = R::findOne('payments', 'email = ?', array($check));
}
  if ($fon1) {
    $fnd1 = R::findOne('payments','status = ?', array($st));
  }
  if ($fnd1) {
  	header( 'Refresh: 0; url=study.php' );
    $_SESSION['status'] = "OK";
  }
 ?>
