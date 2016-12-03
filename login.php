<?php
  session_start();

  $error_msg = "";

  if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
      $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata');

      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($user_username) && !empty($user_password)) {
        $query = "SELECT user_id, username FROM usertable WHERE username = '$user_username' AND password = '$user_password'";
        $data = mysqli_query($dbc, $query);

        if(mysqli_num_rows($data) == 1) {
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['username'] = $row['username'];
          setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    
          setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
          header('Location: ' . $home_url);
        }
        else {
          $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }
	

  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
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
<center><div id="menu">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><br /><br />
      <h3>* Log In</h3><br />
      <strong><label for="username">Username:</label></strong>
      <input type="text" name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" /><br /><br />
      <strong><label for="password">Password:</label></strong>
      <input type="password" name="password" /><br /><br />
    <input type="submit" value="Log In" name="submit" />
  </form>
  </div>

<?php
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>
<?php
echo '<br /><br />';

  echo '</center>';
?>
	<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>
</body>
</html>