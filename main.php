<!DOCTYPE html>

<head>
    <title>Главная</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="ssilka">
            <h2 class="mainurl" ><a class ="mainurlurl" href="osnova.php">Главная</a> <img class="litlog" src="img/mainlog.png" ></h2>
            <h2 class="profurl"><a class ="profurlurl" href="main.php" >Личный кабинет</a><img class="litlog" src="img/proflog.png"></h2>
        </div>
    </div>
    <div class="fotoprof">
        <img class="foto" src="img/foto.png">
        <div class="zayavki"><h2 class="vashi">Избранные животные</h2>
            <h2 class="add"><a href="add.php">Добавить животное</a> <img class="litlog" src="img/addlog.png" ></h2>
        </div>
    </div>

    <div class="zav">
    </div>
<?php
include 'foot.php';
?>
</body>
</html>
