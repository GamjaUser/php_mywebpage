<?php
session_start();

//DB 연결
$con = mysqli_connect("localhost:8889", "root", "root");
mysqli_select_db($con, "dbphp");
$num = $_POST['num'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$sql = "update board set subject='$subject', content='$content' where num={$num}";
echo"alert('$subject, $content, $num')";
$result = mysqli_query($con, $sql);
echo "<script>
    location.href='main.php#main-board'
    </script>";
?>
