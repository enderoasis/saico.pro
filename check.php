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
  header( 'Refresh: 0; url=main.php' );
}

 ?>
