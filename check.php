<?php
require 'db.php';
session_start();

$_SESSION['mail'] = $pc;

if ($user->email == $pc) {
	
$getstatus = R::find('users', 'status = ?', array(1));
}
 if( $getstatus ) {
	 $_SESSION['cond'] = $getstatus;
	  header( 'Refresh: 0; url=study.php' );
 }

else {
 header( 'Refresh: 0; url=main.php' );

}

	?>
