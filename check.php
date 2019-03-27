<?php
require 'db.php';
session_start();

if (!isset($_SESSION['logged_user'])) {

header( 'Refresh: 0; url=login.php' );
}
	$check	=  $_SESSION['mail'];

$users = R::findOne('payments', 'email = ?', array($check));

if ($users) {
  if ($users->status == 1) {
    $st = 1;
  $_SESSION['status'] = $st;
  }
}
else {
  header( 'Refresh: 0; url=main.php' );
}




 	$fon = R::findOne('payments', 'email = ?', array($check));
  if ($fon) {
    $st = 1;
  $fnd	= R::findOne('payments','status = ?', array($st));
  }
if ($fnd) {
  $_SESSION['status'] = "OK";
	}



 ?>
