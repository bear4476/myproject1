<?php
   require_once('startsession.php');

   if(!isset($_COOKIE['user_id'])) {
     echo '<script>window.alert("�α��� �� �̿��ϼ���.");history.go(-1)</script>';
	 exit;
   }
   
   if(!isset($_POST['content'])) {
     echo'<script>window.alert("������ �Է��ϼ���."); history.go(-1)</script>';
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
   
   mysqli_query($dbc, $query);  // $sql �� ����� ��� ����

   mysqli_close($dbc);                // DB ���� ����
   
   Header("Location:view2.php?num=$num");  // view.php �� �̵��մϴ�.
?>
