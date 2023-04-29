<?php
session_start();
if($_SESSION['user_status']){

?>
<form action="mess.php" method="post">
    <h4>Введите своё сообщение</h4>
    <?php
  //  include 'logform.php';
    session_start();
    echo $_SESSION['log'];
    ?>
    <input name="pole" type="textarea">
    <input type=submit value="Отправить">
</form>
<?php
} else {
    $new_url = 'login.php';
    header('Location: '.$new_url);
}
?>