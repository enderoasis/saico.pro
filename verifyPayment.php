<?php
session_start();
require 'db.php';
$global = $_POST;
$mail = $global['tra'];
$_SESSION['inp']= $global['tra'];

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

       <form name="form1" method="post" action="search.php">
       <p><i>Укажите почту</i><input type="text" сlass="form-control" name="email" id="rec" value="<?php echo @$_POST['tra'];?>" size="40" /></p>
       <p>
           <input type="submit" name="do_fix" class="button" id="rec2" value="Восстановление" size="40">
       </p>
     </form>


     </section>
   </body>
 </html>
