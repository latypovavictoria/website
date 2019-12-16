<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
h1 {background-color:#32CD32; text-align:center;
}
</style>
</head>
<body>
<h1>Земноводные</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>Земноводные (они же амфибии) - первые появившиеся в процессе эволюции наземные позвоночные. 
При этом они все еще сохраняют тесную связь с водной средой, обычно живя в ней на личиночной 
стадии. Типичные представители земноводных - лягушки, жабы, тритоны, саламандры. Наиболее 
разнообразны в тропических лесах, так как там тепло и сыро. Среди амфибий нет морских видов.</p>
<li>скелет разделён на отчётливо выраженные отделы, появились шейный и крестцовый отделы 
позвоночника.</li>
<li>В связи с переходом к жизни на суше у них сформировались две пары пятипалых конечностей 
рычажного типа.</li>
<li>Головной мозг состоит из ствола и двух полушарий. Органы зрения, слуха и обоняния 
приспособлены к наземному образу жизни (в дополнение к внутреннему появилось среднее ухо).</li>
<li>У земноводных возник второй — лёгочный круг кровообращения и трёхкамерное сердце, 
состоящее из двух предсердий и одного желудочка, в котором находится частично смешанная кровь.</li>
<li>Органы дыхания представлены лёгкими и кожей (у взрослых животных), у личинок сохраняется 
жаберное дыхание (как у рыб).</li>
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
<p style="color:#32CD32; text-align:center">Вот некоторые из земноводных</p>
<table style="border: 3px solid #32CD32; margin:auto"><tr><td>
<img src="frog.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="frog1.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="worm.jpg" width="900"; height="500"></td></tr>
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
