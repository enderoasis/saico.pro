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
// на случай, Если пользователь не регистрировался
if ($_POST['amount'] < 5) exit('error');

$payment = R::dispense('payments');
$payment->sum = $_POST['amount'];
$payment->email = $_POST['email'];
$payment->status = '1';
$payment->transid = $_POST['operation_id'];
R::store($payment);

//Если пользователь уже зарегистрирован , то вписываем статус в users
$pc1 =  $_POST['email'];
//$q1 = R::exec( 'UPDATE `users` SET `status`="1" WHERE `email` = ?', array($pc1) );
$user = R::findOne('users', ' email = ? ', array($pc1));
if ($user) {
  $user->status = '1';
  R::store($user);
  // code...
}

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
