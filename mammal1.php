<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#FFF8DC;
}
h1 { background-color:#FFE4C4; text-align: center;
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
</style>
</head>
<body>
<h1>Млекопитающие</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<h2>Немного о млекопитающих</h2>
<div class="nnn">
<p>Млекопитающие — наиболее высокоорганизованный класс позвоночных животных. 
Основные прогрессивные черты класса млекопитающих следующие:</p>
<ol>
<li>Высокое развитие центральной нервной системы, 
в которой в первую очередь обращает внимание серая кора полушарий большого мозга — центр
ей нервной деятельности. 
В связи с этим приспособительные реакции млекопитающих на условия среды весьма сложны и 
совершенны.</li>
<li>Живорождение и выкармливание детенышей продуктом материнского организма — 
молоком. 
Все это позволяет млекопитающим размножаться при крайне разнообразных условиях жизни.</li>
<li>Высокоразвитая способность к теплорегуляции, 
обусловившая относительно постоянную температуру тела. 
Это вызвано, с одной стороны, регуляцией теплообразования 
(путем стимулирования окислительных процессов — так называемая химическая теплорегуляция
), с другой — регулированием отдачи тепла путем изменения характера 
кожного кровоснабжения и силы испарения воды при дыхании и 
потоотделении (так называемая физическая теплорегуляция).
Огромное значение в регулировании отдачи тепла имеет шерстный покров, а у некоторых и 
подкожный жировой слой.
Эти особенности, равно как и ряд других черт организации, 
обусловили возможность широкого распространения млекопитающих в самых 
разно-образных условиях. Географически они распространены почти повсеместно, 
за исключением Антарктического материка. Еще более важно учесть, что млекопитающие 
заселяют самые разнообразные жизненные среды. Помимо многочисленных наземных видов, 
есть виды летающие, полуводные, водные и, наконец, виды, заселяющие толщу почвы. 
Общее число видов современных млекопитающих равно примерно 4 тыс.</li>
</ol>
</div>
<?php
$servername = "localhost"; 
$username = "root";
$password = "Vika_06012001";
$dbname = "animal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}
$sql = "SELECT text FROM animal";
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
<div class="ppp">
<p style="color:#D2691E; text-align:center">Вот некоторые из млекопитающих</p>
<table style="border:3px solid #D2691E; margin:auto">
<tr>
<td><img src="giraffe.jpg" width="500"; height="500"></td>
<td><img src="tiger.jpg" width="500"; height="500"></td>
<tr><td><img src="whale.jpg" width="500"; height="500"></td>
<td><img src="zebra.jpg" width="500"; height="500"></td>
</tr></table>
</div>
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
<li><a style="color:green" href="site.php">Вернуться на главную</a></li>
</ul>
</div>
<h3>Разработано ИУ4-11Б</h3>
</body>
</html>
