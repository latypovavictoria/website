
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#F0FFF0;
}
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
h1 {background-color:#6B8E23; text-align:center;
}
.loi {text-align:center;
}
.poi {text-align:center;
}
</style>
</head>
<body>
<h1>Пресмыкающиеся</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>Класс Пресмыкающиеся, или Рептилии, насчитывает около  6  тыс. видов. Это настоящие наземные 
животные, которые в отличие от Земноводных не имеют тесной связи с водой</p>
<li>Тело пресмыкающихся разделено на отделы — голову, туловище, хвост и две пары конечностей. 
Конечности располагаются по бокам туловища и прижимаются к земле (как бы смыкаются с поверхностью)
, поэтому этот класс получил такое название — пресмыкающиеся.</li>
<li>Кожа сухая, не содержит желез. Кожные покровы образованы ороговевшим эпидермисом 
(роговыми чешуйками, или щитками). Роговые чешуйки предохраняют животное от испарения влаги и 
иссушения.</li>
<li>Развитие и расцвет рептилий связаны с изменением климатических условий: в мезозойской эре он 
становится более сухим, уменьшается количество заболоченных площадей.
В новых условиях преимущество получили те земноводные, которые не имели тесной связи с водой. 
От таких древних земноводных и произошли первые пресмыкающиеся.</li>
</ol>
<?php
$servername = "localhost"; 
$username = "root";
$password = "Vika_06012001";
$dbname = "animal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}
$sql = "SELECT text FROM animal2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
       echo "" . $row["text"]."<br>";
   }
} else {
   //echo "0 результат";
}
mysqli_close($conn);
?>
<p style="color:#6B8E23; text-align:center">Вот некоторые из пресмыкающихся</p>
<table style="border:2px solid #808000; margin:auto"><tr><td>
<img src="lizard.jpg" width="500"; height="500"></td>
<td><img src="croc.jpg" width="500"; height="500"></td><tr><td>
<img src="snake.jpg" width="500"; height="500"></td><td>
<img src="tort.jpg" width="500"; height="500"><td></tr>
</table>
<div class="mmm">
<p style="color:#228B22; margin:10px; padding:10px">Животные</p>
<ul>
<li><a href="mammal1.php">Млекопитающие</a></li>
<li><a href="bird1.php">Птицы</a></li>
<li><a href="reptile1.php">Пресмыкающиеся</a></li>
<li><a href="amfi1.php">Земноводные</a></li>
<li><a href="fish1.php">Рыбы</a></li>
<li><a href="moll1.php">Моллюски</a></li>
<li><a href="insect1.php">Насекомые</a></li>
<li><a href="simple1.php">Простейшие</a></li>
<li><a style="color:#228B22" href="site.php">Веpнуться на главную</a></li>
</ul>
</div>
<h1 style="color:red">Дополнение статьи</h1>
<div class="loi">
<form action="reptiled.php" method="POST">
<input type="text" name="text" placeholder="Новая информация" pattern="{8,}"required>
<input type="submit" value="Добавить">
</form>
</div>
  <div class="poi">
<h1 style="color:red">Удаление статьи</h1>
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
$sql=("DELETE FROM `animal2` WHERE `id`='$id'");
if (mysqli_query($link, $sql)) {
    //echo "Запись успешно удалена";
} else {
   //echo "Ошибка удаления записи: " . mysqli_error($conn);
}
$link->close();
?>
<h3 style="background-color:#3CB371; text-align:center">Разработано ИУ4-11Б</h3>
</body>
</html>
