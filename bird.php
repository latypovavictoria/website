<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#FFF8DC;
}
h1 { background-color:#F4A460; text-align: center;
}
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
.nnn {text-align:left;
}
.ppp {text-align:center;
}
h2 { color:#D2691E; text-align:center;
}
h3 {text-align:center; background-color:#3CB371;
}
.loi {text-align:center;
}
.poi {text-align:center;
}
</style>
</head>
<body>
<h1>Птицы</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>Классы птиц и млекопитающих, являющиеся вершиной эволюции позвоночных,
возникли независимо друг от друга. 
Уже в триасе от зверозубых ящеров отделились 
первые примитивные млекопитающие. В конце триаса - начале юры появились 
летающие ящеры. Птицеящеры (археоптериксы) дали начало птицам.
<li>Первые млекопитающие и первые птицы заселяли не освоенные пресмыкающимися участки
 земли, что способствовало появлению у них приспособлений к более разнообразным 
 экологическим условиям. А наличие таких конкурентов, как гигантские ящеры, 
 способствовало совершенствованию нервной системы, органов чувств и поведения
</li>
<li>Изменение условий жизни на Земле - наступившее в конце мезозоя похолодание -
выявило преимущества теплокровных животных - птиц и млекопитающих, которые стали 
господствовать в разных средах обитания - на суше, в воде, в воздухе. 
Одновременное появление теплокровности у этих классов можно рассматривать как 
признак конвергенции, возникший в сходных условиях среды</li>
<li>Кайнозойская эра - эра господства птиц, млекопитающих, насекомых и покрытосеменных 
растений, которые не только связаны в цепи питания, но и взаимно определяют друг для 
друга условия жизни, размножения, распространения. В связи с освоением птицами 
воздушной среды у них выработался ряд приспособительных к полету признаков - 
идиоадаптаций
</li>
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
$sql = "SELECT text FROM animal1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
       echo "" . $row["text"]."<br>";
   }
} else {
   echo "0 результат";
}
mysqli_close($conn);
?>
<p style="color:#F4A460; text-align:center">Вот некоторые из птиц</p>
<table style="margin:auto"><tr><td>
<img src="parrot.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="raven.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="sparrow.jpg" width="900"; height="500"></td></tr>
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
<form action="birdd.php" method="POST">
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
</div>
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
$sql=("DELETE FROM `animal1` WHERE `id`='$id'");
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
