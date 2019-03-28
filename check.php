<?php
require 'db.php';
session_start();

if (!isset($_SESSION['logged_user'])) {
   header( 'Refresh: 0; url=login.php' );
}
$pc = $_SESSION['mail'];

//if ($user->email == $pc) {
$stat = '1';
//$getstatus = R::find('users', 'email = :pc' ,' status = :stat' , array('pc' =>$pc, 'stat'=>$stat ));
$getstatus = findOne('users', ' email = ? ', array($pc));
//R::exec('SELECT `status` FROM `users` WHERE `email` = ?', array($pc));
if ($getstatus->status == $stat){
	$_SESSION['haspaid'] = $stat;
	   header( 'Refresh: 0; url=study.php' );
}

//}
// if( $getstatus == $stat ) {
	// $_SESSION['stat'] = "OK";
	 // header( 'Refresh: 0; url=study.php' );
		// }

else {
 header( 'Refresh: 0; url=main.php' );

}

	?>
