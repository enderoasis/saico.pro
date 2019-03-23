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

$payment = R::dispense('payments');
$payment->sum = $_POST['amount'];
$payment->email = $_POST['email'];
R::store($payment);

$usermail = $_POST['email'];
$userpaid = $_POST['amount'];


$url = "https://partners.saico.pro/pay?email=".$usermail."&sum=".$userpaid;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);


?>
