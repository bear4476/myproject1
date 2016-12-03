<?
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
				<li><a href="board.php"><div class="point1">게시판</div></a></li>
			</ul>
		</div>
	</div></nav>

  <body bgcolor="#FFFFFF" marginheight="0" topmargin="0" 
         OnLoad="javascript:pwform.passwd.focus()">
  <br>

     <script language=javascript>
  function go() {
	   if (document.pwform.passwd.value == "") {
		  alert("비밀번호를 입력해 주세요.");
		  return false;
		}
       document.pwform.submit();
   }
    </script>

   <div align="center"> 

<?php

   $num = $_GET['num'];
   $page = $_GET['page'];
   $case = $_GET['case'];
   if ($case == "modify"){
      echo '<form name="pwform" method="post" action="modify_form.php?num='.$num.'&amp;page='.$page.'">';

   }else{
	
      echo '<form name="pwform" method="post" action="delete.php?num='.$num.'&amp;page='.$page.'">';
   }
?>
    <table cellpadding="0" cellspacing="0" border="0" width="306">
        <tr height="1" bgcolor="#292E5F">
          <td></td>
        </tr>
        <tr height="18"> 
          <td align="center" bgcolor="#cce6ff" height="30px">
            <font color="#003366"> <b>비밀번호를 입력하세요!</b></font>
          </td>
        </tr>
        <tr height="1" bgcolor="#292E5F">
          <td></td>
        </tr>
        <tr height="20" >
          <td></td>
        </tr>
        <tr> 
          <td valign="top" align="center">

    <table cellpadding="0" cellspacing="5" border="0" width="100%" 
             >
        <tr> 
          <td width="150" align="right"> 
            <font> 비밀번호 &nbsp</font>
          </td>
          <td width="170"> 
            <input class="c1" type="password" name="passwd" size="15" 
               maxlength="10">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"><br />      
            <img id="btn" src="img/check.png" align="absmiddle" class="hand"
                                       onclick="go()">
            <img src="img/close.png" align="absmiddle" class="hand" 
                      onclick="javascript:history.back()">
        </tr>
        </tr>
    </table>
          </td>
        </tr>
        <tr height="20">
          <td></td>
        </tr>
        <tr height="1" bgcolor="#292E5F">
          <td></td>
        </tr>
    </table>
     </form>
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