<?php
session_start();
$id = $_POST["idd"];
$pw = $_POST["pw"];

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
if(!$pw){
    echo("
    <script>
        window.alert('비밀번호를 입력하세요');
        history.go(-1);
    </script>
    ");
    exit;
}
// echo "<strong>{$id}</strong> 님 환영합니다."
?>
<!-- <table border="1" cellpadding="10" width="800"> -->
<?
// DB 연결
$con = mysqli_connect("localhost:8889", "root", "root"); // 데이터베이스 연결
// DB 선택
mysqli_select_db($con, "dbphp");  // (데이터베이스 연결 값, 데이터베이스 이름)
// 쿼리문 실행
$sql = "select * from member where id='{$id}' and pw='{$pw}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if ($id != $row['id'] || $pw != $row['pw']){
    echo "<script> alert('아이디와 비밀번호가 일치하지 않습니다.');";
    echo "history.back(); </script>";
    exit();
}
else{
    echo "<strong>$row[name]님</strong>이 로그인 되었습니다.";
    // echo "<script>location.href = 'modify.php'</script>";
    $userid = $row['id'];
    $userpw = $row['pw'];
    $username = $row['name']; // 서버로부터 PHP변수에 넣기

    $_SESSION['userid'] = $userid;
    $_SESSION['userid'] = $userid;
    $_SESSION['userid'] = $userid;

    echo "$userid, $userpw, $username";
    // echo "$_SESSION[userid], $_SESSION[userpw], $_SESSION[userid]";

}
// 레코드 갯수
// $num = mysqli_num_rows($result);

// while($row=mysqli_fetch_array($result)){
//     // index 안에 숫자, 그 열의 제목 가능
//     // row행의 열 번호를 하나씩 끌어옴
//     echo("
//         <tr>
//             <td>$row[0]</td>
//             <td>$row[1]</td>
//             <td>$row[2]</td>
//             <td>$row[3]</td>
//         </tr>
//         "
//     );
// }
?>
<br>
<!-- </table> -->

<a href="logout.php">로그아웃</a>

<!-- DB 종료 -->
<?
mysqli_close();

?>