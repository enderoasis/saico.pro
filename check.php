<?php
require 'db.php';
session_start();

if (!isset($_SESSION['logged_user'])) {
   header( 'Refresh: 0; url=login.php' );
}
$pc = $_SESSION['mail'];

if ($user->email == $pc) {
$stat = 1;
//$getstatus = R::find('users', 'email = :pc' ,' status = :stat' , array('pc' =>$pc, 'stat'=>$stat ));
$getstatus = R::exec('SELECT `status` FROM `users` WHERE `email` = ?', array($pc));


}
 if( $getstatus == $stat ) {
	 $_SESSION['stat'] = "OK";
	  header( 'Refresh: 0; url=study.php' );
		$file = 'logs.php';
		file_put_contents($file, $getstatus, FILE_APPEND | LOCK_EX);
 }

else {
 header( 'Refresh: 0; url=main.php' );

}

	?>
