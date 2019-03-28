
<?php

	session_start();
unset($_SESSION['mail']);
unset($_SESSION['stat']);
unset($_SESSION['logged_user']);
	session_unset();
	session_destroy();

header("Location: /index.php");



 ?>
