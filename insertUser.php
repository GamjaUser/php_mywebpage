<?php
session_start();
// 데이터를 서버로 request
$name = $_POST['nname'];
$id = $_POST['nid'];
$pw = $_POST['npw'];

// DB 연결(1)
$con = mysqli_connect('localhost:8889', 'root', 'root');
if(!$con){
    echo "Connection Error";
}
else{
    mysqli_select_db($con, 'dbphp');
    $sql = "insert into member (id, pw, name) values('$id', '$pw', '$name')";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "<script>
    location.href='main.php#target'
    </script>";
}
?>