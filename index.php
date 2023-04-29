<?php
include "connect.php";
include "functions.php";
$login1 = check_user(); 
if (!empty($login1)) {
   echo '<p>Вы вошли как '.$login1.'. <a href="logout.php">Выход</a></p>';
   //код для авторизованного пользователя
   }
  else {
   include "logform.php";
  }
?>