<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;

if ($user->email == $pc) {

$getstatus = R::getAll('SELECT status * FROM users WHERE email = :mail', array(':mail' => $pc) );
}
 if( $getstatus == 1 ) {
	 $_SESSION['cond'] = $getstatus;
	  header( 'Refresh: 0; url=study.php' );
 }

else {
 header( 'Refresh: 0; url=main.php' );

}

	?>
