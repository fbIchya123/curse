<script>
function formValidation(){
    var log = document.registration.login;
    var pass = document.registration.password;
    var fio = document.registration.fio;
    var mail = document.registration.mail;
    var passprove = document.registration.password2;
    var chekb = document.registration.chekb;
    if(allLetter(fio)){
    }
    if(fio_validation(log, 5, 25)){
    }
    if(ValidateEmail(mail)){
    }
    if(pass_validation(pass, 6)){
    }
    if(passprove_validation(pass)){
    }
    if(checkb_validation(chekb)){
    }


    function fio_validation(log, mx, my){
        var log_len = log.value.length;
        if (log_len == 0 || log_len >= my || log_len < mx){
            $('#login').removeClass('reg-inp').addClass('reg-inp-inc');
            return false;
        }else{
            $('#login').removeClass('reg-inp-inc').addClass('reg-inp');
            return true;
        }
    }





    function pass_validation(pass, mx){
        var pass_len = pass.value.length;
        if (pass_len == 0 || pass_len < mx){
            $('#pass').removeClass('reg-inp').addClass('reg-inp-inc');
            return false;
        }else{
            $('#pass').removeClass('reg-inp-inc').addClass('reg-inp');
            return true;
        }
    }





    function allLetter(fio){
        var letters = /^[А-Яа-я ]+$/;
        if(fio.value.match(letters)){
            $('#fio').removeClass('reg-inp-inc').addClass('reg-inp');
            return true;
        }else{
            $('#fio').removeClass('reg-inp').addClass('reg-inp-inc');
            return false;
        }
    }






    function ValidateEmail(mail){
        var mailformat = /^[\w]{1}[\w-\.]*@[\w-]+\.[a-z]{2,4}$/i;
        if(mail.value.match(mailformat)){
            $('#mail').removeClass('reg-inp-inc').addClass('reg-inp');
            return true;
        }else{
            $('#mail').removeClass('reg-inp').addClass('reg-inp-inc');
            return false;
        }
    }



    function passprove_validation(){
        if(passprove.value == pass.value){
            $('#passprove').removeClass('reg-inp-inc').addClass('reg-inp');
            return true;
        }else{
            $('#passprove').removeClass('reg-inp').addClass('reg-inp-inc');
            return false;
        }
    }




    function checkb_validation(checkb){
        if(chekb.checked){
            $('#sogl').removeClass('soglasie-inc').addClass('soglasie');
            return false;
        }else{
            $('#sogl').removeClass('soglasie').addClass('soglasie-inc');
            return true;
        }
    }
}
</script>


<?php
include 'connect.php';
    $userfio=$_POST["fio"];
    $userlog=$_POST["login"];
    $usermail=$_POST["mail"];
    $userpass=$_POST["password"];

      if (mysqli_fetch_array($conn->query("SELECT * FROM `user` WHERE `login` = '{$userlog}'")))
    {
        ?>
        <p>Такой логин уже есть.</p>
        <form action="register.php">
          <input type="submit" value="Вернуться">
        </form>
        <?php
      }
      else{
        $conn->query("INSERT INTO `user` (`fio`,`login`, `mail`, `password`) VALUES ('$userfio', '$userlog', '$usermail', '$userpass')");
        $new_url = 'index.php';
        header('Location: '.$new_url);
        exit();
      }




if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}
