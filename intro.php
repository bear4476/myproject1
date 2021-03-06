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
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#step li").each(function (i) {
				i = i+1;
				$(this).addClass("item"+i);
		   });
		   
		   $("#number li").each(function (i) {
				i=i+1;
				$(this).addClass("num"+i);
		   });

			$("#commentlist li").each(function (i) {
				i = i+1;
				$(this).prepend('<span class="commentnumber"> #'+i+'</span>');
		   });

		});
</script>
</head>

<body>
   <?
 require_once('header.php');
?>
	<nav><br />
	<div id="header-wrapper">
		<div class="wrapper">
			<span class="title"><img src="logo_apple.png" border="0" /> &nbsp&nbsp</span>
			<ul class="navigation">
				<li><a href="index.php">Home</a></li>
				<li><a href="intro.php"><div class="point1">iPhone 소개</div></a></li>
				<li><a href="Test.php">iPhone 진단</a></li>
				<li><a href="FirstStep.php">iPhone 초보</a></li>
				<li><a href="#credits">사용자 Tip</a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="board.php">게시판</a></li>
			</ul>
		</div>
	</div>
	<div class="nav_bar">
		<ul>
			<li><a href="intro.php"><strong>iPhone 이란?</a></li>
			<li><a href="intro1.php">iPhone 1세대</a></li>
			<li><a href="intro2.php">iPhone 3G & 3GS</a></li>
			<li><a href="intro3.php">iPhone 4 & 4S</a></li>
			<li><a href="intro4.php">iPhone 5</strong></a></li>
		</ul>
	</div>
	</nav>
<br />
	<article>
		<img src="img/iPhone2.PNG" border="0" />
	   <ol id="step">
	<li>
		<h3>iPhone 이란?</h3>
		<p>애플사에서 개발한 인터넷과 멀티미디어 사용이 가능한 스마트폰을 말한다. 최초의 아이폰은 2007년 1월 9일에 출시되었다. 아이폰은 비디오 카메라, 카메라, 문자, 화상음성메일, 휴대용 미디어플레이어로 기능할 뿐만 아니라 Wi-Fi와 3G망에 연결함으로써 이메일과 웹 브라우징이 가능하다. 가상 키보드를 포함해 멀티 터치스크린을 사용하는 유저 인터페이스를 갖는다. 2008년 중반에 앱스토어를 통해 앱 애플리케이션의 사용이 가능해 짐으로써 스마트폰의 다양한 기능이 가능해 졌다. 애플리케이션은 게임, GPS 내비게이션, 사회 연결망 등을 포함한다. 아이폰 모델은 2011년 초 현재까지 4세대가 존재하며, 아이폰 OS에 따라 분류된다.</p>
	</li>
	<li>
		<h3>iPhone의 역사</h3>
		<p>2007년 6월, 애플의 야심작 아이폰이 처음으로 세상에 모습을 드러냈다. 아이폰은 터치스크린 방식의 아이팟에 휴대전화, 카메라, GPS, 무선인터넷 기능을 합친 스마트폰이다. 모바일 운영체제 iOS가 탑재되어 누구나 쉽게 조작할 수 있으며, 애플의 애플리케이션 장터인 앱스토어에서 수십만 개의 애플리케이션을 내려받을 수 있다.<br /><br /> 
