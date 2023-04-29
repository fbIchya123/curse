<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/reg.css">
        <title>Регистрация</title>
    </head>
    <body>
        <div class="head">
            <img class="logo" src="styles/img/logo.png" alt="" style="opacity: 0">
            <p style="font-size: 20px; margin-bottom: 0.5%;">Регистрация</p>
        </div>
        <div class="form-div">
            <form method="post" action="reg.php" name="registration">
                <input class="reg-inp" id="fio" type=text size=25 maxlength=25 name=fio placeholder='ФИО' required>
                <input class="reg-inp" id="login" type=text size=25 maxlength=25 name=login placeholder='Логин' required>
                <input class="reg-inp" id="mail" type=text size=25 maxlength=25 name=mail placeholder='E-mail' required>
                <input class="reg-inp" id="pass" type=password size=25 maxlength=25  name=password placeholder='Пароль' required>
                <input class="reg-inp" id="passprove" type=password size=25 maxlength=25 name=password2 placeholder='Подтверждение' required>
                <div class="niz">
                        <div class="soglasie" id="sogl">
                            <input class="chekb" id="chekb" type="checkbox" name="chekb" value="true" required>
                            <p class="p-sogl">Согласие на обработку персональных данных</p>
                        </div>
                    <button class="reg-btn" type="submit" id="reg">Зарегистрироваться</button>
                </div>
            </form>
            <div class="log-btn-div">
                <p style="width: 193px; font-size: 15px;text-align: right;">Уже зарегистрированы?</p>
                <button class="log-btn" type="submit" id="toLog">Войти</button>
            </div>
            <div class="inc">

            </div>
        </div>
    </body>
    <script src="scripts/regToLog.js"></script>
    <script src="scripts/validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>
