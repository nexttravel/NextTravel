<?php
   // $con = new mysqli("localhost", "#ID", "#Password", "#DBName");
   $con = mysqli_connect("localhost", "newtrip", "qkqhajdcjddl5!", "newtrip")or die("DB connect error");

   $query = "SELECT * FROM `test`";
   $res = mysqli_query($con, $query);
   $row = mysqli_num_rows($res);

   

?>

<!DOCTYPE html>
<html>
<head>
	<title>어디</title>
	<meta charset='utf-8'>
	<link rel='shortcut icon' href='favicon.ico'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='http://code.jquery.com/jquery-3.3.1.js'></script>
	<link rel='stylesheet' href='index.css' type='text/css'>


   <script>
      $(document).ready(function(){

         var LastScrollTop = 0;
         $(window).scroll(function(){
            var CurrentScrollTop = $(this).scrollTop();

            if (CurrentScrollTop > LastScrollTop){ //스크롤 DOWN
               $('.video_box').css({'opacity':0});
               // $('.main_box').animate({'bottom: 100%'}, 1000);
            }

            else { //스크롤 UP
            }

            LastScrollTop = CurrentScrollTop;
         });

      });
   </script>
</head>

<body>

   <div class="panel">
      <div class="video_box">
         <video class="video" muted autoplay loop>
               <source src="src\main_video.mp4" type="video/mp4">   
         </video>

         <div class="title">WHERE TO TRAVEL NEXT</div>
      </div>

      <div class="main_box">
         <div class="place_box">
            <div class="place">
               <div class="place_name">일본</div>
            </div>
            <div class="place">
               <div class="place_name">미국</div>
            </div>
            <div class="place">
               <div class="place_name">몽골</div>
            </div>
            <div class="place">
               <div class="place_name">네팔</div>
            </div>
            <div class="place">
               <div class="place_name">스위스</div>
            </div>
            <div class="place">
               <div class="place_name">스페인</div>
            </div>
            <div class="place">
               <div class="place_name">프랑스</div>
            </div>
            <div class="place">
               <div class="place_name">칠레</div>
            </div>
            <div class="place">
               <div class="place_name">멕시코</div>
            </div>
            <div class="place">
               <div class="place_name">가나</div>
            </div>    
            <div class="place">
               <div class="place_name">일본</div>
            </div>
            <div class="place">
               <div class="place_name">미국</div>
            </div>
            <div class="place">
               <div class="place_name">몽골</div>
            </div>
            <div class="place">
               <div class="place_name">네팔</div>
            </div>
            <div class="place">
               <div class="place_name">스위스</div>
            </div>
            <div class="place">
               <div class="place_name">스페인</div>
            </div>
            <div class="place">
               <div class="place_name">프랑스</div>
            </div>
            <div class="place">
               <div class="place_name">칠레</div>
            </div>
            <div class="place">
               <div class="place_name">멕시코</div>
            </div>
            <div class="place">
               <div class="place_name">가나</div>
            </div>   
            <div class="place">
               <div class="place_name">일본</div>
            </div>
            <div class="place">
               <div class="place_name">미국</div>
            </div>
            <div class="place">
               <div class="place_name">몽골</div>
            </div>
            <div class="place">
               <div class="place_name">네팔</div>
            </div>
            <div class="place">
               <div class="place_name">스위스</div>
            </div>
            <div class="place">
               <div class="place_name">스페인</div>
            </div>
            <div class="place">
               <div class="place_name">프랑스</div>
            </div>
            <div class="place">
               <div class="place_name">칠레</div>
            </div>
            <div class="place">
               <div class="place_name">멕시코</div>
            </div>
            <div class="place">
               <div class="place_name">가나</div>
            </div>    
            <div class="place">
               <div class="place_name">일본</div>
            </div>
            <div class="place">
               <div class="place_name">미국</div>
            </div>
            <div class="place">
               <div class="place_name">몽골</div>
            </div>
            <div class="place">
               <div class="place_name">네팔</div>
            </div>
            <div class="place">
               <div class="place_name">스위스</div>
            </div>
            <div class="place">
               <div class="place_name">스페인</div>
            </div>
            <div class="place">
               <div class="place_name">프랑스</div>
            </div>
            <div class="place">
               <div class="place_name">칠레</div>
            </div>
            <div class="place">
               <div class="place_name">멕시코</div>
            </div>
            <div class="place">
               <div class="place_name">가나</div>
            </div>
            <div class="place">
               <div class="place_name">스페인</div>
            </div>
            <div class="place">
               <div class="place_name">프랑스</div>
            </div>
            <div class="place">
               <div class="place_name">칠레</div>
            </div>
            <div class="place">
               <div class="place_name">멕시코</div>
            </div>
            <div class="place">
               <div class="place_name">가나</div>
            </div> 
         </div>
      </div>
   </div>


</body>
</html>


