<?php
   $scale = 10;   // �� ȭ�鿡 ǥ�õǴ� �� ��

   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
					or die('connect ERROR!!');

   // $find : subject, name, content �� �ϳ��� ���� ����
   // $search : �Էµ� ���ڿ�
   $search =  $_POST['search'];
   $find = $_POST['find'];

   $query = "select * from newsboard where $find like '%$search%' order by board_id desc";
   $result = mysqli_query($dbc,$query);

  require_once('startsession.php');
  
	echo '<link href="boardstyle.css" rel="stylesheet" type="text/css">';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>�ٿ������</title>           
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
				<li><a href="intro.php">iPhone �Ұ�</a></li>
				<li><a href="Test.php">iPhone ����</a></li>
				<li><a href="FirstStep.php">iPhone �ʺ�</a></li>
				<li><a href="#credits">����� Tip</a></li>
				<li><a href="#credits">APP ��õ</a></li>
				<li><a href="#credits">ACC ��õ</a></li>
				<li><a href="newsboard.php"><div class="point1">�Խ���</div></a></li>
			</ul>
		</div>
	</div>
	<div class="nav_bar2">
		<ul>
			<li><a href="newsboard.php"><strong>iPhone News</a></li>
			<li><a href="board.php">Free Board</a></li>
		</ul>
	</div></nav>
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
 <div class="list">
    <table border=0 cellspacing="0" cellpadding="0" width="776" align="center">  
        <tr><td colspan="5" height="25"></td></tr>
        <tr><td background="img/bbs_bg.gif">
          </td></tr>
        <tr><td height="10"></td></tr>

<?php  
	$total_record = mysqli_num_rows($result); // ��ü �� ��
?>
        <tr><td align="right" colspan="5" height=20>��ü 
            <? echo $total_record; ?>�� 
          </td></tr>
        <tr>
          <td>

    <table border="0" cellspacing="0" cellpadding="0" width="100%" class="txt">
        <tr > 
          <td colspan="5" height="1" ></td>
        </tr>
        <tr id="top_bar" height="25" bgcolor="#dbecff"> 
          <td width="50" align="center"><strong>��ȣ</strong></td>
          <td width="450" align=center><strong>����</strong></td>
          <td width="76" align=center><strong>�۾���</strong></td>
          <td width="145" align=center><strong>�ۼ���</strong></td>
          <td width="55" align=center><strong>��ȸ</strong></td>
        </tr>
        <tr > 
         <td colspan="5" height="1"></td>
        </tr>
  
<?php
   // ��ü ������ ��($total_page) ��� 
   if ($total_record % $scale == 0)     
      $total_page = floor($total_record/$scale);     
   else
      $total_page = floor($total_record/$scale) + 1; 
 
   if ($page==0){                 // ��������ȣ($page)�� 0 �� ��
       $page = 1;              // ������ ��ȣ�� 1�� �ʱ�ȭ
   }
   // ǥ���� ������($page)�� ���� $start ���  
   $start = ($page - 1) * $scale;      

	$number = $total_record - $start;
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){
      // ������ ���ڵ�� ��ġ(������) �̵�  
      mysqli_data_seek($result, $i);       

      // �ϳ��� ���ڵ� ��������
      $row = mysqli_fetch_array($result);            
      
      $day = $row['regist_day'];

      // ���ڵ� ȭ�鿡 ����ϱ�
      echo ' <tr id="ccont" height=25>
          <td align=center>'.$number.'</td>
          <td><img src="img/bul.png" border=0>
              <a href="view2.php?num='.$row['board_id'].'&amp;page='.$page.'">'.$row['subject'].'</a></td>
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
   // �Խ��� ��� �ϴܿ� ������ ��ũ ��ȣ ���
   for ($i=1; $i<=$total_page; $i++){
     if ($page == $i)     // ���� ������ ��ȣ ��ũ ����
    {
      echo '<font color="4C5317"><b>['.$i.']</b></font>';
       }
      else
     { 
      echo '<a href="newsboard.php?page='.$i.'"><font color="#4C5317">['.$i.']</font></a>';
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
<!-- �˻��ϱ� ���� -->
    <table id="searchbox" width="777" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="5">
          <td></td>
        </tr>
      <form name="searchForm" method="post" action="find2.php">
        <tr>
          <td>&nbsp;&nbsp;
            <select name="find" class="txt">
             <option value="subject">���񿡼�</option>
             <option value="content">��������</option>
             <option value="name">�۾��̿���</option>
            </select>
                
           <input type="text" name="search" size=10>
           <input type="image" src="img/find.png" 
                 align="absmiddle" border=0>
          </td>

          <td align=right>
                <a href="write_form2.php">
           <img src="img/write.png" align="absmiddle" border=0></a>&nbsp;
		   <a href="newsboard.php"><img src="img/list.png"  align="absmiddle" border=0></a>&nbsp;
		   </td>
        </tr>
       </form>
        <tr height="5">
          <td></td>
        </tr>
        <tr bgcolor="#5AB2C8" height="1">
          <td colspan="2"></td>
        </tr>
    </table>
	</div>
<!-- �˻��ϱ� �� -->
 </body>
</html>