<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

</head>
<style>
    .frame {
  width: 90%;
  margin: 40px auto;
  text-align: center;
}

.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}
.btn-3 {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  
}
.btn-3 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-3:before,
.btn-3:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3:before {
  height: 0%;
  width: 2px;
}
.btn-3:after {
  width: 0%;
  height: 2px;
}
.btn-3:hover{
   background: transparent;
  box-shadow: none;
}
.btn-3:hover:before {
  height: 100%;
}
.btn-3:hover:after {
  width: 100%;
}
.btn-3 span:hover{
   color: rgba(2,126,251,1);
}
.btn-3 span:before,
.btn-3 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3 span:before {
  width: 2px;
  height: 0%;
}
.btn-3 span:after {
  width: 0%;
  height: 2px;
}
.btn-3 span:hover:before {
  height: 100%;
}
.btn-3 span:hover:after {
  width: 100%;
}
.neon_effect p{
  color: #fff;
  font-family: Lobster;
  font-size:30px;
  animation: neon2 1.5s ease-in-out infinite alternate;
}
@keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF;
  }
}

</style>
<body>
    <div class="neon_effect"><p>Notice Board</p></div>
    <table border="1" cellpadding="10" width="800">
        <tr>
            <th>No.</th>
            <th>Subject</th>
            <th>Comment</th>
            <th>Enroll Date</th>
            <th>Views</th>
<?php
$subject = $_POST['subject'];
$content = $_POST['contents'];

// $regist = date("Y-m-d");

// DB연결
$con = mysqli_connect("localhost:8889", "root", "root");
    mysqli_select_db($con, "dbphp");
    $sql = "select * from board order by num desc;";
    $result = mysqli_query($con, $sql);
    while($row=mysqli_fetch_array($result)) {
?>
<tr>
    <td><?=$row[0]?></td>
    <td><a href="view.php?num=<?=$row['num']?>" style="color:skyblue;"><?=$row[1]?></a></td>
    <td><?=$row[2]?></td>
    <td><?=$row[3]?></td>
    <td><?=$row[4]?></td>
</tr>
<?
}
?>

</table>
<a href="/write_form.php">
    <input type="button" value="Writing" id="hh"  style="margin-top:10px">
</a>

<div class="frame">
  <button class="custom-btn btn-3" onClick="location.href='main.php'"><span>Main Page</span></button>
</body>
</html>
<?
mysqli_close($con);
?>