<?php
// phpqrcode 라이브러리를 포함합니다.
include './phpqrcode/qrlib.php';

// QR 코드에 표시할 URL
$url = 'http://localhost:8888/aws/check.php';

// QR 코드를 생성합니다.
QRcode::png($url);
?>