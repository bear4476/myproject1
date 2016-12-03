<header>
	<div class="logo"><a href="index.php"><img src="logo.png" border="0" /></a></div>
	<div class="user">
		<ul>
<?
	
if (isset($_SESSION['username'])) {
	if($_SESSION['username']=="admin"){
		echo '<li><a href="#">관리자페이지 </a></li>';
		echo '<li><a>| </a></li>';
		echo '<li><a href="logout.php"> 로그아웃</a></li>';
	}
	else{
	echo '<li><a href="logout.php">'. $_SESSION['username'] .'님 로그아웃</a></li>';
	}
}
else{
	echo '<li><a href="login.php">로그인 </a></li>';
	echo '<li><a>| </a></li>';
	echo '<li><a href="signup.php">회원가입</a></li>';
}
?>		
		</ul>
	</div>
	</header>
