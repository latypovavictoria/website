<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#FFEBCD;
}
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
h1 {background-color:#DEB887; text-align:center;
}
.loi {text-align:center;
}
.poi {text-align:center;
}
</style>
</head>
<body>
<h1>Насекомые</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>К этому классу относятся наиболее высокоорганизованные членистоногие. Известно по разным данным
 2-4 млн видов. Большинство насекомых обитает на суше, некоторые — в пресных водоемах. 
 Большинство летает, имея одну или две пары крыльев. Всё насекомые дышат трахеями.</p><ol>
<li>Тело насекомых состоит из головы, груди и брюшка.На голове расположена пара членистых 
различных по .форме усиков (сяжек), простые или сложные глаза и подвижные ротовые придатки. 
В зависимости от ротового аппарата насекомых делят на две группы: грызущие (мандибулярные) и 
сосущие (хоботкбвые)!</li>
<li>Грудной отдел включает три сегмента: переднегрудь, среднегрудь заднегрудь. 
Две пары крыльев насекомых расположены соответственно на средне- и, заднегруди. Число брюшных 
сегментов варьирует от З до 11. На сеегментах расположены, дыхальца - отверстия, через которые 
воздух попадает в трахеи. Дыхальца могут открываться и закрываться, регулируя поступление воздуха 
в трахеи.</li>
<li>Пищеварительный тракт включает рот, глотку, пищевод, зоб, жевательный желудок и кишку.
Кровь (гемолимфа) свободно циркулирует в полости тела, омывая ткани и органы. Сердце представляет 
робой трубку со слепо замкнутым задним концом и открытым передним. На боковых поверхностях сердца 
имеются Парные отверстия. Выделение Продуктов метаболизма (в основном, мочевой кислоты) 
осуществляется через мальлизиевы сосуды. Это слепые выросты на границе средней и задней кишки. 
В задней кишке - мочевая кислота смешивается с непереваренной пищей и выбрасывается через анальное
 отверстие.</li>
<li>Насекомые раздельнополы. Органы размножения самки представлены парными яичниками и тянущимися 
по бокам яйцеводами, которые сливаются в один проток. У самок есть семяприемники. 
У самцов имеются парные семенники и семяпроводы. Оплодотворение у насекомых внутреннее.</li>
<li>Для многих насекомых характерно развитие с метаморфозом. Встречаются две формы этого процесса.
 У примитивных насекомых (тараканов, кузнечиков и др.) имеет место неполное превращение. 
 Из яйца вылупляется личинка, во многом похожая на взрослый организм. Личинки (нимфы) обитают там
 же, где и взрослые насекомые (имаго), и питаются той же пищей. От взрослых насекомых они 
 отличаются отсутствием крыльев и половой системы.</li>
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
$sql = "SELECT text FROM animal6";
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
<p style="color:#CD853F; text-align:center">Вот некоторые из насекомых</p>
<table style="border:2px solid #CD853F; margin:auto"><tr><td>
<img src="i1.jpg" width="500"; height="500"></td><td>
<img src="i2.jpg" width="500"; height="500"></td></tr><tr><td>
<img src="i3.jpg" width="500"; height="500"></td><td>
<img src="i4.jpg" width="500"; height="500"></td></tr>
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
<form action="insectd.php" method="POST">
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
$sql=("DELETE FROM `animal6` WHERE `id`='$id'");
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
