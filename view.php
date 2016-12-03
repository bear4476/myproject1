<?php
    session_start();
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
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?
 require_once('header.php');
?>
	<<nav><br />
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
    <table width="776" border="0" cellspacing="0" cellpadding="0" align="center">

        <tr><td colspan="6" height="25">
             </td></tr>
        <tr><td background="img/bbs_bg.gif">
             </td></tr>
        <tr><td height="10"></td></tr>

        <tr><td height="10"></td></tr>


        <tr height=1 bgcolor="#5AB2C8"><td></td>
        </tr>

<?php
   require_once('startsession.php');

   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
						or die('connect ERROR!!');    
   $num = $_GET['num'];
   $page = $_GET['page'];
   $query = "select * from freeboard where board_id = $num";
   $result = mysqli_query($dbc, $query);
   $row = mysqli_fetch_array($result);
   $hit = $row['hit'];

   $hit++;

   $query1 = "update freeboard set hit=$hit where board_id=$num";
   mysqli_query($dbc, $query1);
   $content = str_replace("\n", "<br/>", trim($row['content']));
   $content = str_replace(" ", "&nbsp;", $content);
   $subject = str_replace(" ", "&nbsp;", $row['subject']);
?>


        <tr id="top_bar" bgcolor="#cce6ff" height="25px">
          <td>　<b><?php echo $subject ?></td>
        </tr>
        <tr height="1" bgcolor="#5AB2C8">
          <td></td>
        </tr>
        <tr> 
          <td>
    <table id="main" width="100%" border="0" cellspacing="10" cellpadding="0" class="txt">
        <tr>
          <td>　<b>작성자 : <?php echo $row['name'] ?></b>&nbsp;&nbsp;&nbsp;
			  <span id="date"><b>작성날짜 : </b><?php echo $row['regist_day'] ?> </span>
          </td>
        <tr height="1" bgcolor="#5AB2C8"> <td></td></tr>
        <tr>
          <td><br><div class="view"> <?php echo $content ?><div></td>
        </tr>
    </table>
          </td>
        </tr>
        <tr height="1" bgcolor="#5AB2C8"><td></td></tr>
        <tr>
          <td>
		  
<?php
    $query = "select * from free_ripple where parent=$num order by regist_day";
    $result = mysqli_query($dbc,$query);
    $num_ripple = mysqli_num_rows($result);

    if($num_ripple)
    {
        while ($row = mysqli_fetch_array($result)) 
        {
           $ripple_day = $row['regist_day'];

           $ripple_content = str_replace("\n", "<br>", trim($row['content'])); 
           $ripple_content = str_replace(" ", "&nbsp;", $ripple_content); 
           $ripple_num = $row['fr_id'];
           $ripple_id = $row['user_id'];
           $ripple_name = $_COOKIE['username'];

     echo '<table width=100% cellpadding=0>';
	 echo '<tr height=20>';
     echo '<td width=10% align=center>&nbsp;'.$ripple_name.'&nbsp; </td>';
     echo '<td width=60%% align=left>&nbsp;☞'.$ripple_content.'</td>';
     echo '<td width=30% align=left>&nbsp;'.$ripple_day.'&nbsp;';
         echo '</td></tr>';
         echo '<tr height=1 bgcolor=#5AB2C8>';
         echo '<td colspan=3></td>';
         echo '</tr>';
		 echo '</table>';
       }
   }

?>
          </td>
        </tr>

    </table>

<?php
      echo '<form method="post" action="insert_fripple.php?num='.$num.'">
        <table align=center border=0 cellspacing=0 cellpadding=0 width=766>
          <tr><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;ID  : '.$_COOKIE['username'].'</td></tr> 
          <tr height=5><td colspan=2> </td></tr>
          <tr><td>
		  <textarea style="font-size:9pt;border:1px solid" 
					name="content" style=background-image:url("img/bbs_text_line.gif"); 
					cols=130 rows=4 wrap=virtual></textarea></td>
              <td align=right><input type=image src="img/regist.png"></td>
          </tr>

          <tr height=5><td colspan=2> </td></tr>
       </table>
      </form>';
?>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr height="10">
          <td></td>
        </tr>

<?php
   if ($_SESSION['username']=="admin")
   {
      echo '<tr>
          <td align="center">
          <a href="modify_form.php?num='.$num.'&amp;page='.$page.'"><img src="img/modify.png" border="0">&nbsp</a>
          <a href="delete.php?num='.$num.'&amp;page='.$page.'"><img src="img/del.png" border="0">&nbsp</a>
          <a href="board.php?page='.$page.'"><img src="img/list.png" border="0"></a>
          </td>
        </tr>';
   }else{
      echo '<tr>
          <td align="center">
		  <a href="passwd_form.php?case=modify&amp;num='.$num.'&amp;page='.$page.'"><img src="img/modify.png" border="0">&nbsp</a>
		  <a href="passwd_form.php?case=delete&amp;num='.$num.'&amp;page='.$page.'"><img src="img/del.png" border="0">&nbsp</a>
		  <a href="board.php?page='.$page.'"><img src="img/list.png" border="0"></a>
          </td>
        </tr>';
   }
?>

          </td>
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
<?php

    mysqli_close($dbc);
?>