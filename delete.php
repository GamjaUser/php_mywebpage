<?php
session_start();

//DB 연결
$con = mysqli_connect("localhost:8889", "root", "root");
mysqli_select_db($con, "dbphp");
$num = $_GET['num'];
$sql = "delete from board where num={$num};";
$result = mysqli_query($con, $sql);

mysqli_close($con);

echo "<script> location.href='main.php#main-board'; </script>";
?>