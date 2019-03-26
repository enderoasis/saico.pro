<?php
require 'db.php';
session_start();

	$check	=  $_SESSION['mail'];
 $st = 1;
 	$fon = R::findOne('users', 'email = ?', array($check));
  if ($fon) {
  $fnd	= R::findOne('users','status = ?', array($st));
  }
if ($fnd) {
  $_SESSION['status'] = "OK";
	header( 'Refresh: 0; url=study.php' );

}
else {
  $fon1 = R::findOne('payments', 'email = ?', array($check));
}
  if ($fon1) {
    $fnd1 = R::findOne('payments','status = ?', array($st));
  }
  if ($fnd1) {
    $_SESSION['status'] = "OK";
  	header( 'Refresh: 0; url=study.php' );

  }
 ?>
