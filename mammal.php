<!DOCTYPE html>
<html>
<head>
<style>
* {background-color:#FFE4B5;
}
h1 {background-color:#FFD700; text-align:center;
}
.loi {text-align:center;
}
</style>
<meta charset="utf-8">
</head>
<body>
<h1>Дополнение статьи</h1>
<div class="loi">
<form action="" method="POST">
<input type="text" name="text" placeholder="Новая информация" pattern="[A-Za-zА-Яа-я]{8,}"required>
<input type="submit" value="Добавить">
</form>
</div>
</body>
</html>
<?php
$text=$_POST['text'];
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="animal";
$link=mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql="INSERT INTO `animal` (`text`)
VALUES('$text')";
if (mysqli_query($link, $sql)) {
   echo "Успешно создана новая запись";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  }
  ?>
