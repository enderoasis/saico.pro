<?php
session_start();
require 'db.php';


//Генерация случайного пароля
$simv = array ("92", "83", "7", "66", "45", "4", "36", "22", "1", "0",
                   "k", "l", "m", "n", "o", "p", "q", "1r", "3s", "a", "b", "c", "d", "5e", "f", "g", "h", "i", "j6", "t", "u", "v9", "w", "x5", "6y", "z5");
      for ($k = 0; $k < 8; $k++)
        {
          shuffle ($simv);
          $string = $string.$simv[1];

        }


 ?>
