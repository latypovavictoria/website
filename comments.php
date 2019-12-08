<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#FFDAB9;
}
h1 {background-color:#FFE4E1; text-align:center;
}
.uuu {text-align:center;
}
</style>
</head>
<body>
<h1>Отзывы</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "Vika_06012001";
$dbname = "reg";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}
$sql = "SELECT id, text1, text2, text3 FROM comments";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table style='text-align:center; border:2px solid black; width:500px; height:500px'><tr><td><h3>ID</h3></td><td><h3>Имя</h3></td><td><h3>Отзывы</h3></td><td><h3>Дополнительно</h3></td></tr>";
   while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
	   echo"<td>". $row["id"]."</td>";
	   echo"<td>" . $row["text1"]. "</td>";
	   echo"<td> " . $row["text2"]. "</td>";
	   echo"<td>".$row["text3"]."</td>";
	   echo"</tr>";
   echo "</table>";}
} else {
   echo "Пользователи не найдены";
}
mysqli_close($conn);
?>
<div class="uuu">
<form action="" method="POST">
<input type="text" name="text1" placeholder="Ваше имя" pattern="[A-Za-zА-Яа-я]{8,}"required><br>
<p>Выберете категорию, по которой хотите написать отзыв: <select name="oper"><br>
<option name="p" value="Млекопитающие">Млекопитающие</option>
<option name="pp" value="Птицы">Птицы</option>
<option name="ppp" value="Пресмыкающиеся">Пресмыкающиеся</option>
<option name="pppp" value="Земноводные">Земноводные</option>
<option name="ppppp" value="Рыбы">Рыбы</option>
<option name="pppppp" value="Моллюски">Моллюски</option>
<option name="ppppppp" value="Насекомые">Насекомые</option>
<option name="pppppppp" value="Простейшие">Простейшие</option>
</select></p>
<input type="text" name="text2" placeholder="Оставить отзыв" pattern="[A-Za-zА-Яа-я]{6,}"required><br>
<input type="text" name="text3" placeholder="Дополнительно" pattern="[A-Za-zА-Яа-я]{8,}"required><br>
<input type="submit" value="Отправить"><br>
</form>
</div>
</body>
</html>
<?php
$text1=$_POST['text1'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];
 if ($_POST['oper'] =="Млекопитающие") 
 {
     echo "Млекопитающие";
 }
 else if ($_POST['oper']=="Птицы") {
	 echo "Птицы";
 }
 else if ($_POST['oper']=="Пресмыкающиеся") {
	 echo "Пресмыкающиеся";
 }
 else if ($_POST['oper']=="Земноводные") {
	 echo "Земноводные";
 }
 else if ($_POST['oper']=="Рыбы") {
	 echo "Рыбы";
 }
 else if ($_POST['oper']=="Моллюски") {
	 echo "Моллюски";
 }
 else if ($_POST['oper']=="Насекомые") {
	 echo "Насекомые";
 }
 else if ($_POST['oper']=="Простейшие") {
	 echo "Простейшие";
 }
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link1=mysqli_connect($host, $user, $password, $database);
if (!$link1) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql1="INSERT INTO `comments` (`text1`,`text2`,`text3`)
VALUES('$text1','$text2','$text3')";
if (mysqli_query($link1, $sql1)) {
   echo "Успешно создана новая запись";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link1);
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link1);
}
$link1->close();
?>
