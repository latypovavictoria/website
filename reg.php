<?php
$e_mail=filter_var(trim($_POST['e_mail'], FILTER_SANITIZE_EMAIL)); 
$login=filter_var(trim($_POST['login'], FILTER_SANITIZE_STRING)); 
$pass=filter_var(trim($_POST['pass'], FILTER_SANITIZE_STRING));
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link=mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql="INSERT INTO `users` (`e_mail`,`login`,`pass`)
VALUES('$e_mail','$login','$pass')";
if (mysqli_query($link, $sql)) {
   echo "Успешно создана новая запись";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
}
header('Location:site.php');
?>
