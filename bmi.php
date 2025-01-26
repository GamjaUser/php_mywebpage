<?php
$height = $_POST['height'];
$weight = $_POST['weight'];
$result = ($weight / ($height ** 2)) * 10000;
if($result>25)
    $pan = "비만";
elseif($result>23 && $result<=25)
    $pan = "과체중";
elseif($result>18.5 && $result<=23)
    $pan = "정상";
else
    $pan = "저체중";
echo "비만도 결과 {$pan} 입니다.","<br>BMI 지수 ";
printf("%.2f", $result);
?>