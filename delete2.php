<?php
   session_start();

	$passwd = $_POST['passwd'];
	$num = $_GET['num'];
	$page = $_GET['page'];

   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
						or die('connect ERROR!!'); 

   $query = "select passwd from newsboard where board_id=$num";
   $result = mysqli_query($dbc, $query);
   $row = mysqli_fetch_array($result); // �ش� ���ڵ� ������ 

   // $passwd : ����ڰ� passwd_form.php ȭ�鿡�� �Է��� �� 
   // $row[passwd] : DB�� ����ִ� �� 
   if ($passwd != $row['passwd'] && $_SESSION['username']!="admin"){
      echo'<script>window.alert("��й�ȣ�� Ʋ���ϴ�.");history.go(-1) </script>';
      exit;

   }else{

      $query = "delete from newsboard where board_id = $num";
      mysqli_query($dbc, $query);

      mysqli_close($dbc);
   }
	 $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/newsboard.php?num='.$num.'&amp;page='.$page.'';
	  header('Location:'.$home_url); 
?>


