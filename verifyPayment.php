<?php
session_start();
require 'db.php';
$pst = $_POST;

$pay = R::findOne('payments','email = ?', array($pst['tra']));
$usr = R::findOne('users', 'email = ?', array($pst['tra2']));
if ($pay) {
  $usr->status = '1';
  R::store($user);

}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Восстановление доступа</title>
     <link href="/css/styles.min.css" rel="stylesheet" media="screen">
       <link rel="icon" href="https://partners.saico.pro/favicon.png">
     <style>
     #rec {
       width: 300px;
       }
       #rec2 {
         width: 300px;
         }
     </style>
   </head>
   <body>
     <section>
       <header class="main" >
         <h2>Восстановление доступа </h2>
         <p>Пожалуйста, укажите почту которую вы указали при <b>оплате</b>,вот здесь. <br>
           <img src="/image/tempsnip.png" width="500" height="500">
         </p>
       </header>

       <form name="form3" method="post" action="verifyPayment.php">
       <p><i>Укажите почту</i><input type="text" сlass="form-control" name="email" id="rec" value="<?php echo @$pst['tra'];?>" size="40" /></p>

<p><i>Укажите почту при регистрации</i><input type="text" сlass="form-control" name="email2" id="rec2" value="<?php echo @$pst['tra2'];?>" size="40" /></p>
       <p>
         <button type="submit" name="do_fix" class="button" id="rec2" size="40">Восстановление</button>
       </p>
     </form>


     </section>
   </body>
 </html>
