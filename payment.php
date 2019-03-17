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
$data = http_build_query(
    array(
        'user_id' => $usermail,
        'user_p' => $userpaid,

    )
);

$options = array('http' =>
    array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $data
    )
);
$context = stream_context_create($options);
$result = file_get_contents('https://education.saico.pro', false, $context);
$result = htmlspecialchars($result);
//file_put_contents('history.php', $_POST['datetime'] . 'через Яндекс.Деньги на сумму: '. $_POST['amount']. 'Почта'. $_POST['label'] .PHP_EOL, FILE_APPEND);
?>
