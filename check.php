<?php
require 'db.php';
session_start();
if (isset($_SESSION['status'])) {
	  header( 'Refresh: 0; url=main.php' );
}

else {


	$check	=  $_SESSION['mail'];

  $cets = R::findOne('users', 'email = ?', array($check));
}
  if ($cets) {
      $st = 1;
    $state = R::find('users','status = ?', array( $st ));
    if ($state) {

      $_SESSION['status'] = $s1;
      header( 'Refresh: 0; url=study.php' );
    }
  }
  if (!$cets) {
    $st1 = 1;
    $state1 = R::find('payments','status = ?', array( $st1 ));
    if ($state1) {

      $_SESSION['status'] = $s1;
  header( 'Refresh: 0; url=study.php' );
    }

    else {
      header( 'Refresh: 0; url=main.php' );
    }
  }
	?>
