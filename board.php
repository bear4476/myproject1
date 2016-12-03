<?php
   $scale = 10;   // 한 화면에 표시되는 글 수

   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
					or die('connect ERROR!!');

   $query = "select * from freeboard order by board_id desc";
   $result = mysqli_query($dbc, $query);

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
    <table border="0" cellspacing="0" cellpadding="0" width='776' align='center'>
        <tr><td colspan="5" height="25"></td></tr>
        <tr><td background="img/bbs_bg.gif"></td>
        </tr>
        <tr><td height="10"></td></tr>

<?php  
	
	$total_record = mysqli_num_rows($result); // 전체 글 수
?>
        <tr>
          <td align="right" colspan="5" height="20">전체 
            <? echo $total_record; ?>건 
            </td></tr>
        <tr>
          <td><br />

    <table border=0 cellspacing="0" cellpadding="0" width="100%" class="txt">
        <tr > 
          <td colspan="5" height="1"></td>
        </tr>
        <tr id="top_bar" height="25" bgcolor="#dbecff"> 
          <td width="50" align="center"><strong>번호</strong></td>
          <td width="450" align="center"><strong>제목</strong></td>
          <td width="76" align="center"><strong>글쓴이</strong></td>
          <td width="145" align="center"><strong>작성일</strong></td>
          <td width="55" align="center"><strong>조회</strong></td>
        </tr>
        <tr > 
          <td colspan="5" height="1"></td>
        </tr>
  
<?php
   // 전체 페이지 수($total_page) 계산 
   if ($total_record % $scale == 0){     

      $total_page = floor($total_record/$scale); 
	  
   }else{

      $total_page = floor($total_record/$scale) + 1; 

   }
   $page = $_GET['page'];
   if ($page == 0){                 // 페이지번호($page)가 0 일 때
       $page = 1;              // 페이지 번호를 1로 초기화
   }

   // 표시할 페이지($page)에 따라 $start 계산  
   $start = ($page - 1) * $scale;      

   $number = $total_record - $start;

   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){
      mysqli_data_seek($result, $i); // 첫페이지에서는 문제가 되지 않지만, 두번째 페이지부터 오류 
      // 가져올 레코드로 위치(포인터) 이동  
      $row = mysqli_fetch_array($result);       
      // 하나의 레코드 가져오기
      
      $day = $row['regist_day'];
     
      // 레코드 화면에 출력하기
      echo '
	  <tr id="ccont" height=25>
          <td align=center>'.$number.'</td>
          <td><img src="img/bul.png" border=0>
              <a href="view.php?num='.$row['board_id'].'&amp;page='.$page.'">'.$row['subject'].' </a></td>
          <td align=center>'.$row['name'].' </td>
          <td align=center>'.$day.'</td>
          <td align=center>'.$row['hit'].'</td>
        </tr>
        <tr bgcolor="#CCCCCC" height=1> 
          <td colspan="5"></td>
        </tr>';
    $number--;
   } 
?>
        <tr> 
          <td colspan="5" height="20"></td>
        </tr>

        <tr height="25">
          <td colspan="5" align="center">
<?php
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
       if ($page == $i)     
       {
          echo '<font color="#4C5317"><b>['.$i.']</b></font>';
       }
       else
       { 
          echo '<a href="board.php?page='.$i.'"><font color="#4C5317">['.$i.']</font></a>';
       }      
   }
?>
          </td>
        </tr>
        <tr height="1"> 
          <td colspan="5"></td>
        </tr>
    </table>

          </td>
        </tr>      
    </table>

       <!-- 검색하기 시작 -->
    <table id="searchbox" width="777" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="5">
          <td></td>
        </tr>
       <form name="searchForm" method="post" action="find.php">
        <tr>
          <td>&nbsp;&nbsp;
            <select name="find" class="txt">
              <option value="subject">제목에서</option>
              <option value="content">본문에서</option>
              <option value="name">글쓴이에서</option>
            </select>
                         
              <input type="text" name="search" size="10">
              <input type="image" src="img/find.png" 
                    align="absmiddle" border="0">
          </td>

          <td align="right">
		  <?php if(isset($_COOKIE['username'])){ ?>
		  <a href="write_form.php"><img src="img/write.png" align="absmiddle" border="0"></a>&nbsp;
				  <?php
		  } ?>
			   <a href="board.php"><img src="img/list.png"  align="absmiddle" border="0"></a>&nbsp;
			 </td>
        </tr>
        <tr height="5">
          <td></td>
        </tr>
        <tr bgcolor="#5AB2C8" height=1>
          <td colspan="2"></td>
        </tr>
       </form>
    </table>
	</div>
	
   <!-- 검색하기 끝 -->
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