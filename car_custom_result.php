<?php
// set_css.php 파일

if(isset($_GET['carColor']) && isset($_GET['carWheel']) && isset($_GET['carSeat'])) {
    $carColor = $_GET['carColor'];
    $carWheel = $_GET['carWheel'];
    $carSeat = $_GET['carSeat'];


    // CSS를 출력하여 동적으로 생성합니다.
    header("Content-type: /css/car_custom_result.css");  //text/css
    echo "
        .card {
            background-image: url('/images/puppy.png');
        }
    ";
}
//background-image: url('/images/porschepng/porsche_{$carColor}_{$carWheel}_{$carSeat}.png');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/car_custom_result.css">
    <link rel="stylesheet" href="/css/bgi.css">
</head>
<style>
    <?php echo $dynamicCss; ?>
</style>
<body>
    <canvas id="birthday"></canvas>
        <div class="abso" id="tt">Your Customized Car!</div>
        <div class="abso" id="tf">
            <div class="card">
                    <p>Buy Me Now!</p>
                </div>
        </div>
        <div class="abso" id="info">
            <p>▲ If you want to buy it? Hover your mouth over the image!</p>
            <h1>Hello</h1>
        </div>   
    
    
   
      <canvas id="birthday">
        </canvas>
        
</body>
<script src="/js/bgi.js"></script>
<script src="/js/car_custom_result.js"></script>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
</html>