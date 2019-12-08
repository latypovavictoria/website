<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#E0FFFF;
}
p {background-color:#AFEEEE; text-align:center;
}
.tyr {text-align:center; border-color:blue;
}
</style>
</head>
<body>
<p>Пользователи</p>
<?php
$servername = "localhost";
$username = "root";
$password = "Vika_06012001";
$dbname = "reg";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}
$sql = "SELECT id, login, pass FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table style='text-align:center; border:2px solid black; width:500px; height:500px'><tr><td><h3>ID</h3></td><td><h3>Пользователь</h3></td><td><h3>Пароль</h3></td></tr>";
   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>". $row["id"]."</td><td>" . $row["login"]. "</td><td> " . $row["pass"]. "</td></tr>";
   echo "</table>";}
} else {
   echo "Пользователи не найдены";
}
mysqli_close($conn);
?>
<div class="tyr">
<form action="deleteus.php" method="POST">
<input type="text" name="id" placeholder="Введите id">
<input type="submit" value="Удалить">
</form>
</div>
</body>
</html>
