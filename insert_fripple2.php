<?php
   require_once('startsession.php');

   if(!isset($_COOKIE['user_id'])) {
     echo '<script>window.alert("로그인 후 이용하세요.");history.go(-1)</script>';
	 exit;
   }
   
   if(!isset($_POST['content'])) {
     echo'<script>window.alert("내용을 입력하세요."); history.go(-1)</script>';
	 exit;
   }

	$dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
					or die('connect ERROR!!');
	echo $_COOKIE['name'];
   $username = $_COOKIE['user_id'];
   $name = $_COOKIE['name'];
   $num = $_GET['num'];
   $content = $_POST['content'];
   $query = "insert into news_ripple(parent, user_id, name, content, regist_day)values('$num', '$username', '$name', '$content', NOW())";    
   
   mysqli_query($dbc, $query);  // $sql 에 저장된 명령 실행

   mysqli_close($dbc);                // DB 연결 끊기
   
   Header("Location:view2.php?num=$num");  // view.php 로 이동합니다.
?>
