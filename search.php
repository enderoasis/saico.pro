<?php
session_start();
	require 'db.php';

$op = $_SESSION['opid'];
$operation = R::findOne('payments', ' transid = ? ', array($_SESSION['opid']));
  if ($operation) {
echo "OK";
}
else {
	echo "Оплаты с таким номером транзакции не найден.";
}

 ?>
