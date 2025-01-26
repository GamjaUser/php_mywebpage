<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>▶ 게시판 목록 보기</h3>
    <table border="1" width="600">
        <tr bgcolor="#ccc">
            <td>번호</td>
            <td>제목</td>
            <td>글쓴이</td>
            <td>날짜</td>
        </tr>
        <?
        $num = 1;
        $name = "권감자";
        $date = "2023-11-02";
        for($i=1; $i<=10; $i++){
            $title="게시판 제목".$num;
            echo("
                <tr>
                    <td>$num</td>
                    <td>$title</td>
                    <td>$name</td>
                    <td>$date</td>
                </tr>
                "
            );
            $num++;
        }
        ?>
    </table>
</body>
</html>