<?php
session_start();
if ($_SESSION['state'] = "true") {
	header('Refresh: 1; url=study.php');
}

else {
  	header('Refresh: 5; url=login.php');
}

 ?>
