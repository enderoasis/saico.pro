<?php


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


file_put_contents('history.php', $_POST['datetime'] . 'через Яндекс.Деньги на сумму: '. $_POST['amount']. 'Почта'. $_POST['label'] .PHP_EOL, FILE_APPEND);
?>