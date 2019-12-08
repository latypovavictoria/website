<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="fish.css">
</head>
<body>
<h1>Рыбы</h1>
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
<p1>Вот некоторые из рыб</p1>
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
<img src="fish1.jpg" width="200"; height="200"><br>
<img src="skat.jpg" width="200"; height="200"><br>
<img src="shark.jpg" width="200"; height="200"><br>
<h3>Разработано ИУ4-11Б</h3>
</body>
</html>
