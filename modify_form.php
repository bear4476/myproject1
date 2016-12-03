<?php
   session_start();
   $num = $_GET['num'];
   $page = $_GET['page'];
   $passwd = $_POST['passwd'];
   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
						or die('connect ERROR!!');    

   $query = "select * from freeboard where board_id = $num";

   $result = mysqli_query($dbc, $query);
   $row = mysqli_fetch_array($result);

   if ($passwd != $row['passwd'] && $_SESSION['username']!="admin"){
      echo '<script>alert("비밀번호가 틀립니다.");history.go(-1)</script>';
      exit;
   }
   
	require_once('startsession.php');
echo '<link href="boardstyle.css" rel="stylesheet" type="text/css">';

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
<?
 require_once('header.php');
?>
	<nav><br />
	<div id="header-wrapper">
		<div class="wrapper">
			<span class="title"><img src="logo_apple.png" border="0" /> &nbsp&nbsp</span>
			<ul class="navigation">
				<li><a href="index.php">Home</a></li>
				<li><a href="intro.php">iPhone 소개</a></li>
				<li><a href="Test.php">iPhone 진단</a></li>
				<li><a href="FirstStep.php">iPhone 초보</a></li>
				<li><a href="#credits">사용자 Tip</a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="newsboard.php"><div class="point1">게시판</div></a></li>
			</ul>
		</div>
	</div>
	<div class="nav_bar2">
		<ul>
			<li><a href="newsboard.php"><strong>iPhone News</a></li>
			<li><a href="board.php">Free Board</a></li>
		</ul>
	</div></nav>
	<div class="list">
    <table border="0" cellspacing="0" cellpadding="0" width='776' align="center">
        <tr><td colspan="6" height="25"></td></tr>
        <tr><td background="img/bbs_bg.gif"></td>
        </tr>
        <tr><td height="10"></td></tr>
     <form name="modifyform" action="modify.php?num=<?php echo $num; ?>&amp;page=<?php echo $page; ?>" method="post">
							<tr>
							   <td align="center" colspan="2">
						<table width="776" border="0" cellspacing="0" cellpadding="0" 
							   class="txt">
							<tr height="1" bgcolor="#5AB2C8"><td></td></tr>
							<tr id="pre_info" height="20">
							  <td width="100%" bgcolor="#dbecff" height="25px">&nbsp;&nbsp;
								<b>작성자 & 비밀번호</b></td>
							</tr>
							<tr height="1" bgcolor="#5AB2C8"><td></td></tr>
							<tr>
							  <td>
						<table id="info" width="100%" border="0" cellspacing="0" cellpadding="0" 
							   class="txt">
							<tr height="25"><br />
							  <td align="right" width="100">이름&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							    <td align="left">
							  <strong style='font-size:1.2em;' 
										type="label" name="name"><?php echo $row['name']?></strong></td>
	
							</tr>

							<tr height="25">
							  <td align="right">비밀번호&nbsp;</td>
							  <td align="left"><input style="font-size:9pt;border:1px solid"
							   type="password" name="passwd" 
							  value="<?php echo $row['passwd']; ?>" size="20" maxlength="16">
							  </td>
							  </tr>
							<tr height="15">
							</tr>

						</table>
							  </td>
							</tr>
							<tr height="1" bgcolor="#5AB2C8"><td colspan="2"></td></tr>
							<tr id="pre_info" height="20">
							  <td colspan="2" bgcolor="#cce6ff" height="25px">&nbsp;&nbsp;<b>수정 할 정보를 입력하세요</b></td>
							</tr>        
							<tr height="1" bgcolor="#5AB2C8"><td colspan="5"></td></tr>  
							<tr>
							  <td colspan="2">
						<table id="info" width="100%" border="0" cellspacing="0" 
									   cellpadding="0" class="txt">
							<tr> <br />
							  <td height="25" >&nbsp;&nbsp;제목&nbsp;&nbsp;&nbsp;
							   <input style="font-size:9pt;border:1px solid"
									   type="text" name="subject" 
									  value="<?php echo $row['subject']; ?>" 
									   size="82" maxlength="100"></td>
							</tr>
							<tr><td height="2">&nbsp;&nbsp;</td> </tr>
						 
							<tr valign="top">
							  <td>&nbsp;&nbsp;&nbsp;내용&nbsp;&nbsp;
							   <textarea style="font-size:9pt;border:1px solid"
										  name="content" style="background-image:url
											   ('img/bbs_text_line.gif')"; 
										  cols="70" rows="14" wrap="virtual">
										  <?php echo trim($row['content']); ?>
							   </textarea></td>
							</tr>
							<tr height="20">
							  <td></td>
							</tr>
							<tr height="1" bgcolor="#5AB2C8"><td colspan="5"></td></tr>
							<tr>
							  <td height="15" align="center" valign="top">
								<br>

									<input type="image" src="img/check.png" 
											align="absmiddle" border="0">&nbsp;


									<a href="board.php?page=<?php echo $page ?>">
									<img style="cursor:hand" src="img/list.png" 
										 align="absmiddle" border="0" ></a></td>

							</tr>
						</table>
							  </td>
							</tr> 
						</table>
							  </td>
							</tr>
     </form>
    </table>
	</div>
 <?php
  echo'<br /><br /><br /><center>';
  echo '</center>';
?>
<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>
</body>

</html>