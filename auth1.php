<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="auth.css">
<meta charset="utf-8">
</head>
<body>
<?php 
if($_COOKIE['user']==''): ?>
<h1>Авторизация</h1>
<form action="auth.php" method="post">
<p>Ваш login: <input type="login" name="login"><br></p>
<p>Ваш пароль: <input type="password" name="password"><br></p>
<input type="submit" name="submit">
</form>
<?php else: ?>
<p>Hello <?php=$_COOKIE['user']?>.Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
<?php endif; ?>
</body>
</html>
