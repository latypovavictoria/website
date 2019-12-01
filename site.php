<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="site.css">
</head>
<body>
<h1>Хотите узнать больше о животных? Тогда Вам сюда!</h1>
<?php 
error_reporting(0);
if ($_COOKIE['user']=='');
?>
<p><a href="reg.html">Зарегистрируйтесь, чтобы оставлять отзывы или комментарии</a></p><br>
<p><a href="auth.html">Уже зарегистрированы? Войдите</a><p><br>
<table style="table border:4px; height:900px; width:1200px;">
<tr><td><h2>Разделы</h2></td>
<td><h2>Виды</h2></td></tr>
<tr>
<td style="background-color:#FF8C00">Млекопитающие</td>
<td style="background-color:#FF8C00"><a href="mammal.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#F0E68C">Птицы</td>
<td style="background-color:#F0E68C"><a href="bird.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#808000">Пресмыкающиеся</td>
<td style="background-color:#808000"><a href="reptile.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#006400">Земноводные</td>
<td style="background-color:#006400"><a href="amfi.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#20B2AA">Рыбы</td>
<td style="background-color:#20B2AA"><a href="fish.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#1E90FF">Моллюски</td>
<td style="background-color:#1E90FF"><a href="moll.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#8B4513">Насекомые</td>
<td style="background-color:#8B4513"><a href="insect.html">Перейти</a></td>
</tr>
<tr>
<td style="background-color:#FFF0F5">Простейшие</td>
<td style="background-color:#FFF0F5"><a href="simple.html">Перейти</a></td>
</tr>
</table>
<h3>Разработано ИУ4-11Б</h3>
</body>
</html>

