<?php
	require_once('startsession.php');
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>다요니졸작</title>           
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="style2.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="demo.css?v=2">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <?
 require_once('header.php');
?>
	<nav><br />
	<div id="header-wrapper">
		<div class="wrapper">
			<span class="title"><img src="logo_apple.png" border="0" /> &nbsp&nbsp</span>
			<ul class="navigation">
				<li><a href="index.php"><div class="point1">Home</div></a></li>
				<li><a href="intro.php">iPhone 소개</a></li>
				<li><a href="Test.php">iPhone 진단</a></li>
				<li><a href="FirstStep.php">iPhone 초보</a></li>
				<li><a href="#credits">사용자 Tip</a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="board.php">게시판</a></li>
			</ul>
		</div>
	</div></nav>
	<?


  $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata');

  if (isset($_POST['submit'])) {
		$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
		$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
		$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
		$gender = mysqli_real_escape_string($dbc, trim($_POST['gender']));	
		$birthdate = mysqli_real_escape_string($dbc, trim($_POST['birthdate']));
		$phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
		$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
		$address = mysqli_real_escape_string($dbc, trim($_POST['address']));
		$other = mysqli_real_escape_string($dbc, trim($_POST['other']));

		$output_form = 'no';

	if (empty($username)) {
      echo '<p class="error">You forgot to enter your username.</p>';
      $output_form = 'yes';
    }

    if (empty($password1)) {
      echo '<p class="error">You forgot to enter your password1.</p>';
      $output_form = 'yes';
    }

	if (empty($password2)) {
      echo '<p class="error">You forgot to enter your password2.</p>';
      $output_form = 'yes';
    }

	if (empty($name)) {
      echo '<p class="error">You forgot to enter your name.</p>';
      $output_form = 'yes';
    }

	if (empty($gender)) {
      echo '<p class="error">You forgot to enter your gender.</p>';
      $output_form = 'yes';
    }

	if (empty($birthdate)) {
      echo '<p class="error">You forgot to enter your birthdate.</p>';
      $output_form = 'yes';
    }

    /*if (!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/', $email)) {
      echo '<p class="error">Your email address is invalid.</p>';
      $output_form = 'yes';
    }*/

	if (!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._\-&!?=#]*@/', $email)) {
      echo '<p class="error">Your email address is invalid.</p>';
      $output_form = 'yes';
    }
    if (!preg_match('/^01[0-9]-\d{4}-\d{4}$/', $phone)) {
      echo '<p class="error">Your phone number is invalid.</p>';
      $output_form = 'yes';
    }

	if (empty($address)) {
      echo '<p class="error">You forgot to enter your address.</p>';
      $output_form = 'yes';
    }

	if (empty($other)) {
      echo '<p class="error">You forgot to enter your other.</p>';
      $output_form = 'yes';
    } 
  }

   else {
    $output_form = 'yes';
  }
   if ($output_form == 'yes') {

 // mysqli_close($dbc);
?><br /><br /><br />
<center>
   <h3> * 사용자 데이타를 입력해 주세요 *^^*~</h3><br />

<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  <input type="hidden" name ="MAX_FILE_SIZE" value="32768" />
	  <label for="username"> ID : </label>
	  <input type="text" id="username" name="username" value="<?php if(!empty($username)) echo $username; ?>" /><br /><br />
	  <label for="password1"> Password : </label>
	  <input type="password" id="password1" name="password1" value="<?php if(!empty($password1)) echo $password1; ?>"/><br /><br />
	  <label for="password2"> Password 확인 : </label>
	  <input type="password" id="password2" name="password2" value="<?php if(!empty($password2)) echo $password2; ?>"/><br /><br />
	  <label for="name"> 이 름 : </label>
	  <input type="text" id="name" name="name" value="<?php if(!empty($name)) echo $name; ?>"/><br /><br />
	  <label for="gender"> 성 별 : </label>
	  <input type="text" id="gender" name="gender" value="<?php if(!empty($gender)) echo $gender; ?>"/><br /><br />
	  <label for="birthdate"> 생 일 : </label>
	  <input type="text" id="birthdate" name="birthdate" value="<?php if(!empty($birthdate)) echo $birthdate; ?>"/><br /><br />
	  <label for="phone"> 전화번호 : </label>
	  <input type="text" id="phone" name="phone" value="<?php if(!empty($phone)) echo $phone; ?>"/><br /><br />  
	  <label for="email"> E-mail : </label>
	  <input type="text" id="email" name="email" value="<?php if(!empty($email)) echo $email; ?>"/><br /><br />  
	  <label for="address"> 주 소 : </label>
	  <input type="text" id="address" name="address" value="<?php if(!empty($address)) echo $address; ?>"/><br /><br />
	  <label for="other">하고싶은 말 : </label>
	  <textarea id="other" name="other" ></textarea> <br /><br />
	  <label for="verify">Verification:</label>
    <input type="text" id="verify" name="verify" value="Enter the pass-phrase." /> <img src="captcha.php" alt="Verification pass-phrase" /> <br /><br />
	  <input type="submit" value="Sign up" name="submit" />
</form>

 </div>
 <?php
	}
  else if ($output_form == 'no') {
	  $user_pass_phrase = SHA1($_POST['verify']);	
	 if ($_SESSION['pass_phrase'] == $user_pass_phrase) {
	     if(!empty($username)&&!empty($password1)&&!empty($password2)&&!empty($name)&&!empty($gender)&&!empty($birthdate)&&!empty($phone)&&!empty($email)&&!empty($address)&&!empty($other)) {
      $query = "SELECT * FROM usertable WHERE username = '$username'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        $query = "INSERT INTO usertable (username,password,name,gender,birthdate,phone,email,address,other)"
				."VALUES ('$username','$password1','$name','$gender','$birthdate','$phone','$email','$address','$other')";
        mysqli_query($dbc, $query);


        echo '<p>Your new account has been successfully created. You\'re now ready to <a href="login2.php">log in</a>.</p>';

        mysqli_close($dbc);
        exit();
      }
      else {
        echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        $username = "";
      }
    }
    else {
      echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
  
    echo '<p>' . $username . ' ' . $password1 . ', thanks for registering with Risky Jobs!<br />';
    $pattern = '/[\(\)\-\s]/';
    $replacement = '';
    $new_phone = preg_replace($pattern, $replacement, $phone);
    echo 'Your phone number has been registered as ' . $new_phone . '.</p>';
	 }
	 else{
		echo '<p class="error">Please enter the verification pass-phrase exactly as shown.</p>';
	 }

  }
  
?>
<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>
</body>
</html>

