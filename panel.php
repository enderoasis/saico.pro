<?php
session_start();
$data3 = $_POST;

if ( isset($data3['find']) )
{
$op = $data3['tr'];
$operation = R::findOne('payments', ' transid = ? ', array($op));
}
if ($operation) {
 echo $operation->email;
 echo "Success";
}



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
#rec {
  width: 300px;
  }
</style>
<title>Вывод данных</title>
</head>

<body>
<fieldset>

<label for="first_name">№ Транзакции:</label><br/>
<input type="text" name="first_name" id="rec" value="<?php echo @$data3['tr']; ?>" size="150"><br/>

<button type="submit" name="find">Найти</button><br/>
</form>
</fieldset>
</body>
</html>
