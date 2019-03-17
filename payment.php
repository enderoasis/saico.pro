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

$myvar1 = $_POST['amount'];
$myvar2 = $_POST['email'];
$url = 'https://education.saico.pro';
$myvars = 'myvar1=' . $myvar1 . '&myvar2=' . $myvar2;

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

//file_put_contents('history.php', $_POST['datetime'] . 'через Яндекс.Деньги на сумму: '. $_POST['amount']. 'Почта'. $_POST['label'] .PHP_EOL, FILE_APPEND);
?>
