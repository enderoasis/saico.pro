<?php
session_start();
require 'db.php';
$global = $_POST;
$mail = $global['tra'];
$_SESSION = $mail;
$mail2 = $_SESSION['reg'];
$fromlog =  $_SESSION['mail'];
$getmail = R::findOne('payments', ' email = ? ', array($mail));
$stat1 = '1';
if ($getmail->status == $stat1)
{
  $clients = R::findOne('users', ' email = ? ', array($fromlog));
  if ($clients) {
    $clients->status = '1';
    R::store($clients);
    header( 'Refresh: 0; url=check.php' );  // code...
  }

}



 ?>
