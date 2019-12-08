<?php
 $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
 FILTER_SANITIZE_STRING);
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link=new mysqli($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
echo"<br>";
$result = $link->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user = $result->fetch_assoc();
if ($user['admin']=='10'){echo("admin");
echo "<br>";
header('Location:sitesu.html');
}
if ($user['admin']=='1'){echo("notadmin");
echo "<br>";
header('Location:site.php');}
if ($user['admin']=='9') {echo ("moder");
echo "<br>";
header ('Location:moder.html');
error_reporting(0);
if(count($user) == 0) {
echo "Неверно введённый логин и/или пароль!";
echo '<p><a href="reg.html">'."Вернуться на главную страницу".'</a></p>';
exit();
 }
 setcookie('login', $user['login'], time() + 60*60*2, "/");
 setcookie('admin', $user['admin'], time() + 604800, "/");
 setcookie('moder', $user['moder'], time() +604800, "/");
 $link->close();
?>
