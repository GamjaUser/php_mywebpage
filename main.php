<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- <link rel="stylesheet" href="https://dl.dropboxusercontent.com/u/69747888/MoGo%20carousel/font-awesome.min.css"> -->
    
    
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="/css/main_login_form.css">
    <link rel="stylesheet" href="/css/main_board.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/backgroundimg.css">
    <link rel="stylesheet" href="../css/main.css">
    
</head>
<body>
  <header class="main-header">
    <div class="header-wrapper">
      <div class="main-logo"><a href="#section-1" style="color:white;">KSB</a></div>
      <nav>
        <ul class="main-menu">
          <li><a href="#">About</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#" id="porsche-bar"><label for="banner2">Porsche</label></a></li>
          <li><a href="#main-board">Free Board</a></li>
          <li><a href="#"><span class="fa-regular fa-bell"></span></a></li>
          <li>
            <a href="#target" id="loginName">
              <? if($_SESSION['loginN']==null){echo "Sign In";}else{echo($_SESSION['loginN']);} ?>
            </a>
            &nbsp;&nbsp;
            <span class="fa-regular fa-circle-user"></span>
            &emsp;&emsp;&emsp;
            <a href="main_logout.php">
              <? echo($_SESSION['loginO']); ?>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <!-- <input type="radio" id="banner4" class="sec-1-input" name="banner"> -->
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Main Page</h2>
            <h1>Welcome<br>to KSB</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#target"><? if($_SESSION['loginN']==null){echo "Sign In";}else{echo($_SESSION['loginN']);}?></a></div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Free Page</h2>
            <!-- <h1>Car Brand<br>Porsche</h1> -->
            <img src="/images/porschelogo.png" alt="" width="140px" height="170px">
            <h3>Porsche</h3>
            <div class="line"></div>
            <div class="learn-more-button"><a href="http://127.0.0.1:5500/html/free.html" target="_blank">Porsche Site</a></div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Communication Site</h2>
            <h1>Free<br>Board</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="#main-board">Free Board</a></div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span>01</span> Main</label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span>02</span> Sub</label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span>03</span> Board</label>
          <!-- <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span>04</span> Contacts</label> -->
        </div>
      </nav>
    </div>
  </section>
  <div>
    <div class="noite"></div>
    <div class="constelacao"></div>
    <div class="lua" style="position:fixed;">
      <div class="textura"></div>
    </div>
    <div class="chuvaMeteoro"></div>
    <div class="floresta">
      <img src="https://raw.githubusercontent.com/interaminense/starry-sky/master/src/img/bgTree.png" alt="" />
    </div>
  </div>
    
    <audio loop controls autoplay>
      <source src="/music/music.mp3" type="audio/mpeg">
    </audio>



  <div id="target">
    <div class="loginform">
      <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="insertUser.php" method="post" name="f1">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social">
                      <i class="fa fa-facebook-square" id="facebook"></i>
                    </a>
                    <a href="#" class="social">
                      <i class="fa fa-apple" id="apple"></i>
                    </a>
                    <a href="#" class="social">
                      <i class="fa fa-twitter" id="twitter"></i>
                    </a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" id="nname" name="nname">
                <input type="text" placeholder="Id" id="nid" name="nid">
                <input type="password" placeholder="Password" id="npw" name="npw">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="main_login.php" method="post" name="f2">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <!-- <ion-icon name="logo-facebook"></ion-icon> -->
                        <i class="fa fa-facebook-square" id="facebook"></i>
                    </a>
                    <a href="#" class="social">
                        <!-- <ion-icon name="logo-googleplus"></ion-icon> -->
                        <i class="fa fa-apple" id="apple"></i>
                    </a>
                    <a href="#" class="social">
                        <!-- <ion-icon name="logo-linkedin"></ion-icon> -->
                        <i class="fa fa-twitter" id="twitter"></i>
                    </a>
                </div>
                <span>or use your account</span>
                <input type="text" placeholder="Id" id="Id" name="Id">
                <input type="password" placeholder="Password" id="Password" name="Password">
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back</h1>
                    <p>To keep connected with us<br>please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello,Friend</h1>
                    <p>Enter your personal details<br>and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div id="main-board">
  <div class="board">
  <span class="cc top"></span>
      <span class="cc right"></span>
      <span class="cc bottom"></span>
      <span class="cc left"></span>
          <div id="content" style="margin-left:5%;">
            <?php
            include 'list.php';
            ?>
        </div>

          </div>
</div>

  
  <!-- <script src="main.js"></script> -->
  <script src="/js/main_login_form.js"></script>
  <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    
    
  </body>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/b5f1718a18.js" crossorigin="anonymous"></script>

  <script src="https://use.fontawesome.com/8ae46bccf5.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/backgroundimg.js"></script>
  <script src="../js/main_board.js"></script>
</html>
<?
mysqli_close($con);
?>