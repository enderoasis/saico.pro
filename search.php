<?php
session_start();
	require 'db.php';

$op = $_SESSION['opid'];
$operation = R::findOne('payments', ' transid = ? ', array($op));
  if ($operation) {
$operation->email = $mail;
$operation->status = $state;
printf('Текущий E-mail: %s', $mail);
printf('Статус оплаты: %s', $state);
}


 ?>
