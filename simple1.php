<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#FFFAFA;
}
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
h1 {background-color:#D8BFD8; text-align:center;
}
</style>
</head>
<body>
<h1>Простейшие</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>Насчитывается около  70  тыс. видов одноклеточных животных (Простейших). 
Их тело состоит из одной клетки, которая осуществляет все жизненно важные функции, присущие 
целостному организму: движение, питание, дыхание, выделение и т. д.</p>
<ol>
<li>Форма и размер клеток простейших разнообразны. Рассмотреть их можно только с помощью 
увеличительных приборов. Размеры простейших в среднем  0,1 – 0,5  мм (бывают особи около  0,01  
мм, но встречаются и более крупные организмы размером в несколько миллиметров). Встречаются и 
колониальные формы простейших. Одни простейшие не имеют постоянной формы тела, у других она 
относительно постоянна.</li>
<li>Обитают одноклеточные животные преимущественно в жидкой среде — в морской и пресной воде, 
влажной почве, в других организмах. При неблагоприятных условиях 
(высыхании водоёмов, повышении и понижении температуры) простейшие могут образовывать плотную 
защитную оболочку, превращаясь в цисту</li>
<li>Одноклеточные животные питаются готовыми органическими веществами (бактериями, одноклеточными 
водорослями и другими одноклеточными организмами). Такой тип питания называется гетеротрофным.
 </li>
<li>Для одноклеточных, помимо гетеротрофного типа питания, также присущ миксотрофный тип. Формы с 
таким типом питания на свету способны к фотосинтезу — созданию органических веществ из 
неорганических (автотрофный тип питания), а в темноте переходят к гетеротрофному типу питания.</li>
<li>Простейшим свойственна раздражимость. Реакции простейших проявляются в виде движения по 
направлению к источнику раздражения либо в противоположную сторону. Такие реакции называют 
таксисами.</li>
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
$sql = "SELECT text FROM animal7";
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
<p style="color:#DDA0DD; text-align:center">Вот некоторые из простейших</p>
<table style="border:3px solid #DDA0DD; margin:auto"><tr><td>
<img src="s1.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="s2.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="s3.jpg" width="900"; height="500"></td></tr>
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
<h3 style="background-color:#3CB371; text-align:center">Разработано ИУ4-11Б</h3>
</body>
</html>
