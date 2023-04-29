<?php
include 'connect.php';
    $userlog=$_POST["login1"];
    $userpass=$_POST["password"];
    session_start();
    $_SESSION['log'] = $userlog;
    $_SESSION['user_status'] = 0;

    
if (mysqli_fetch_array($conn->query("SELECT * FROM `reg` WHERE `login` = '{$userlog}' and  `password1`= '{$userpass}'")))
{
  
  $_SESSION['user_status'] = 1;
  $new_url = 'message.php';
  header('Location: '.$new_url);
  exit();
}
else{
  ?>
  <p>Введены неверные данные</p>
  <form action="logform.php">
    <input type="submit" value="Вернуться">
  </form>
  <?php
}
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $conn->connect_error);
};

