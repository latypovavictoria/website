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

$sql="INSERT INTO `text` (`text`)
VALUES('$text')";
if (mysqli_query($link, $sql)) {
   echo "Успешно создана новая запись";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  }
  header ('Location:simple.php');
  header ('location:text.php');
  ?>
