<?php
session_start();
//DB 연결
$con = mysqli_connect("localhost:8889", "root", "root");
mysqli_select_db($con, "dbphp");
$num = $_GET['num'];
$sql = "select * from board where num={$num};";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);    // 하나의 레코드를 가져오기

$num = $row['num'];
$subject = $row['subject'];
$content = $row['content'];
$regist = $row['regist'];
$hit = $row['hit'];

$hit = $hit + 1;

$sql = "update board set hit=$hit where num=$num";
$result = mysqli_query($con, $sql);

$content = htmlspecialchars($content);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h2>목록 보기</h2>
    <table class="table table-striped">
        <tr>
            <td>번호</td>
            <td><?=$num?></td>
        </tr>
        <tr>
            <td>제목</td>
            <td><?=$subject?></td>
        </tr>
        <tr>
            <td>내용</td>
            <td><?=$content?></td>
        </tr>
        <tr>
            <td>작성일</td>
            <td><?=$regist?></td>
        </tr>
        <tr>
            <td>조회수</td>
            <td><?=$hit?></td>
        </tr>
    </table>
    <a href="modify.php?num=<?=$row['num']?>"><input type="button" value="수정" class="btn btn-success"></a>
    <a href="main.php#main-board"><input type="button" value="목록" class="btn btn-info"></a>
    <a href="delete.php?num=<?=$row['num']?>"><input type="button" value="삭제" class="btn btn-info"></a>
    <a href="write_form.php"><input type="button" value="글쓰기" class="btn btn-info"></a>
</body>
</html>