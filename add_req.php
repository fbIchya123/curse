<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Добавление животного</title>
    </head>
    <body>

    </body>
</html>

<?php
include 'connect.php';
    $title=$_POST["title"];
    $description=$_POST["description"];
    $category=$_POST["category"];

    $result = $conn->query("INSERT INTO `requsests` (`title`, `user_id`, `description`, `photo_do`, `category_id`) VALUES ('$title', 0, '$description', 0, 0)");
    echo $result;


        $conn->query("  )");
        // $new_url = 'add.php';
        // header('Location: '.$new_url);



if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}
