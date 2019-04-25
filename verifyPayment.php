<?php
session_start();
require 'db.php';
$global = $_POST;
$mail = $global['tra'];
$mail2 = $_SESSION['reg'];
if ( isset($global['do_fix']) )
{
  $getmail = R::findOne('payments', ' email = ? ', array($mail));
}
if ($getmail) {
  $clients = R::findOne('users', ' email = ? ', array($mail2));
}
if ($clients) {
  $clients->status = '1';
  R::store($clients);
     header( 'Refresh: 0; url=check.php' );
}

 ?>
 !<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <section>
       <header class="main" >
         <h2>Восстановление доступа </h2>
         <p>Пожалуйста, укажите почту которую вы указали при <b>оплате</b>,вот здесь. <br>
           <img src="/image/tempsnip.png">
         </p>
       </header>

       <form name="form1" method="post" action="recover_pass.php">
       <p><i>Укажите почту</i><input type="text" name="email" id="recover" value="<?php echo @$global['tra'];?>" size="40" /></p>
       <p>
           <input type="submit" name="do_fix" value="Восстановление" size="40">
       </p>
     </form>


     </section>
   </body>
 </html>
