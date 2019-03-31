<?php
session_start();
	require 'db.php';

$op = $_SESSION['opid'];
$operation = R::findOne('payments', ' transid = ? ', array($op));
  if ($operation) {
$operation->email = $mail;
$operation->sum = $total;
echo "<p>Почта пользователя:.$mail.Сумма оплаты:".$total";
}


 ?>
