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
				<li><a href="FirstStep.php">iPhone 초보</a></li>
				<li><a href="secondStep.php"><div class="point1">사용자 Tip</div></a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="newsboard.php">게시판</a></li>
			</ul>
		</div>
	</div>
	<div class="first">
<div class="container">
	
	<h2 class="acc_trigger"><a href="#">와이파이(WiFi) 비밀번호 공유하는 방법은 무엇일까?</a></h2>
	<div class="acc_container">
		<div class="block">
<h3><img src="img/kt.png" />KT와이파이 비밀번호</h3>
			<p>　KT SSID, KT_WLAN : 1234567890, 123456789a, 1234567890c<br />
			　KT QOOK AP : 1234567890</p><br />

			<h3><img src="img/sk.png" />SKT 와이파이 비밀번호</h3>
			<p>　T spot(SK) : sktelecom<br />
			　SK : a123456789<br />
			　SO070VOLP : 534f4b4354<br />
			　Tbroadnet : a123456789</p><br />

			<h3><img src="img/lg.png" />LGT(U+)와이파이 비밀번호</h3>
			<p>　MyLGnet, myLG070 : 123456789a, 987654321a, 1234567890, myLGNetfe07</p><br />

			<h3><img src="img/wifi.png" />Hellow D 와이파이 비밀번호</h3>
			<p>　HellowD:534f4b4354<br />
			　Hellowireless : 534f4b4354</p><br />

			<h3><img src="img/wifi.png" />Hellowireless와이파이 비밀번호</h3>
			<p>　534f4b4354</p><br />

			<h3><img src="img/mac.png" />맥도날드 와이파이 비밀번호</h3>
			<p>　16005252(매장 배달 번호)</p><br />

			<h3><img src="img/starb.png" />스타벅스 와이파이 비밀번호</h3>
			<p>　매장별 전화번호(영수증 참조)</p><br />

			<h3><img src="img/seven.png" />세븐일레븐 와이파이 비밀번호</h3>
			<p>　2127393302</p><br />

			<h3><img src="img/wifi.png" />tobis와이파이 비밀번호</h3>
			<p>　1234</p><br />

			<h3><img src="img/wifi.png" />KWI-BxxxxT(택시) 와이파이 비밀번호</h3>
			<p>　SHOW3382, password</p><br />
		</div>
	</div>
	
	<h2 class="acc_trigger"><a href="#">통화품질이 좋지 않은 아이폰! 전화통화가 안될때 대처방법은 ?</a></h2>

	<div class="acc_container">
		<div class="block">
			<h3><img src="img/call.png" />전화통화 대처방법</h3>
			<p>가끔 아이폰이 통화가 되지 않을 때가 있다. 통화가 안된다고 무턱대고 문제도 모른체 대리점에 달려가는 사용자를 위한 설명 </p><br />
			
			<p>1.네트워크 재 설정을 한 후 다시 한번 통화를 시도 해 본다.<br />
				2.백업->복원 작업을 한 후 다시 한번 통화를 시도 해 본다.<br />
				3.국번없이 114전화해서 통화품질 테스트 받아보기<br />
				4.아이폰 기술 지원부 1544-2662번으로 전화해서 기계 문제인지 확인하기</p>
		</div>

	</div>
	
	<h2 class="acc_trigger"><a href="#"> 소프트웨어 오작동시 공장초기화하는 방법! </a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/설정.png" />초기화방법!</h3>
			<p>스마트 폰을 사면 다 한다는 카카오톡 그리고 재미있는 게임어플들! 하고싶지만 다운받는 방법을 모르는 사용자를 위한 설명!</p>
			
			<p>1 .iPhone을 컴퓨터와 usb케이블로 연결한다.<br />
			2. iTunes를 실행 한 후 장비가 잘 연결되었는지 확인한다.<br />
			3. 슬립버튼과 홈버튼을 동시에 10초 동안 누른다.<br />
			4. 애플 사과로고가 뜬 후 iPhone이 꺼진다.<br />
			이때 슬립버튼에서는 손을 떼고 홈버튼은 계속 누르고 있는다<br />
			5. "iTunes가 새로운 iPhone 소프트웨어 업데이트를 확인하도록 하겠습니까"라는 팝업이 실행되면<br />
			확인을 클릭한다.<br />
			7. 아이튠즈에 복원버튼을 누르면 "iTunes가 복구모드에 있는 iPhone을 발견했습니다. iTunes와 함께 사용하기 전에 이 iPhone을 복　원해야 합니다."라는 팝업창이 뜬다.<br />
			8. 초기화가 끝나면 처음 iPhone구입했던 것과 같은 화면이 실행된다.</p>
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">아이폰(iPhone)에 App설치시에 멈춤현상! 해결방법 ? </a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/설정.png" />App 설치시 멈춘 App 삭제방법</h3>
			<p>흔히 와이파이(20메가 이상인 App)/3G 데이터 수신이 안좋은 지역에서 App 업데이트 및 설치시 다운이 되어서 더이상 다운이 진행되지 않는 경우가 있다. 이때는 와이파이를 껏다가 다시잡거나 폰을 껏다가 키면 다시 복구되어 설치가 진행이 된다.하지만 그렇게 했는데도 불구하고 진행이 불가하거나, 업데이트도 안되고 그 찌꺼기들이 남아서 아이폰 용량을 잡아 먹고 있다.</p>

			<p><strong>그럴때 그 App의 삭제방법을 알아보자!</strong><br />
			정상시에는 로드중 / 설치중 / 일시정지중 이런식인데 에러가 나면 App이름이 뜬다.<br />
			<img src="img/stop0.png" /><br /><br /><br />
			http://www.macroplant.com/iphoneexploer/아이폰익스플로 설치 사이트 이다.<br /><br />
			<img src="img/stop3.png" /><br /><br /><br />
			맥이랑 PC버전으로 자신에게 맞는 버젼을 설치한다. 설치 후 컴퓨터에 아이폰을 연결하고 실행을 한다.<br /><br />
			<img src="img/stop4.png" /><br /><br />
			iPhone4/Media/Downloads 폴더로 가면 파일들이 보인다. jpg 파일을 클릭해서 보면 에러난 App아이콘 모양이 나온다.<br /><br />
			<img src="img/stop5.png" /><br /><br />
			여기서 그냥 다운로더 폴더에 있는 파일을 모두 삭제한다.<br />
			그리고 아이폰을 재부팅하면 설치하다 실패한 App이 없어진다!<br /><br />
			<strong>[출저]</strong>어플설치시 멈춤현상 또는 안보이는 업데이트 실패 파일 삭제.<br />
			(애플아이폰-[아이폰4s,아이패드2,아이폰,아이패드]"아사모")|<strong> 작성자 </strong> 디비지마라
			</p>
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">아이폰(iPhone)이 침수 되었을때! 대처방법 ? </a></h2>
	<div class="acc_container">
		<div class="block">
			<h3><img src="img/설정.png" />침수 시 대처방법</h3>
			<p>비싸게 구매한 나의 아이폰이 물에 빠졌을 때? 할부금보다 수리비가 더 남아있는 상황 ㅠㅠ<br />
			이에 침수시에 침수라벨은 변색되겠지만 폰을 살리는 방법은 있다!</p>

			<h4>(1)전원끄기</h4>
			<p>물에 아이폰이 빠졌을때 전원이 안꺼졌다면 바로 전원을 끄도록 한다.<br />
			그리고 배터리 및 유심칩 SD카드를 모두 분리하면 좋지만 아이폰은 분리가 되지않으니 생략!</p><br />

			<h4>(2)말리기</h4>
			<p>말릴때 중요한점은 절대 뜨거운 바람으로 말리면 안된다는 것이다.<br />
				자연상태의 바람(선풍기)이 가장 좋으며 드라이기를 사용할때는 가능한 멀리 사용하며 뜨거운 바람이 아닌 차가운 바람으로 말려야 한다.