아이폰은 역대 스마트폰 중 가장 빠른 속도로 팔려나가며 ‘아이폰 열풍’을 일으키기 시작했다. 초기 아이폰의 가격은 8GB 모델의 경우 무려 599달러. 얼마나 팔릴지 몰라 손익분기점을 맞추기 위해 가격을 높게 잡았기 때문이다. 하지만 아이폰이 엄청난 인기를 끌자 애플은 두 달만에 아이폰의 가격을 399달러로 낮추고 대량생산에 들어갔다. 2007년 11월 영국, 프랑스, 독일에서도 판매를 개시하면서 본격적으로 판매량에 가속도가 붙기 시작했다. 이듬해에는 아일랜드와 오스트리아로 판매망을 넓혔다.<br /> <br />
이후 애플은 1년 주기로 새로운 아이폰을 내놓기 시작했다. 2008년에는 ‘아이폰 3G’를, 2009년에는 ‘아이폰 3Gs’를, 2010년에는 ‘아이폰 4’를 출시했다. 2011년 하반기에는 5번째 아이폰인 ‘아이폰 4S’가 선보일 예정이다. 애플은 새로운 아이폰이 나올 때마다 판매 국가를 늘려나갔으며, 한국에는 2009년 11월 아이폰 3Gs를 처음 선보였다. 아이폰은 국가를 막론하고 선풍적인 인기를 끌었다. 2011년 4월을 기점으로 아이폰 시리즈의 전 세계 누적 판매량은 1억 대를 돌파했다.
 </p>
	</li>

	<li>
		<h3>iPhone의 특징</h3>
		<ol id="number">
	<li>
		<h3>정전식 터치 스크린</h3>
		<p>아이폰은 정전기를 이용한 터치 방식인 정전식 터치스크린을 채택했다. 따라서 손톱이나 펜으로는 조작할 수 없지만, 멀티 터치가 가능하다. 또한 화면을 스치듯 만져도 입력이 가능하기 때문에 스마트폰처럼 작은 화면에 효과적이다. 아이폰이 인기를 끌자 이후 등장한 스마트폰들도 정전식 터치 스크린을 주로 사용하기 시작했다.</p>
	</li>
	<li>
		<h3>iPhone OS(iOS)</h3>

		<p>애플은 직관적인 조작성을 강점으로 내세운 iPhone OS를 아이폰에 탑재했다. 화면의 아이콘을 손가락으로 건드리기만 하면 애플리케이션이 실행된다. 세계 최대의 애플리케이션 장터인 애플의 앱스토어에서 필요한 애플리케이션을 내려받을 수 있다. 하지만 애플 기기에서만 사용할 수 있다는 폐쇄성 때문에 사용자들의 원성을 사기도 한다. </p>
	</li>
	<li>
		<h3>사파리 웹 브라우저</h3>
		<p>아이폰에는 애플이 자체 개발한 웹브라우저인 사파리가 탑재됐다. 멀티 터치를 지원하며 아이폰을 옆으로 눕히면 웹페이지도 방향을 바꾼다. 또한 방문한 웹사이트를 기록하거나 책갈피로 저장할 수 있다. 보안이 뛰어난 대신 플래시나 액티브X를 지원하지 않는다.  </p>
	</li>
	<li>
		<h3>내장배터리</h3>
		<p>아이폰이 매끄러운 디자인을 갖게 된 이유 중 하나는 일체형 배터리를 사용했기 때문이다. 배터리를 교체해서 사용할 수 없기 때문에 수시로 충전을 해야 하며, 만일 배터리를 교체하려면 애플의 AS 센터를 방문해 적지 않은 비용을 지불해야 한다. 아이폰의 배터리를 약 400번 가량 사용하면 성능이 떨어지기 시작한다. </p>
	</li>
</ol>
	</li>
</ol>

<ol id="commentlist">

	<li>
		<p><cite>스티븐잡스(포춘과의 인터뷰 中):</cite></p>
		<p class="time"> </p>
		<p>“종전에 쓰던 휴대전화는 사용하기에 불편했다. 소프트웨어는 끔찍했고 하드웨어는 별볼일 없었다. 친구들에게 물어봤더니 다들 비슷한 생각을 가지고 있었다. 이것은 엄청난 기회였다. 그렇다면 모두가 사랑할 수밖에 없는 이상적인 휴대전화를 만들어 보자. 우린 아이팟을 통해 쌓은 기술력과 매킨토시용 운영체제를 보유하고 있지 않은가. 하지만 휴대전화 안에 정교한 운영체제를 넣을 수 있을 지가 문제로 떠올랐다. 회사 내에서도 가능하다/불가능하다 의견이 분분했고, 결국 내가 결단을 내렸다. 우리 한 번 해보자. 그리고 결국 해냈다.” </p>
	</li>
</ol>
	</article>

	<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>

</body>

</html>