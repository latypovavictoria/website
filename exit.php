<?php
setcookie('login', $user['login'], time() - 60*60*2, "/");
 setcookie('admin', $user['admin'], time() - 604800, "/");
 header ('Location:reg.html');
?>
