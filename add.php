<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="ssilka">
        <h2 class="mainurl" ><a class ="mainurlurl" href="osnova.php">Главная</a> <img class="litlog" src="img/mainlog.png" ></h2>
            <h2 class="profurl"><a class ="profurlurl" href="main.php" >Личный кабинет</a><img class="litlog" src="img/proflog.png"></h2>
        </div>
    </div>

<form method="POST" action="add_req.php">
<?php
include 'connect.php';
?>

    <div class="dobavka">

        <div class="dobavka_verx">
            <select class="addspisok" name="category">
                <?php
                    $result = $conn->query("SELECT * FROM category");

                    foreach ($result as $option) {
                        echo '<option>' . $option['category'] . '</option>';
                    }

                ?>
            </select>
            <input class="addnazv" type="text" name="title" placeholder='Название'>
        </div>

        <input class="addopis" size=25 maxlength=25 type="text" name="description" placeholder='Описание'>

        <div class="addfoto_div">
            <label class="custom-file-upload">
                <input type="file"/>
                 Загрузить фото
            </label>
        </div>
        <div class="addbutton_div">
            <h2 class="addbutton"><button type="submit">Добавить животное<img class="" src="img/addlog.png"></h2>
        </div>
    </div>
    </form>

<?php
include 'foot.php';
?>

</body>


</html>
