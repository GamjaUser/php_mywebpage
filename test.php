<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION['userid']="hong";
    $_SESSION['username']="홍길동";
    $_SESSION['time']=time();

    echo "3개의 세션 변수 등록 완료!!<br>";
    echo $_SESSION['userid']."<br>";
    echo $_SESSION['username']."<br>";
    echo $_SESSION['time']."<br>";
    ?>
    <table border="1">
         <tr>
        <td><?=$username?></td>
    </tr>
    </table>
   
</body>
</html>