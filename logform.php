<!--<form method="post" action="login.php">
 <table width=100% align=center border=0>
  <tr><td align=center>Логин:
  </td>
  <td><input type=text size=32 maxlength=32     name=login></td>
</tr>  <tr><td align=center>Пароль:</td>
  <td>   <input type=password size=32 maxlength=32     name=password></td>
</tr>
<tr><td align=center>
   <a href="register.php">Регистрация</a>
</td>
   <td align=center>
    <input type=submit value="OK"></td>
</tr> </table>
</form>
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/log.css">
        <title>Регистрация</title>

    </head>
    <body>
        <div class="head">
            <img class="logo" src="styles/img/logo.png" alt="" style="opacity: 0">
            <p style="font-size: 20px; margin-bottom: 0.5%;">Вход</p>
        </div>
        <div class="form-div">
            <form method="post" action="osnova.php" >
                <input class="reg-inp" type=text size=25 maxlength=25 name=login placeholder='Логин' required>
                <input class="reg-inp" type=password size=25 maxlength=25  name=password placeholder='Пароль' required>
                <div class="niz">
                    <button class="log-btn" type="submit" id="toLog">Войти</button>
                </div>
            </form>
        </div>
    </body>
    <script src="scripts/regToLog.js"></script>
</html>
