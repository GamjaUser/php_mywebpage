<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/board.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>자유게시판</h2>
    <form name="" method="post" action="main_insert.php">
    <table>
        <tr>
            <td class="col1">제목</td>
            <td class="col2"><input type="text" name="subject" id="subject"></td>
        </tr>
        <tr>
            <td class="col1">내용</td>
            <td class="col2">
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" value="저장" class="btn btn-info">
    <a href="main.php#main-board"><input type="button" value="목록" class="btn btn-info"></a>
    </form>
</body>
</html>