<?php
session_start();
if ($_SESSION['state'] = "true") {
	header( 'Location: /study.php', true, 303 );
}

else {
	header( 'Location: /login.php', true, 303 );
}

 ?>
