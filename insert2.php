<?php
   /* ����ȭ�鿡�� �̸��� �Էµ��� �ʾ����� 
      "�̸��� �Է��ϼ���" �޽��� ���*/
	$name = $_COOKIE['username'];
	$passwd = $_POST['passwd'];
	$subject = $_POST['subject'];
	$content = trim($_POST['content']);

   if(empty($name)) {
     echo '<script>window.alert("�̸��� �Է��ϼ���.");history.go(-1)</script>';
	 exit;
   }else if(empty($passwd)) {
	 echo '<script>window.alert("��й�ȣ�� �Է��ϼ���.");history.go(-1)</script>';
	 exit;
   }else if(empty($subject)) {
	 echo '<script>window.alert("������ �Է��ϼ���.");history.go(-1)</script>';
	 exit;
   }else if(empty($content)) {
	 echo '<script>window.alert("������ �Է��ϼ���.");history.go(-1)</script>';
	 exit;
   }else{
   
	   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
						or die('connect ERROR!!');    

	   $query = "insert into newsboard(name, passwd, subject, content, regist_day, hit) values('$name', '$passwd', '$subject', '$content',NOW(), 0)";// ���ڵ� ���� ���
	   
	   mysqli_query($dbc, $query);  // $query �� ����� ��� ����

	   mysqli_close($dbc);                // DB ���� ����
	   
	   $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/newsboard.php';
	   header('Location:'.$home_url); 
   }
?>

   
