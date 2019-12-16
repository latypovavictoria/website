
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#F8F8FF;
}
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
h1 {background-color:#87CEFA; text-align:center;
}
.loi {text-align:center;
}
.poi {text-align:center;
}
</style>
</head>
<body>
<h1>Моллюски</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>Моллюски (или Мягкотелые) — один из самых крупных Типов животных. Известно свыше  130 
тысяч видов моллюсков. Моллюски обитают в морях, пресных водах, на суше. Некоторые паразитируют 
на других животных.</p>
<ol>
<li>Пищеварительная система зависит от типа питания моллюсков.
Ротовая полость переходит в глотку, а затем — в пищевод, который ведёт в желудок и кишечник. 
В него впадают протоки пищеварительной железы. Непереваренные остатки пищи выбрасываются через 
анальное отверстие.</li>
<li>Дыхание у моллюсков, живущих в воде, осуществляется жабрами, а у наземных — с помощью лёгкого.
 Некоторые водные моллюски (например, прудовики) также дышат лёгкими, периодически поднимаясь к 
 поверхности воды, чтобы вдохнуть.</li>
<li>В кровеносную систему входят сердце (орган, обеспечивающий движение крови по сосудам и 
полостям тела) и сосуды. Сердце обычно состоит из трёх камер: одного желудочка и двух предсердий 
(у Брюхоногих — две камеры: предсердие и желудочек).
Моллюски имеют незамкнутую кровеносную систему (за исключением головоногих). Это означает, что 
кровь течёт не только по кровеносным сосудам, но и по специальным полостям между органами, а 
затем кровь вновь собирается в сосуды и поступает в жабры или лёгкие для обогащения кислородом.</li>
<li>Нервная система различается по степени сложности и наиболее развита у Головоногих моллюсков.
Она состоит из нескольких пар хорошо развитых нервных узлов, расположенных в разных частях тела,
 и отходящих от них нервов. Такая нервная система называется системой разбросанно-узлового типа.</li>
<li>Видимо, Моллюски произошли от общих с Кольчатыми червями предков, у которых была слабо развита
 вторичная полость тела, имелись ресничные покровы и ещё не было расчленения тела на сегменты.
В эмбриональном (зародышевом) развитии Моллюсков можно наблюдать много общего с развитием 
Многощетинковых Кольчатых червей. Это указывает на древние исторические (эволюционные) связи 
между ними.
 Типичная личинка морских моллюсков (парусник) очень похожа на личинку кольчатых червей, 
 несущую большие лопасти, усаженные ресничками.
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
$sql = "SELECT text FROM animal5";
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
<p style="color:#00BFFF; text-align:center">Вот некоторые из моллюсков</p>
<table style="border: 2px solid #00BFFF; margin:auto"><tr><td>
<img src="moll1.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="moll2.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="snail.jpg" width="900"; height="500"></td></tr>
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
<h1>Дополнение статьи</h1>
<div class="loi">
<form action="molld.php" method="POST">
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
echo 'Connected successfully';
$sql=("DELETE FROM `animal5` WHERE `id`='$id'");
if (mysqli_query($link, $sql)) {
    //echo "Запись успешно удалена";
} else {
   echo "Ошибка удаления записи: " . mysqli_error($conn);
}
$link->close();
?>
</body>
</html>
