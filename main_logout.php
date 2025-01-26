<?php
session_start();    // 세션 시작

unset($_SESSION['userid']);
unset($_SESSION['userpw']);
unset($_SESSION['username']);

$_SESSION['loginN'] = 'Sign In';
$_SESSION['loginO'] = ' ';

// 세션 삭제
// session_destroy();
echo "<script>alert('Signed out successfully.');</script>";
echo "<script>location.href='main.php';</script>";

?>