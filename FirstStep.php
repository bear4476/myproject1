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
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
		//Set default open/close settings
		$('.acc_container').hide(); //Hide/close all containers
		$('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

		//On Click
		$('.acc_trigger').click(function(){
			if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
				$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
				$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
			}
			return false; //Prevent the browser jump to the link anchor
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
				<li><a href="intro.php">iPhone 소개</a></li>
				<li><a href="Test.php">iPhone 진단</a></li>
				<li><a href="FirstStep.php"><div class="point1">iPhone 초보</div></a></li>
				<li><a href="SecondStep.php">사용자 Tip</a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="newsboard.php">게시판</a></li>
			</ul>
		</div>
	</div>
	<div class="first">
<div class="container">

	<h2 class="acc_trigger"><a href="#">아이폰(iPhone)에 있는 수 많은 버튼들! 어떻게 사용해야 할까 ?</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/button1.png" />홈버튼</h3>

			<p>아이폰 중앙 하단에 존재하는 버튼으로 주요기능이 홈으로 돌아가는 기능이기에 홈버튼이라고 불린다.<br />
				이 홈버튼이 홈으로 돌아가는 기능 외 다른 기능이 있는지에 대해 알아보자. </p>
			
			<p>1.잠금화면에서 더블클릭 : 상측에 음악재생 메뉴가 뜨며, 하단쪽에 카메라로 바로가기 메뉴를 띄운다.<br />
				2. 홈버튼을 꾸욱 누르고 있을때 : 음성인식화면을 띄워준다.(Siri가 ON상태일때는 음성인식 화면이 아닌 Siri를 띄운다.)<br />
				3. 잠금해제화면에서 더블클릭 : 멀티태스킹화면을 띄워준다.<br /></p><br />

			<h3><img src="img/button2.png" />락버튼</h3>

			<p>아이폰 상단에 있는 버튼으로 잠금화면으로 돌아간다하여 락버튼 혹은 슬림버튼이라 부른다.</p>
			
			<p>1.락버튼을 누른상태에서 홈버튼을 누름 : 현재 아이폰의 화면을 캡쳐하여 사진에 저장한다.<br />
				2.락버튼을 2~3초간 누르고 있으면 전원을 ON 또는 OFF시킬 수 있다.<br /></p><br />

			<h3><img src="img/button3.png" />볼륨버튼 & 진동버튼<img src="img/button4.png" /></h3>

			<p>1.아이폰의 측면에 위치하며 볼륨을 변화시켜주 진동버튼은 아이폰을 매너모드로 전환시켜 준다.</p><br />
			<h3><img src="img/button5.png" />이어폰</h3>

			<p>1. 전화가 왔을때 중앙클릭 : 전화가 받아진다.<br />
				2. 중앙을 2~3초 누름 : 음성인식화면을 띄워준다.(Siri가 ON상태일때는 음성인식 화면이 아닌 Siri를 띄운다.)<br />
				3. 중앙을 한번 클릭 : 음악을 재생 시킨다.<br />
				4. 음악 재생중 더블클릭 : 다음 재생목록 음악으로 넘어간다.<br />
				5. 음악 재생중 트리플 클릭 : 이전 재생목록 음악으로 넘어간다.<br />
				6. 음악 재생중 더블클릭 하고 두번째 클릭한것을 꾸욱 누르고 있으면 앞으로 빨리감기가 실행된다.<br />
				7. 음악 재생중 트리플클릭하고 세번째 클릭한것을 꾸욱 누르고 있으면 뒤로 빨리감기가 실행된다.</p>

	</div>
	</div>
	
	<h2 class="acc_trigger"><a href="#">아이폰(iPhone)을 쓰기 위해 필요한 iTunes 계정 만들기의 모든것!</a></h2>
	<div class="acc_container">
		<div class="block">

			<h3><img src="img/아이튠즈.png" />계정만들기</h3>
			<p><img src="img/itunes.jpg" /></p>
		</div>
	</div>
	
	<h2 class="acc_trigger"><a href="#">집에서 WiFi(와이파이)를 사용하려면 어떻게 해야할까 ?</a></h2>

	<div class="acc_container">
		<div class="block">
			<h3><img src="img/wifi.png" />WiFi 키는 방법</h3>
			<p>1. 기본어플 중 "설정"에 해당하는 어플을 클릭한다.<br />
				2. 클릭 후에 화면에 "WiFi"라고 써진 곳을 찾아 킨다.<br />
				3. WiFi가 켜지면 네트워크들이 뜨는데 이들 중 자신의 공유기이름을 찾아 설정하면 된다.</p><br />
			
			<h3>공유기 설정 방법</h3>
			
			<p>1. 인터넷 무선공유기를 구입한다. (공동구매가 : 12,000원)<br />
				2. 공유기에 전원을 연결하고 컴퓨터에 연결된 랜선을 공유기 WAN이라고 되어있는 곳에 꼽는다. (무선연결 완료!)<br />
				3. 공유기에 들어있는 랜선을 공유기 뒷편 LAN1,2,3,4 아무곳이나 연결하고 남은 반대쪽을 컴퓨터에 연결한다.<br />
				4. 공유기에 기재된대로 공유기의 비밀번호를 바꿔준다.(바꾸지 않거나 비밀번호가 없을 시 WiFi가 느려질 수 있음)<br />
				5. 휴대폰 와이파이 목록에 설치한 공유기이름이 잡히면 설정한 비밀번호를 입력한 후 사용한다.</p>
		</div>

	</div>
	
	<h2 class="acc_trigger"><a href="#"> App을 다운받기 위해선 어떻게 해야 할까 ?</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/app.png" />APP 다운 방법</h3>
			<p>스마트 폰을 사면 다 한다는 카카오톡 그리고 재미있는 게임어플들! 하고싶지만 다운받는 방법을 모르는 사용자를 위한 설명!</p>
			
			<p>1. 아이폰 기본 어플인 App Store에 들어간다.<br />
				2. 추천으로 올라온 어플이나 검색을 통해 다운받을 어플을 정한다.<br />
				3. 다운받을 어플을 클릭하면 상단 우측에 무료 또는 유료라고 써진 박스를 클릭한다. <br />
				4. 박스가 초록색 바탕으로 바뀌며 App 설치라는 버튼으로 바뀌면 이를 클릭한다.<br />
				5. 자신의 계정 ID와 암호를 입력한 후 승인 버튼을 누르고 기다리면 App이 다운받아 진다.<br />
				6. 화면으로 돌아가 다운받아진 App을 실행한다.</p>
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">내 아이폰(iPhone)에 넣을 벨소리를 직접 만들어 보자!</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/music.png" />iTunes로 벨소리 만들기</h3>
			<p>1.아이튠즈를 실행하고 파일->보관함에 파일추가를 눌러 벨소리 만들 음악을 불러온다.<br /><br /><img src="img/m1.png" /></p><br />
			<p>2. 불러온 음악을 마우스 오른쪽 버튼으로 클릭한 후 "등록정보"를 누른다.<br /><br /><img src="img/m2.png" /></p><br />
			<p>3. 벨소리를 만들 구간을 설정하여 "시작시간"과 "정지시간"에 시간을 입력한 후 확인 버튼을 누른다.<br /><br /><img src="img/m3.png" /></p><br />
			<p>4. 2번과 마찬가지로 음악를 오른쪽 버튼으로 클릭하고 "AAC버전생성"을 누면 보관함에 같은 이름의 파일 하나가 생성되는데, <br />
				　생성된 음악파일을 아래의 그림과 마찬가지로 바탕화면으로 드래그 합니다.<br /><br /><img src="img/m4.png" /></p><br />
			<p>5. 바탕화면으로 드래그 된 음악파일을 마우스 오른쪽 버튼으로 눌러 이름바꾸기를 실행하여 <br />
			　확장자를 "m4a"에서 "m4r"로 바꿔주면 벨소리 완성!<br /><br /><img src="img/m5.png" /></p><br />
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">나의 아이폰(iPhone)에 이름을 붙여보자 !</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/설정.png" />iPhone에 이름 붙이기</h3>
			<p>아이폰을 아이튠즈에 연결시켰을때 아이튠즈 사이드 바를 보면 iPhone이라고 표시가 된다.<br />
				하지만 iPhone은 싫고 자신의 iPhone이라는 표시를 할 수 있게 간단하게 변경할 수 있다.</p>

			<p>1. 아이폰의 기본어플인 설정으로 들어가 "일반"을 클릭한다.<br /><br /><img src="img/n1.png" /></p><br />
			<p>2. "일반"에서 제일 상단에 "정보"를 클릭한다.<br /><br /><img src="img/n2.png" /></p><br />
			<p>3. 제일 상단에 "이름"을 클릭하여 나만의 아이폰에 이름을 붙여주면 끝! (저는 다요니의 iPhone이라고 했습니당 *^^*;)<br /><br /><img src="img/n3.png" /></p><br />
			<p>4. 아이튠즈에 연결했을때 이름이 바뀐것을 볼 수 있다.<br /><br /><img src="img/n4.png" /></p><br />
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">아이폰(iPhone)에 벨소리 & 동영상을 넣어보자!</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/music.png" />벨소리 넣기</h3>
			<p>1. 아이폰을 아이튠즈에 연결하고 왼쪽 사이드바에 소리를 클릭한다.<br /><br /><img src="img/v1.png" /></p><br />
			<p>2. 소리를 클릭했으면 파일->보관함에 파일 추가를 클릭한다.<br /><br /><img src="img/v2.png" /></p><br />
			<p>3. 추가된 벨소리를 드래그 하여 왼쪽 사이드바에 있는 장비 iPhone에 가져다 놓으면 된다. <br /><br /><img src="img/v3.png" /></p><br />
			<p>4. 아이폰에 설정->사운드에 들어가 벨소리가 잘 들어갔는지 확인한다.<br /><br /><img src="img/v4.png" /></p><br /><br />

			<h3><img src="img/video.png" />비디오 넣기</h3>
			<p>* 주의사항 : 인코딩이 되어 확장자가 .mp4로 되어있어야 아이폰에서 실행 가능하다.</p><br />
			<p>1. 아이폰을 아이튠즈에 연결하고 왼쪽 사이드바에 비디오를 클릭한다.<br /><br /><img src="img/vi1.png" /></p><br />
			<p>2. 비디오를 클릭했으면 파일->보관함에 파일 추가를 클릭한다.<br /><br /><img src="img/vi2.png" /></p><br />
			<p>3. 추가된 비디오 파일을 드래그 하여 왼쪽 사이드바에 있는 장비 iPhone에 가져다 놓으면 된다. <br /><br /><img src="img/vi3.png" /></p><br />
			<p>4. 벨소리와 다르게 비디오는 크기가 있다보니 시간이 소요된다. (조금만 기다리면 비디오가 아이폰에 들어간 것을 확인할 수 있다)<br /><br /><img src="img/vi4.png" /></p><br />
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">다운받은 APP을 삭제하는 방법 & APP폴더 만드는 방법</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/app_del.png" />App 삭제 하기</h3>
			<p>1. 삭제할 App을 길게 누르면 App옆에 X표시가 나타나며 App들이 흔들거린다.<br /><br /><img src="img/aa2.png" /></p><br />
			<p>2. X를 누르면 삭제를 진행하기 위해 새로운 창이 뜬다. <br /><br /><img src="img/aa5.png" /></p><br />
			<p>3. 삭제 버튼을 누르면 App이 삭제 된 것을 볼 수 있다.<br /><br /><img src="img/aa6.png" /></p><br /><br />

			<h3><img src="img/folder.png" />App 폴더 만들기</h3>
			<p>1. 폴더로 묶을 App들을 선택한다.<br /><br /><img src="img/aa1.png" /></p><br />
			<p>2. 선택한 App을 길게 누른다. (길게 누르면 App들이 흔들흔들 거리게 된다.)<br /><br /><img src="img/aa2.png" /></p><br />
			<p>3. 폴더에 같이 넣을 다른 App에 드래그 하여 가져다 넣는다. <br />
				　( * Tip : 게임이라고 써진 박스를 클릭하면 폴더 이름도 임의로 지정할 수 있다.)<br /><br /><img src="img/aa3.png" /></p><br />
			<p>4. 폴더가 만들어 진 것을 볼 수 있다. <br /><br /><img src="img/aa4.png" /></p><br />
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">정말 간단하지만 잘 모르는 기능의 모든것 !</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/설정.png" />간단한 기능 정리</h3>
			<p>간단하지만 의외로 잘 모르는 경우가 있는 초보자 기능의 정리!</p><br />

			<h4>1. 써놓은 문자 중간부분을 수정하기</h4>			
			<p>중간에 띄워쓰기가 안되어 있으면 터치를 해도 커서가 이동하지 않는다.<br />
			　작성된 화면을 길게 터치하면 돋보기가 나오게 되는데 이때 원하는 위치로 이동시키면 된다.</p><br />

			<h4>2. 알맞는 크기로 화면 확대하기</h4>			
			<p>보고있는 화면에서 화면을 확대해서 보고싶다면 화면을 더블터치하면 확대된다.<br />
			　또 확대된 화면을 축소하고 싶다면 더블터치를 하게 되면 확대되었던 화면이 축소된다.</p><br />

			<h4>3. 아이폰에 있는 사진을 컴퓨터로 옮기기</h4>			
			<p>아이폰을 컴퓨터와 연결하면 팝업창이 하나 뜬다.<br />
			　이 팝업창에서 사진 비디오 가져오기를 클릭하여 원하는 사진을 컴퓨터로 옮길 수 있다.</p><br />

			<h4>4. 문자 자동수정 끄기</h4>			
			<p>편리한 기능으로 문자를 자동수정 해 주는 경우가 있는데 되려 이 기능이 더 불편하게 만들 수 있다.<br />
			이때 아이폰의 기본 App인 설정->일반->키보드에 가서 자동수정을 끄면 된다.</p><br />

			<h4>5. 문자에 이모티콘 사용하기</h4>			
			<p>카카오톡 같은 메신저가 아닌 문자에서 이모티콘을 사용하는 방법이 있다.<br />
			아이폰의 설정->일반->키보드->다국어키보드->새로운 키보드 추가->이모티콘을 선택하면 된다.</p><br />

			<h4>6. 보고있는 화면 캡쳐하기</h4>			
			<p>홈버튼을 누른상태에서 상측에 슬립버튼을 동시에 두르면 현재 보고있는 화면이 사진에 저장된다.</p><br />

			<h4>7.남은 배터리 확인하기</h4>			
			<p>설정->일반->사용내용->배터리 잔량 표기 켜기</p><br />

		</div>
	</div>
	
</div>
	</div>
	
	<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>
</body>
</html>