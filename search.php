<?php
session_start();

require 'db.php';
// From inputs in verifyPayment
$_SESSION['inp'] = $input;
// From registration
$m1 = $_SESSION['reg'];
// From login.php
$_SESSION['mail'] = $m2
$getmail = R::findOne('payments', ' email = ? ', array($input));
$stat1 = '1';
if ($getmail->status == $stat1)
{
  $clients = R::findOne('users', ' email = ? ', array($m2));}
  if ($clients) {
    $clients->status = '1';
    R::store($clients);
    header( 'Refresh: 0; url=check.php' );  // code...
  }





 ?>
