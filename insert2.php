<?php
   /* 이전화면에서 이름이 입력되지 않았으면 
      "이름을 입력하세요" 메시지 출력*/
	$name = $_COOKIE['username'];
	$passwd = $_POST['passwd'];
	$subject = $_POST['subject'];
	$content = trim($_POST['content']);

   if(empty($name)) {
     echo '<script>window.alert("이름을 입력하세요.");history.go(-1)</script>';
	 exit;
   }else if(empty($passwd)) {
	 echo '<script>window.alert("비밀번호를 입력하세요.");history.go(-1)</script>';
	 exit;
   }else if(empty($subject)) {
	 echo '<script>window.alert("제목을 입력하세요.");history.go(-1)</script>';
	 exit;
   }else if(empty($content)) {
	 echo '<script>window.alert("내용을 입력하세요.");history.go(-1)</script>';
	 exit;
   }else{
   
	   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
						or die('connect ERROR!!');    

	   $query = "insert into newsboard(name, passwd, subject, content, regist_day, hit) values('$name', '$passwd', '$subject', '$content',NOW(), 0)";// 레코드 삽입 명령
	   
	   mysqli_query($dbc, $query);  // $query 에 저장된 명령 실행

	   mysqli_close($dbc);                // DB 연결 끊기
	   
	   $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/newsboard.php';
	   header('Location:'.$home_url); 
   }
?>

   
