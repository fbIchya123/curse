<?php
  require_once ("functions.php");
    $current_user=check_user();
  if (!empty($current_user)) {
   $_SESSION = array();
   session_destroy ();
  }
  header('Location: index.php'); 
?>  
