<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
* {background-color:#F0F8FF;
}
.mmm {border:2px solid #ADD8E6; height:250px; width:200px; display:block;
}
h1 {background-color:#008080; text-align:center;
}
.loi {text-align:center;
}
.poi {text-align:center;
}
</style>
</head>
<body>
<h1>Рыбы</h1>
<h1 style="background: url(nice.jpg); height:200px; width:1500px; text-align:left; color:#228B22; padding:0px, 0px, 0px; margin:0px, 0px, 0px">Animals</h1>
<p>Рыбы — самая многочисленная группа позвоночных животных (около  30  тыс. видов). 
Рыбы — постоянные обитатели водной среды. Они населяют почти все водоёмы Земли: от ручьёв до 
океанов. С жизнью в воде связаны многие особенности их строения.</p>
<ol>
<li>Давая общую характеристику рыбам, следует иметь в виду, что между хрящевыми и костными рыбами
 имеются некоторые ключевые отличия. В скелете хрящевых рыб костей нет, весь их скелет состоит 
 из хрящевой ткани. Скелет костных рыб может полностью окостеневать, но у ряда видов наряду с 
 костной тканью сохраняется хрящевая. У костных рыб жаберные щели с жаберными лепестками защищены 
 жаберными крышками. У хрящевых же рыб крышек нет, а жаберные щели часто имеют мешковидную форму.</li>
<li>Плавательный пузырь имеется только у костных рыб и, изменяясь в размерах, помогает им 
находиться в толще воды без мышечных усилий. Хрящевые же рыбы если перестают двигаться, то 
опускаются на дно.</li>
<li>Форма тела рыб обтекаемая. Однако у многих костных рыб тело при этом сплюснуто с боков, а у 
хрящевых оно веретеновидное (у акул) или сплюснуто в спинобрюшном направлении (у скатов).</li>
<li>Челюсти и зубы рыб служат им для захвата и удержания добычи. Однако пища не пережевывается, 
а заглатывается целиком. Переваривание идет в желудке и кишечнике.</li>
<li>У рыб может быть только половое размножение. У костных рыб самки обычно выметывают икру, а 
самцы поливают ее молоками. Таким образом, происходит внешнее оплодотворение. При этом обычно 
количество икринок очень большое, но не из каждой развивается малек, и не каждый малек рыбы 
выживает. Следовательно высокая плодовитость рыб есть приспособление к высокой смертности 
молодняка. У рыб, проявляющих заботу о потомстве, количество икринок не большое. У многих 
хрящевых рыб наблюдается внутреннее оплодотворение и живорождение. При этом также количество 
потомства небольшое.</li>
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
$sql = "SELECT text FROM animal4";
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
<p style="color:#008B8B; text-align:center">Вот некоторые из рыб</p>
<table style="border:2px solid #20B2AA; margin:auto"><tr><td>
<img src="fish1.jpg" width="900"; height="500"></td></tr><tr><td>
<img src="skat.jpg" width="900"; height="500"></td><tr><td>
<img src="shark.jpg" width="900"; height="500"></td></tr>
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
<form action="fishd.php" method="POST">
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
$sql=("DELETE FROM `animal4` WHERE `id`='$id'");
if (mysqli_query($link, $sql)) {
    echo "Запись успешно удалена";
} else {
   echo "Ошибка удаления записи: " . mysqli_error($conn);
}
$link->close();
?>
</body>
</html>
