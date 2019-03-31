<?php
session_start();
	require 'db.php';

$op = $_SESSION['opid'];
$operation = R::findOne('payments', ' transid = ? ', array($op));
  if ($operation) {
$operation->email = $mail;
$operation->status = $state;
echo $mail;
echo $state;
}
else {
	echo "Оплаты с таким номером транзакции не найден."ж
}

 ?>
