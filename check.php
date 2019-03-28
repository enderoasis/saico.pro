<?php
require 'db.php';
session_start();

$pc = $_SESSION['mail'];

if ($user->email == $pc) {
$stat = 1;
//$getstatus = R::find('users', 'email = :pc' ,' status = :stat' , array('pc' =>$pc, 'stat'=>$stat ));
$getstatus = R::exec('SELECT `status` FROM `users` WHERE `email` = ?', array($pc));

var_dump ($getstatus);
}
 if( $getstatus == '1' ) {
	 $_SESSION['cond'] = $getstatus;
	  header( 'Refresh: 0; url=study.php' );
 }

else {
 header( 'Refresh: 0; url=main.php' );

}

	?>
