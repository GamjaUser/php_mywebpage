<?php
$qty = $_POST['qty'];
$price = $_POST['price'];
$t_price = Number_format($qty*$price);
echo "{$price}원 X {$qty}개 = <b style='color:red'>{$t_price}</b>원 입니다.";

?>