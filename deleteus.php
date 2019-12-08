<?php
$id=$_POST['id'];
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link=new mysqli($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$sql=("DELETE FROM `users` WHERE `id`='$id'");
if (mysqli_query($link, $sql)) {
    echo "Запись успешно удалена";
	header ('Location:users.php');
} else {
   echo "Ошибка удаления записи: " . mysqli_error($conn);
}
$link->close();
?>
