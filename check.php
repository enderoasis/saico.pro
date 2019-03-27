<?php
require 'db.php';
session_start();

if (!isset($_SESSION['logged_user'])) {
  	echo '<div style="color:red;">Пожалуйста, выполните вход!<br/>.</div><hr>';
header( 'Refresh: 0; url=login.php' );
}
	$check	=  $_SESSION['mail'];

 	$fon = R::findOne('payments', 'email = ?', array($check));
  if ($fon) {
    $st = 1;
  $fnd	= R::findOne('payments','status = ?', array($st));
  }
if ($fnd) {
  $_SESSION['status'] = "OK";
	}
else {

  $fromuser = R::findOne('users', 'email = ?', array($check));
}
  if ($fromuser) {
    $sd = 1;
    $fromuserfound = R::findOne('users','status = ?', array($sd));
  }
if ($fromuserfound) {
  $_SESSION['status'] = "OK";
}

else {
  header( 'Refresh: 0; url=main.php' );
}


 ?>
