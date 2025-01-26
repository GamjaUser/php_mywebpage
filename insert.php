<?php
// 데이터를 서버로 request
$subject = $_POST['subject'];
$content = $_POST['content'];

$regist = date("Y-m-d");
// DB 연결(1)
$con = mysqli_connect('localhost:8889', 'root', 'root');
if(!$con){
    echo "연결오류";
}
else{
    mysqli_select_db($con, 'dbphp');
    $sql = "insert into board (subject, content, regist, hit) values('$subject', '$content', '$regist', 1)";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "<script>
    location.href='main.php#main-board'
    </script>";
}
?>