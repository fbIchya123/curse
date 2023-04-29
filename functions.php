<?php
function check_user() {
   if (!isset($_SESSION['my_inside']))
     return '';
   else return $_SESSION['current_user'];
  }
?>