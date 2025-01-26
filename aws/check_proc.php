<?php
session_start();
$id = $_POST["id"];

if(!$id){
    // history.go(-1) : 바로전으로 돌아감
    echo("
    <script>
        window.alert('아이디를 입력하세요');
        history.go(-1);
    </script>
    ");
    exit;
}
echo "<script>alert('{$id}');</script>"
// echo "<strong>{$id}</strong> 님 환영합니다."
?>
<!-- <table border="1" cellpadding="10" width="800"> -->
<?
// DB 연결
$con = mysqli_connect("localhost:8889", "root", "root"); // 데이터베이스 연결
// DB 선택
mysqli_select_db($con, "students");  // (데이터베이스 연결 값, 데이터베이스 이름)
// 쿼리문 실행
$sql = "select * from member where studentId={$id}";
// echo "<script>alert('{$sql}');</script>"
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

// echo "<script>alert('{$row['studentId']}');</script>"

if ($id != $row['studentId']){
    echo "<script> alert('학번을 확인해주세요.');";
    echo "history.back(); </script>";
    exit();
}
else{
    // echo "출석완료!";
    echo $row['studentName'] . "님 출석 완료!";
    $sql = "insert into attlist(studentId) values('$id')";
    $result = mysqli_query($con, $sql);
}

?>
<br>
<!-- </table> -->

<!-- DB 종료 -->
<?
mysqli_close();

?>