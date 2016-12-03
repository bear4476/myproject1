<?php
   // 메시지 출력
	
	$passwd = $_POST['passwd'];
	$subject = $_POST['subject'];
	$content = trim($_POST['content']);
	$num = $_GET['num'];
	$page = $_GET['page'];


	if(empty($passwd)) {
	 echo '<script>window.alert("비밀번호를 입력하세요.");history.go(-2)</script>';
	 exit;
   }else if(empty($subject)) {
	 echo '<script>window.alert("제목을 입력하세요.");history.go(-2)</script>';
	 exit;
   }else if(empty($content)) {
	 echo '<script>window.alert("내용을 입력하세요.");history.go(-2)</script>';
	 exit;
   }else{
   
	   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
						or die('connect ERROR!!'); 

	   

	   $query = "update newsboard set subject='$subject' where board_id=$num";
	    mysqli_query($dbc, $query);
	   $query1 = "update newsboard set passwd='$passwd', content='$content' where board_id=$num";
	    mysqli_query($dbc, $query1);
	   $query2 = "update newsboard set regist_day= now() where board_id=$num";
	    mysqli_query($dbc, $query2);
		
		mysqli_close($dbc);
	   
		echo '<script>window.alert("수정이 완료되었습니다.!");history.go(-3)</script>';
	
   }
?>