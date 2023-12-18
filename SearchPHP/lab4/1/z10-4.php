<?php
function connect($servername = "localhost", $username = "root", $dbname = "sample")
{
  $conn = mysqli_connect($servername, $username, 20205, $dbname);
  if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
  }
  return $conn;
}