</p><br />

			<h4>(3)기다리기</h4>
			<p>겉이 다 말랐다고 전원을 키거나 이제 동작하는지 궁금해서 전원을 키는 경우가 더러 있다.<br />
			문제가 없다가도 이렇게 전원을 켤때 문제가 발생하는 경우가 많다.<br />
			그러니 절대 1~2시간 말려서 전원을 키는 것이 아니라 적게는 하루 많게는 이틀정도 말린후 전원을 키는게 바람직 하다
			</p><br />


			<p>당연한 이야기이겠지만 대부분의 사람들이 이렇게 행동하지 않고 물에 빠졌을때 전원이 꺼진 경우 고장이 났나 싶어서<br />
			핸드폰을 키는 사람이 많은데 이렇게 핸드폰을 키다가 잘못하면 더 고장나 수리비가 들 수 있으니 조심해야한다.<br />
			따라서 잘 숙지해 두었다가 만약에 발생할 수 있는 상황을 대처하는게 바람직하다.</p>
		</div>
	</div>

	<h2 class="acc_trigger"><a href="#">아이폰(iPhone) 와이파이(Wifi) <-> 3G 쉽게 변동하기! </a></h2>
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

	<h2 class="acc_trigger"><a href="#">아이폰(iPhone) 버튼없이 사용하기 ! </a></h2>
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

	<h2 class="acc_trigger"><a href="#">SNS이용시 아이폰을 흔들어 입력취소 & 입력복귀하기2</a></h2>
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
	<div class="next_num">
	<a href="SecondStep2.php"><img src="img/next.png" /></a>
	</div>
	
	<footer>
		<div class="jo"><center>전남 여수시 둔덕동 전남대학교 여수캠퍼스 멀티미디어 (Tel: 061-659-1234)<br />
		Copyright &copy; 2013 | <a href="index-3.html">Dayeon,Jo</a>&nbsp; Tel:010-9898-3530 E-mail:bear4476@nate.com &nbsp;</center></div>
	</footer>
</body>
</html>