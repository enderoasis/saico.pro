<?php

require 'db.php';

$hash = sha1($_POST['notification_type'].'&'.
$_POST['operation_id'].'&'.
$_POST['amount'].'&'.
$_POST['currency'].'&'.
$_POST['datetime'].'&'.
$_POST['sender'].'&'.
$_POST['codepro'].'&'.
'RnubLDTCpA526nW0KFSN4Lnm'.'&'.
$_POST['label']);

if ( $_POST['sha1_hash'] != $hash or $_POST['codepro'] === true or $_POST['unaccepted'] === true ) exit('error');
if ($_POST['amount'] < 3) exit('error');
$payment = R::dispense('payments');
$payment->sum = $_POST['amount'];
$payment->email = $_POST['email'];
R::store($payment);

$usermail = $_POST['email'];
$userpaid = $_POST['amount'];


$Url = "https://195.210.46.63/pay?email=".$usermail."&sum=".$userpaid;
$callback = file_get_contents($Url);
?>
