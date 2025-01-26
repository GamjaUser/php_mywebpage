<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche Custom</title>
    <link rel="stylesheet" href="../css/free_porsche.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="headbox">
            <nav id="navbar">
                <ul>
                <li><a href="#" class="upper-bar">Models</a></li>
                <li><a href="#" class="upper-bar">1. Exterior Colors & Wheels</a></li>
                <li><a href="#" class="upper-bar">2. Interior Colors & Seats</a></li>
                <!-- <li><span id="deal" class="upper-bar">Contact a Dealer</span></li> -->
                </ul>
            </nav>
            <div id="deal">
                <div id="dp">
                    <span class="fa-solid fa-location-dot"></span>
                    <p>Contact a Dealer</p>
                </div>
            </div>
        </div>
    </header>
    <div class="m">
        <section class="carimgbox">
            <p>Boxster GTS 4.0</p>
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example" data-slide-to="1"></li>
                  <li data-target="#carousel-example" data-slide-to="2"></li>
                  <li data-target="#carousel-example" data-slide-to="3"></li>
                </ol>
              
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img src="/images/porsche_white_basewheel_blackseat.jpg" width="100%" id="outimg1"></a>
                    <!-- <div class="carousel-caption">
                      <h3>Meow</h3>
                      <p>Just Kitten Around</p>
                    </div> -->
                  </div>
                  <div class="item">
                    <a href="#"><img src="/images/porsche_back_white_basewheel_blackseat.jpg" width="100%" id="outimg2"></a>
                  </div>
                  <div class="item">
                    <a href="#"><img src="/images/porsche_internal_blackseat.jpg" width="100%" id="inimg1"></a>
                  </div>
                  <div class="item">
                    <a href="#"><img src="/images/porsche_seats_blackseat.jpg" width="100%" id="inimg2"></a>
                  </div>
                </div>
              
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
        </section>
        <aside>
            <div id="pricebox">
                <div id="comment">
                    <div class="pricebox-head">
                        <p>Total Price</p>
                    </div>
                    <div class="pricebox-body">
                        <p>Base Price</p>
                        &nbsp;
                        <p>Price for equipment</p>
                    </div>
                </div>
                <div id="rprice">
                    <div class="pricebox-head">
                        <p>135,300,000 KRW</p>
                    </div>
                    <div class="pricebox-body">
                        <p>135,300,000 KRW</p>
                        <p>0 KRW</p>
                    </div>
                </div>
            </div>
            <div class="exteriorStyleBox">
                <div id="exteriorStyleBox-header">
                    <p>Exterior Colors & Wheels</p>
                </div>
                <div class="exteriorStyleBox-body">
                    <div>
                        <p>Standard Colour</p>
                        <div class="car-color">
                            <div id="sc-1" class="carC"></div>
                            <div id="sc-2" class="carC"></div>
                            <div id="sc-3" class="carC"></div>
                            <div id="sc-4" class="carC"></div>
                        </div>
                    </div>
                    
                    <div class="wheels-box">
                        <p>Wheels</p> 
                        <div class="wheels">
                            <img src="/images/wheel_base.jpg" alt="" id="wd-1" class="wheelsT">
                            <img src="/images/wheel_carrera.jpg" alt="" id="wd-2" class="wheelsT">
                            <img src="/images/wheel_turbo.jpg" alt="" id="wd-3" class="wheelsT">
                        </div>
                    </div>

                    <div class="leather-box">
                        <p>Leather Interior</p>
                        <div class="leather-color">
                            <div id="lc-1" class="seatC"></div>
                            <div id="lc-2" class="seatC"></div>
                            <div id="lc-3" class="seatC"></div>
                            <div id="lc-4" class="seatC"></div>
                        </div>
                    </div>
                    <div class="result-show">
                        <a href="/car_custom_result.php" id="ready-button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Are You Ready?
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</body>
<script src="/js/free_porsche.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>