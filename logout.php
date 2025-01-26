<?php
session_start();    // 세션 시작

unset($_SESSION['userid']);
unset($_SESSION['userpw']);
unset($_SESSION['username']);

// 세션 삭제
// session_destroy();
echo "로그아웃되었습니다.<br>
<script>location.href='index.html';</script>";
?>