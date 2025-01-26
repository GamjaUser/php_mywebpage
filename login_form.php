<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .container{
            margin-top: 4%;
            background-color: rgb(255, 255, 244);
            width: 400px;
            border: 2px dotted rgb(181, 181, 0);
            padding-top: 20px;
            border-radius: 10%;
        }
        /* button{
            margin-bottom: 20px;
            margin-left: 50%;
        } */
        #btn {
            margin-bottom: 20px;
            margin-left: 50%;
        }
        img{
            margin-left: 15%;
            padding-bottom: 10px;
        }
        h2{
            text-align: center;
        }
        .loginbutton{
            display: flex;
            justify-content: space-between;
        }
        a{
            color: rgb(96, 168, 154);
            margin-top: 0;
        }
        .c{
            color: red;
        }
    </style>
    <script>
        function f(){
            // 방법2
            var i = document.getElementById('idd').value;
            var j = document.getElementById('pw').value;
            document.getElementById('view1').innerHTML="";
            document.getElementById('view2').innerHTML="";
            
            if (i=="admin" && j=="1234"){
                alert("환영합니다.");
            }
            else if(i=="admin" && j!="1234"){
                //alert("비밀번호가 일치하지 않습니다.");
                document.getElementById('view2').innerHTML="비밀번호가 일치하지 않습니다.";
                return false;
            }
            else if(i!="admin" && j=="1234"){
                //alert("아이디가 일치하지 않습니다.");
                document.getElementById('view1').innerHTML="아이디가 일치하지 않습니다.";
                return false;
            }
            else{
                //alert("아이디와 비밀번호가 일치하지 않습니다.");
                document.getElementById('view2').innerHTML="아이디와 비밀번호가 일치하지 않습니다.";
                return false;
            }
            // 방법1 - 폼이름으로 접근하는 방법
            // var i=ff.idd.value;  // home명.input명.값
            // var j=ff.pw.value;
            // alert(i+" "+j);
        }
    </script>
</head>
<body>
    <div class="container">
    <img src="/images/linux.png" alt="" width="250px" height="110px">
    <h2>Linux Login</h2>
    <form action="login.php" method="post" name="ff" target="" onsubmit=""><!-- return f() -->
        <div class="form-group">
            <label for="id">아이디:</label>
            <!-- type="text" : 한 줄짜리 텍스트 입력 필드/ 주로 아이디나 이름, 주소 등 텍스트 입력 -->
            <input type="text" required autofocus placeholder="4~20자(영문, 숫자, 특수문자)를 입력하세요" size="15" maxlength="14" name="idd" id="idd" class="form-control"><br> <!-- maxlength : 몇자리 이하까지만 입력 가능 -->
            <div class="c" id="view1"></div>
        </div>
        <a href="">아이디를 잊으셨나요?</a>
        <div class="form-group">
            <label for="pw">패스워드:</label>
            <!-- type = "password" : 사용자가 입력하는 내용이 '*' 나 '●'로 표시된다.-->
            <input type="password" name="pw" id="pw" class="form-control" required placeholder="패스워드를 입력하세요" size="15" maxlength="14"><br>
            <div class="c" id="view2"></div>
        </div>
        <a href="">패스워드를 잊으셨나요?</a>
        <div class="loginbutton">
            <a href="">계정만들기</a>
            <!-- <input type="image" onclick="f()" width="100px" height="40px" src="images/button.png"> -->
            <!-- <input type="button" onclick="f()" class="btn btn-primary" style="background-color: #525b30;" value="로그인"> -->
            <!-- input type="submit" value="로그인" -->
            <input type="submit" class="btn btn-primary" value="로그인" id="btn"></input>
        </div>
        
    </form>
    </div>
    
    <!-- fieldset : 폼 요소를 그룹으로 묶는 태그
         legend : 그룹으로 묶는 구역에 제목을 붙이는 태그 -->
    <!--
    <fieldset>
        <legend>아이디를 입력</legend>
    </fieldset>
    <fieldset>
        <legend>비밀번호를 입력</legend>
    </fieldset>
    -->
    

</body>
</html>