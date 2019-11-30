<?php
 $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
 FILTER_SANITIZE_STRING);
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link=mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$result = $link->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user = $result->fetch_assoc();
error_reporting(0);
if(count($user) == 0) {
echo "Неверно введённый логин и/или пароль!";
echo '<p><a href="reg.html">'."Вернуться на главную страницу".'</a></p>';
exit();
 }
 
 setcookie('user', $user['name'], time() + 604800, "/");
 setcookie('login', $user['login'], time() + 604800, "/");
 setcookie('admin', $user['admin'], time() + 604800, "/");
 $mysql->close();
 header('Location:site.php');
?>
