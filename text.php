<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="site.css">
<meta charset="utf-8">
<style>
* {background-color:#F0FFF0;
}
.mmm { border:2px solid #ADD8E6; height:700px; width:200px;
}
li {margin: 11px; padding:15px;
}
.nnn { border:1px solid #6B8E23; width:200px;
}
.fer {color:#32CD32; display:inline; text-align:center;
}
h1 {text-align:center; color:red;
}
.loi {text-align:center;
}
.poi {text-align:center;
}
.oiu {text-align:center;
}
.vvv {text-align:center;
}
.bbb {text-align:center;
}
</style>
</head>
<body>
<div class="nice">
<h2 style="dispay:block; background-color:#90EE90; height:30px; width:1500px; margin:0px,0px,0px; padding:0px,0px,0px; text-align:center">Хотите узнать больше о животных? Тогда Вам сюда!</h2>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<div class="nnn">
<p>Здравствуйте,<?=$_COOKIE['login']?>!<br>Чтобы выйти нажмите <a href="exit.php">здесь</a>.</p>
<p><a href="comments.php">Оставить отзыв</a></p>
</div>
<div class="fer">
<h1 style="color:green; text-align:center">Немного о животных</h1>
<p style="color:brown"><?php
$servername = "localhost"; 
$username = "root";
$password = "Vika_06012001";
$dbname = "animal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}
$sql = "SELECT text FROM text";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
       echo "" . $row["text"]."<br>";
   }
} else {
   echo "0 результат";
}
mysqli_close($conn);
?></p>
</div>
<?php
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link=mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
$sql="SELECT name, pic FROM pic";
$result=mysqli_query($link, $sql);
if ($result)
	$rows="";
while ($rows=$result->fetch_assoc()) {
	echo '<p class="bbb">' .($rows['name']). '</p>';
	echo '<p class="bbb"><img src=\'data:image/jpg;base64,'.base64_encode($rows['pic']).'\' /></p>';
}
?>
<div class="mmm">
<p style="color:#228B22; margin:10px; padding:10px">Животные</p>
<li><a href="mammal1.php">Млекопитающие</a></li>
<li><a href="bird1.php">Птицы</a></li>
<li><a href="reptile1.php">Пресмыкающиеся</a></li>
<li><a href="amfi1.php">Земноводные</a></li>
<li><a href="fish1.php">Рыбы</a></li>
<li><a href="moll1.php">Моллюски</a></li>
<li><a href="insect1.php">Насекомые</a></li>
<li><a href="simple1.php">Простейшие</a></li>
</div>
</div>
<h1>Добавить информацию</h1>
<div class="poi">
<form action="textd.php" method="POST">
<input type="text" name="text" placeholder="Новая информация" pattern="{8,}"required>
<input type="submit" value="Добавить">
</form>
</div>
<div class="poi">
<h1 style>Удаление статьи</h1>
<form action="" method="POST">
<input type="text" name="id" placeholder="Введите id">
<input type="submit" value="Удалить">
</form>
<?php
$id=$_POST['id'];
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="animal";
$link=new mysqli($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
$sql=("DELETE FROM `text` WHERE `id`='$id'");
if (mysqli_query($link, $sql)) {
    //echo "Запись успешно удалена";
} else {
   //echo "Ошибка удаления записи: " . mysqli_error($conn);
}
$link->close();
?>

<div class="oiu">
<h1 style="color: red">Добавить фото</h1>
<form action="ph.php" method="POST" enctype="multipart/form-data">
<input type="file" name="photo" placeholder="Photo">
<input type="text" name="name" placeholder="Название">
<input type="submit" value="Загрузить">
</form>
</div>
<div class="vvv">
<h1 style="red">Удалить фото</h1>
<form action="" method="POST">
<input type="text" name="name" placeholder="Название фото">
<input type="submit" value="Удалить">
</form>
</div>
<?php
$name=$_POST['name'];
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="reg";
$link=new mysqli($host, $user, $password, $database);
$sql="DELETE FROM `pic` WHERE `name`='$name'";
if (mysqli_query($link, $sql)) {
	echo "";
}
$link->close();
?>
<h3 style="background-color:#3CB371; text-align:center">Разработано ИУ4-11Б</h3>
</body>
</html>
