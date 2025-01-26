<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문서 제목</title>
    <style>
        table {
            border-collapse: collapse;
            width: 800px;
            margin: auto; /* 테이블을 페이지 중앙에 위치시킵니다. */
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center; /* 셀 내의 텍스트를 가운데 정렬합니다. */
        }
    </style>
</head>
<body>
<?php
// 데이터베이스 연결
$con = mysqli_connect("localhost:8889", "root", "root"); // 데이터베이스에 연결합니다.
if (!$con) {
    die("연결 실패: " . mysqli_connect_error());
}

// 데이터베이스 선택
mysqli_select_db($con, "students");  // (데이터베이스 연결, 데이터베이스 이름)

// 쿼리 실행
$sql = "SELECT m.studentId, m.studentName, a.attTime FROM member m LEFT JOIN attlist a ON m.studentId = a.studentId ORDER BY m.studentName;";
$result = mysqli_query($con, $sql);

if ($result && $result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>학생 ID</th><th>이름</th><th>출석 상태</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["studentId"]. "</td>";
        echo "<td>" . $row["studentName"]. "</td>";

        if (is_null($row["attTime"])) {
            echo "<td>미출석</td>";
        } else {
            $attTime = strtotime($row["attTime"]);
            $thresholdTime = strtotime("10:00:00");
            if ($attTime > $thresholdTime) {
                echo "<td>지각 (" . $row["attTime"] . ")</td>";
            } else {
                echo "<td>출석 (" . $row["attTime"] . ")</td>";
            }
        }

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<table><tr><td colspan='3'>데이터가 없습니다.</td></tr></table>";
}

// 데이터베이스 연결 종료
mysqli_close($con);
?>
</body>
</html>
