var carOutImg1 = document.querySelector('#outimg1');
var carOutImg2 = document.querySelector('#outimg2');
var carInImg1 = document.querySelector('#inimg1');
var carInImg2 = document.querySelector('#inimg2');

var carColor = "white";
var carWheel = "basewheel";
var carSeat = "blackseat";

var carColorList = document.querySelectorAll('.carC');
for(let i = 0; i < carColorList.length; i++){
    carColorList[i].addEventListener('click', changeImg);
}

var carWheelList = document.querySelectorAll('.wheelsT');
for(let i = 0; i < carWheelList.length; i++){
    carWheelList[i].addEventListener('click', changeImg);
}

var carSeatList = document.querySelectorAll('.seatC');
for(let i = 0; i < carSeatList.length; i++){
    carSeatList[i].addEventListener('click', changeImg);
}



function changeImg(){
    let carColorSelectId = this.id;
    let carWheelSelectId = this.id;
    let carSeatSelectId = this.id;

    if(carColorSelectId == "sc-1"){carColor = "white";}
    if(carColorSelectId == "sc-2"){carColor = "black";}
    if(carColorSelectId == "sc-3"){carColor = "red";}
    if(carColorSelectId == "sc-4"){carColor = "yellow";}

    if(carWheelSelectId == "wd-1"){carWheel = "basewheel";}
    if(carWheelSelectId == "wd-2"){carWheel = "carrerawheel";}
    if(carWheelSelectId == "wd-3"){carWheel = "turbowheel";}

    if(carSeatSelectId == "lc-1"){carSeat = "blackseat";}
    if(carSeatSelectId == "lc-2"){carSeat = "redseat";}
    if(carSeatSelectId == "lc-3"){carSeat = "whiteseat";}
    if(carSeatSelectId == "lc-4"){carSeat = "brownseat";}
    
    carOutImg1.setAttribute('src', '/images/porsche_'+carColor+'_'+carWheel+'_'+carSeat+'.jpg');
    carOutImg2.setAttribute('src', '/images/porsche_back_'+carColor+'_'+carWheel+'_blackseat.jpg');
    carInImg1.setAttribute('src', '/images/porsche_internal_'+carSeat+'.jpg');
    carInImg2.setAttribute('src', '/images/porsche_seats_'+carSeat+'.jpg');
}


// // JavaScript 파일
// let values = {
//     value1: carColor,
//     value2: carWheel,
//     value3: carSeat
//   };
  
//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "/car_custom_result.php", true);
//   xhr.setRequestHeader("Content-Type", "application/json");
// //   xhr.onreadystatechange = function() {
// //     if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
// //       console.log("Values sent to PHP successfully!");
// //     }
// //   };
  
//   xhr.send(JSON.stringify(values));


s
// JavaScript 파일

// JavaScript에서 PHP로 여러 값을 전달하고자 하는 변수들
// let imageUrl = "경로/이미지.jpg"; // 이미지 경로 변수
// let color = "#FF0000"; // 배경색 변수 등

// AJAX를 통해 PHP에 값 전달
// let xhr = new XMLHttpRequest();
// xhr.open("GET", `car_custom_result.php?carColor=${carColor}&carWheel=${carWheel}&carSeat=${carSeat}`, true);
// xhr.send();

// JavaScript 파일

// Ja

// AJAX를 통해 PHP에 값 전달
let xhr = new XMLHttpRequest();
xhr.open("GET", `car_custom_result.php?carColor=${carColor}&carWheel=${carWheel}&carSeat=${carSeat}`, true);
xhr.send();