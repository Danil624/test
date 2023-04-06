<?php
$conn = new mysqli("localhost", "qwe", "232001","test");

if ($conn === false) {
    die("Ошибка: " . mysqli_connect_error());
  } 
 
?>