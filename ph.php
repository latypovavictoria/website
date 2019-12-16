<?php
$name=$_POST['name'];
$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
$servername = "localhost";
$username = "root";
$password = "Vika_06012001";
$dbname = "reg";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
   die("Ошибка подключения: " . mysqli_connect_error());
}
$sql="INSERT INTO `pic` (`name`,`pic`)
VALUES('$name','$photo')";
if (mysqli_query($conn, $sql)) {
   echo "Успешно создана новая запись";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
  }
  $conn->close();
  header ('Location:text.php');
?>
