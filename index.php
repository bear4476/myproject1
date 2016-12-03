<?php
   $scale = 7;   // 한 화면에 표시되는 글 수

   $dbc = mysqli_connect('localhost','root','apmsetup','cosmeticsdata')
					or die('connect ERROR!!');

   $query = "select * from freeboard order by hit desc";
   $result = mysqli_query($dbc, $query);
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
	<script type="text/javascript">
$(function() {
	var sWidth = $("#focus").height(); 
	var len = $("#focus ul li").length; 
	var index = 0;
	var picTimer;
	
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span>" + (i+1) + "</span>";
	}
	btn += "</div>"
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0.5);
	

	$("#focus .btn span").mouseenter(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseenter");

	$("#focus ul").css("height",sWidth * (len + 1));
	
	$("#focus ul li div").hover(function() {
		$(this).siblings().css("opacity",0.7);
	},function() {
		$("#focus ul li div").css("opacity",1);
	});
	
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			if(index == len) { 
				showFirPic();
				index = 0;
			} else {
				showPics(index);
			}
			index++;
		},3000); 
	}).trigger("mouseleave");
	
	function showPics(index) { 
		var nowLeft = -index*sWidth; 
		$("#focus ul").stop(true,false).animate({"top":nowLeft},300); 
		$("#focus .btn span").removeClass("on").eq(index).addClass("on")
	}
	
	function showFirPic() { 
		$("#focus ul").append($("#focus ul li:first").clone());
		var nowLeft = -len*sWidth;
		$("#focus ul").stop(true,false).animate({"top":nowLeft},300,function() {
			$("#focus ul").css("top","0");
			$("#focus ul li:last").remove();
		}); 
		$("#focus .btn span").removeClass("on").eq(0).addClass("on");
	}
	});

</script>
</head>

<body>
 <?php	
  require_once('header.php');
 ?>
   <?php  
	
	$total_record = mysqli_num_rows($result); // 전체 글 수
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
<br />
	<div class="wrapper">
	<div id="focus">
		<ul>			
			<li>
				<div style="left:0; top:0; width:977px; height:380px;"><a href="#" target="_blank"><img src="img/b01.jpg" alt="" /></a></div>
			</li>			
			<li>
				<div style="left:0; top:0; width:977px; height:380px;"><a href="#" target="_blank"><img src="img/a2.jpg" alt="" /></a></div>
			</li>
			<li>
				<div style="left:0; top:0; width:977px; height:380px;"><a href="#" target="_blank"><img src="img/a3.jpg" alt="" /></a></div>
			</li>
			<li>
				<div style="left:0; top:0; width:977px; height:380px;"><a href="#" target="_blank"><img src="img/a4.jpg" alt="" /></a></div>
			</li>
			<li>
				<div style="left:0; top:0; width:977px; height:380px;"><a href="#" target="_blank"><img src="img/a5.jpg" alt="" /></a></div>
			</li>
		</ul>
	</div></div>
	<div class="section1">
		<div class="news">
			<h1>iPhone News</h1>
			<hr />
			<ul>
			 <li><a href="#">애플, 결국 오는 6월 아이폰5S 출시?</a></li>
			 <li><a href="#">아이폰5, 가격방어선 무너지며 30만원대까지 가격↓</a></li>
			 <li><a href="#">애플 OS X에서 자바7 못쓴다</a></li>
			 <li><a href="#">호날두 '갤럭시 3' vs 메시 '아이폰'</a></li>
			 <li><a href="#">피치 "애플 저가 아이폰, 삼성 실적 갉아먹을 듯"</a></li>
			 <li><a href="#">애플, 보급형 아이폰 개발…중국 겨냥 연내 출시</a></li>
			 <li><a href="#">애플, 저가폰 출시 않겠다 말한 적 없다</a></li>
			</ul>
		</div>
		<div class="board">
			<h1>iPhone Board</h1>
			<hr /><ul>
			 <?php
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
				  echo '<li><img src="img/bul2.png" border=0><a href="view.php?num='.$row['board_id'].'&amp;page='.$page.'">'.$row['subject'].' </a></li>';
				$number--;
			   } 
			?>
			</ul>
		</div>

	</div>
	<div class="section2">
		<div class="app">
			<h1>iPhone App</h1>
			<hr />
			 <div class="any">
			  <img src="app.png" border="0" />
				<p><strong>애니팡</strong><br />
				카테고리: 게임(2013.01.08)<br />
				버전: 1.1.5<br />
				크기: 32.5 MB<br />
				개발자: Sundaytoz, INC</p>
			 </div>
			 <div class="dragon">
			  <img src="app2.png" border="0" />
				<p><strong>드래곤플라이트</strong><br />
				카테고리: 게임(2013.01.08)<br />
				버전: 1.1.5<br />
				크기: 32.5 MB<br />
				개발자: Sundaytoz, INC</p>
			 </div>
		</div>
	</div>
	<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>
</body>

</html>