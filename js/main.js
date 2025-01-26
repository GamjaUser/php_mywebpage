
  function bannerSwitcher() {
    next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
    if (next.length) next.prop('checked', true);
    else $('.sec-1-input').first().prop('checked', true);
  }

  var bannerTimer = setInterval(bannerSwitcher, 7000);

  $('nav .controls label').click(function() {
    clearInterval(bannerTimer);
    bannerTimer = setInterval(bannerSwitcher, 7000)
  });

  

  // var board1 = document.getElementById('#board-1');
  // var board2 = document.getElementById('#board-2');

  // document.getElementById("Img_Area").style.display = "none";

  // $(document).ready(function(){
  //   // document.getElementById("#board-2").style.visibility = "hidden";
  //   // document.getElementById("board-1").style.display = "block";
  //   document.getElementById("board-2").style.display = "none";
  //   document.getElementById("board-3").style.display = "none";
  //   document.getElementById("board-4").style.display = "none";

  //   $('#writing-button').click(function(){
  //     // document.getElementById("board-2").style.display = "block";
  //     document.getElementById("board-1").style.display = "none";
  //     document.getElementById("board-2").style.display = "block";
  //     // board2.style.display = 'block';
  //     // board1.style.display = 'none';
  //   });
  //   $('#button-l').click(function(){
  //     document.getElementById("board-1").style.display = "block";
  //     document.getElementById("board-2").style.display = "none";
  //   });
  //   $('#button-s').click(function(){
  //     document.getElementById("board-1").style.display = "block";
  //     document.getElementById("board-2").style.display = "none";
  //   });
  //   $('#title-button').click(function(){
  //     document.getElementById("board-1").style.display = "none";
  //     document.getElementById("board-3").style.display = "block";
  //   });
  // });

//   $(document).ready(function(){
//     $('#content').on('click', '#hh', function(e){
//         e.preventDefault(); // 링크의 기본 동작을 막음
//         $('#content').load('write_form.php'); // file2.php를 로드하여 content div에 표시
//     });
    
//     $('#content').on('click', '.wfbt', function(e){
//       e.preventDefault(); // 링크의 기본 동작을 막음
//       $('#content').load('list.php'); // file2.php를 로드하여 content div에 표시
//   });

//   $('#content').on('click', '.wfbts', function(e){
//     e.preventDefault(); // 링크의 기본 동작을 막음
//     $('#content').load('insert.php'); // file2.php를 로드하여 content div에 표시
// });
// });