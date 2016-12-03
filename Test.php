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
	<link rel="stylesheet" type="text/css" href="css/Test.css" />	
	<link rel="stylesheet" href="demo.css?v=2">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">
	
		$(function() {
			
			var indicator = $('#indicator'),
					indicatorHalfWidth = indicator.width()/2,
					lis = $('#tabs').children('li');

			$("#tabs").tabs("#content section", {
				effect: 'fade',
				fadeOutSpeed: 0,
				fadeInSpeed: 400,
				onBeforeClick: function(event, index) {
					var li = lis.eq(index),
					    newPos = li.position().left + (li.width()/2) - indicatorHalfWidth;
					indicator.stop(true).animate({ left: newPos }, 600, 'easeInOutExpo');
				}
			});	

		});

	</script>
</head>

<body>
    <?
 require_once('header.php');
?>
	<nav>
	<div id="header-wrapper">
		<div class="wrapper">
			<span class="title"><img src="logo_apple.png" border="0" /> &nbsp&nbsp</span>
			<ul class="navigation">
				<li><a href="index.php">Home</a></li>
				<li><a href="intro.php">iPhone 소개</a></li>
				<li><a href="Test.php"><div class="point1">iPhone 진단</div></a></li>
				<li><a href="FirstStep.php">iPhone 초보</a></li>
				<li><a href="#credits">사용자 Tip</a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="board.php">게시판</a></li>
			</ul>
		</div>
	</div>

   <div class="Test">
	<div class="Test_bar">		
		<ul id="tabs">
			<li><a class="current" href="#">외관 불량</a></li>
			<li><a href="#">버튼 동작</a></li>
			<li><a href="#">통화 품질</a></li>
			<li><a href="#">지속 확인</a></li>
			<li><a href="#">기타 확인</a></li>
		</ul>
		<span id="indicator"></span>
	</div>
	
	<div id="content">
	
		<section>				
			<h3>1.시리얼 넘버 확인</h3><br /><p>&nbsp;&nbsp;&nbsp;박스 뒷면의 일렬번호와 아이폰 기기의 일렬번호가 일치하는지 확인한다.(일렬번호 확인 : 설정->일반 ->정보)</p><br />
			<h3>2.스크레치 및 이물질</h3><br /><p>&nbsp;&nbsp;&nbsp;기기의 외관을 꼼꼼하게 살펴보고 스크레치가 있는지 그리고 이물질이 있는지 등을 확인한다.<br />&nbsp;&nbsp;&nbsp;(눈으로 너무 미세히 보이며 사진 촬영시 식별이 불가능 할 경우는 교환이 불가하다.)</p><br />
			<h3>3.인쇄 및 도장 상태 확인</h3><br /><p>&nbsp;&nbsp;&nbsp;각 버튼 및 로고 인쇄부가 벗겨져 있거나 삐딱하게 인쇄되어 있는 경우, 얼룩이 있는지 여부 확인.</p><br />
			<h3>4.침수라벨 확인</h3><br /><p>&nbsp;&nbsp;&nbsp;아이폰 이어폰 홀 및 충전단자를 빛으로 비추어 침수라벨을 확인한다. (붉은색 : 침수 / 흰색 : 정상)</p><br />
		</section>
	
		<section>		
			<h3>각 버튼의 정상 동작 여부를 검사합니다.</h3><br />
			<p><br />&nbsp;&nbsp;&nbsp;1. 좌측의 볼륙 '+'버튼을 눌렀을떄 볼륨이 정상적으로 올라가는지 체크한다.</p><br />
			<p>&nbsp;&nbsp;&nbsp;2. 좌측의 볼륙 '-'버튼을 눌렀을떄 볼륨이 정상적으로 내려가는지 체크한다.</p><br />
			<p>&nbsp;&nbsp;&nbsp;3. 매너 버튼을 동작시켰을때 정상적으로 진동이 오면서 무음모드로 동작하는지 확인한다.</p><br />
			<p>&nbsp;&nbsp;&nbsp;4. 홈버튼과 전원버튼을 동시에 물러 현재 화면이 그림으로 저장되는지 확인한다.</p><br />
			<p>&nbsp;&nbsp;&nbsp;5. 잠금화면에서 홈 버튼 더블 클릭시 음악재생 및 사진 카메라 아이콘이 뜨는지 확인한다.</p><br />
			<p>&nbsp;&nbsp;&nbsp;6. 잠금이 풀린 상태에서 더블 클릭시 최하단이 열리면서 멀티태스킹 화면이 뜨는지 확인한다.</p><br />
		</section>
		
		<section>
			<h3>통화 품질 감도를 측정합니다.</h3><br />
			<p><br />&nbsp;&nbsp;&nbsp;1. 통화버튼을 누른 후<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*3001#12345#*을 입력하고 전화걸기를 누르면 아이폰의 안테나 시그널이 숫자로 바뀌게 됩니다.</p><br /></p><br />
			<div class="callTest"><img src="img/callTest.png" /></div>
			<p>&nbsp;&nbsp;&nbsp;2. 하단의 평가 지표와 비교하여 통화품질 상태를 테스트하면 됩니다.<br />
			<div class="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;통화품질 높은 값 : -70이상</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;통화품질 보통 값 : -70 ~ -90<br />
			<div class="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;통화품질 낮은 값 : -100이하</div></p><br /><br />
			<p>&nbsp;&nbsp;&nbsp;* 엘리베이터등 수신율이 떨어지는 곳에서의 테스트는 정확한 데이타가 아닙이다.</p><br />
			<p>&nbsp;&nbsp;&nbsp;*시그널 원복 방법*<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;홈 버튼을 눌러준다. 그래도 월복이 안되면 상단의 전화번호로 다시 한번 전화를 건다.</p><br />
		</section>
		
		<section>
			<h3>아이폰 및 스마트폰은 무수한 소형 부품 및 센서들로 이루어져 있으며 충격에 쉽게 망가질 수 있습니다.<br />
				지속적인 확인과 AS정책 숙지로 소비자의 권리를 당당하게 찾아갑시다.</h3><br />

			<p>&nbsp;&nbsp;&nbsp;* 지속확인이 필요한 테스트<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.불량화소 및 불량픽셀 테스트<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.통화 품질 테스트<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.센서 테스트</p>
			<p>* Tip : AS기간을 잘 숙지하여 교환기간 마감일 및 무상수리기간 마감일 일주일전에는<br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;꼭 테스트 해주실 것을 권장합니다.</p>
		</section>
		
		<section>
			<h3>카메라 테스트</h3><br />
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. 전/후면 카메라가 전환 잘되는지 확인<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. 카메라로 사물을 비췄을때 포커스를 자동으로 잡는지 확인<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. 전/후면 카메라로 사진을 찍어 렌즈에 이물질 여부를 확인<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. 카메라 줌 동작 확인</p><br />
				<h3>사운드 테스트</h3><br />
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.일반 -> 사운드 ->벨소시 설정으로 진입 후 벨소리를 들어보고 사운드의 찢어짐 및 노이즈 여부 확인<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.통화를 걸어 스피커폰으로 전환이 잘 되는지 여부 확인 및 음질 확인.</p><br />
			<h3>마이크 테스트</h3><br />
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;기본 어플인 음성메모를 실행하여 음성을 녹취하고 들었을 때 음성에 노이즈나 끊어짐이 있는지 확인</p><br />
			<h3>3G <-> WiFi 전환 테스트</h3><br />
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;개통이 완료되면 3G와 WiFi를 접속하여 정상적으로 전환이 되는지 확인</p><br />
		</section>			
		
	</div>
	</div>


		<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>

</body>

</html>