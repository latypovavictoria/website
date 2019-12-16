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
.loi {text-align:center;
}
.poi {text-align:center;
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
<li><a style="color:#228B22" href="site.php">Веpнуться на главную</a></li>
</ul>
</div>
<h1 style="color:red; text-align:center">Дополнение статьи</h1>
<div class="loi">
<form action="" method="POST">
<input type="text" name="text" placeholder="Новая информация" pattern="{8,}"required>
<input type="submit" value="Добавить">
</form>
</div>
<?php
$text=$_POST['text'];
$host="localhost";
$user="root";
$password="Vika_06012001";
$database="animal";
$link=mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';

$sql="INSERT INTO `animal` (`text`)
VALUES('$text')";
if (mysqli_query($link, $sql)) {
   //echo "Успешно создана новая запись";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
  }
  ?>
<div class="poi">
<h1 style="color:red">Удаление статьи</h1>
<form action="mammald.php" method="POST">
<input type="text" name="id" placeholder="Введите id">
<input type="submit" value="Удалить">
</form>
</div>
<div class="oiu">
<h1 style="color: red">Добавить фото</h1>
<form action="ph.php" method="POST" enctype="multipart/form-data">
<input type="file" name="photo" placeholder="Photo">
<input type="text" name="name" placeholder="Название">
<input type="submit" value="Загрузить">
</form>
</div>
<h3 style="background-color:#3CB371; text-align:center">Разработано ИУ4-11Б</h3>
</body>
</html>
