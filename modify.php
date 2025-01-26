<?php
session_start();

//DB 연결
$con = mysqli_connect("localhost:8889", "root", "root");
mysqli_select_db($con, "dbphp");
$num = $_GET['num'];
$sql = "select * from board where num={$num};";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

// 읽어오기
$subject = $row['subject'];
$content = $row['content'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>데이터 수정</h2>
    <form action="modifysave.php?num=<?=$num?>" method="post">
        <table border="1">  
            <tr>
                <td>번호</td>
                <td><input type="hidden" value="<?=$num?>" name="num"><?=$num?></td>
            </tr>
            <tr>
                <td>제목</td>
                <td><input type="text" value="<?=$subject?>" name="subject"></td>
            </tr>
            <tr>
                <td>내용</td>
                <td><input type="text" value="<?=$content?>" name="content"></td>
            </tr>
        </table>
        <input type="submit" value="저장" class="btn btn-info">
    </form>
    <a href="main.php#main-board"><input type="button" value="목록" class="btn btn-info"></a>
</body>
</html>