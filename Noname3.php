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
				<li><a href="#credits">사용자 Tip</a></li>
				<li><a href="#credits">APP 추천</a></li>
				<li><a href="#credits">ACC 추천</a></li>
				<li><a href="board.php">게시판</a></li>
			</ul>
		</div>
	</div>
	<div class="first">
<div class="container">

	<h2 class="acc_trigger"><a href="#">Web Design &amp; Development</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3>Need a Website?</h3>
			<a href="#"><img src="img1.gif" alt="" /></a>

			<p>Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum. Lenis vel diam praemitto molior facilisi facilisi suscipere abico, ludus, at. Wisi suscipere nisl ad capto comis esse, autem genitus. Feugiat immitto ullamcorper hos luptatum gilvus eum. Delenit patria nunc os pneum acsi nulla magna singularis proprius autem exerci accumsan. </p>
			
			<p>Praesent duis vel similis usitas camur, nostrud eros opes verto epulae feugiat ad. Suscipit modo magna letalis amet et tego accumsan facilisi, meus. Vindico luptatum blandit ulciscor mos caecus praesent sed meus velit si quis lobortis praemitto, uxor. </p>
		</div>
	</div>
	
	<h2 class="acc_trigger"><a href="#">Logo / Corporate Identity</a></h2>
	<div class="acc_container">
		<div class="block">

			<h3>Need a Logo?</h3>
			<a href="#"><img src="img2.gif" alt="" /></a>
			<p>Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum. Lenis vel diam praemitto molior facilisi facilisi suscipere abico, ludus, at. Wisi suscipere nisl ad capto comis esse, autem genitus. Feugiat immitto ullamcorper hos luptatum gilvus eum. Delenit patria nunc os pneum acsi nulla magna singularis proprius autem exerci accumsan. </p>
			
			<p>Praesent duis vel similis usitas camur, nostrud eros opes verto epulae feugiat ad. Suscipit modo magna letalis amet et tego accumsan facilisi, meus. Vindico luptatum blandit ulciscor mos caecus praesent sed meus velit si quis lobortis praemitto, uxor. </p>
		</div>
	</div>
	
	<h2 class="acc_trigger"><a href="#">Seach Engine Optimization</a></h2>

	<div class="acc_container">
		<div class="block">
			<h3>Need to be Heard?</h3>
			<a href="#"><img src="img3.gif" alt="" /></a>
			<p>Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum. Lenis vel diam praemitto molior facilisi facilisi suscipere abico, ludus, at. Wisi suscipere nisl ad capto comis esse, autem genitus. Feugiat immitto ullamcorper hos luptatum gilvus eum. Delenit patria nunc os pneum acsi nulla magna singularis proprius autem exerci accumsan. </p>
			
			<p>Praesent duis vel similis usitas camur, nostrud eros opes verto epulae feugiat ad. Suscipit modo magna letalis amet et tego accumsan facilisi, meus. Vindico luptatum blandit ulciscor mos caecus praesent sed meus velit si quis lobortis praemitto, uxor. </p>
		</div>

	</div>
	
	<h2 class="acc_trigger"><a href="#">eCommerce</a></h2>
	<div class="acc_container">
		<div class="block">
			<h3>Have Product to Sell?</h3>
			<a href="#"><img src="img4.gif" alt="" /></a>
			<p>Consequat te olim letalis premo ad hos olim odio olim indoles ut venio iusto. Euismod, sagaciter diam neque antehabeo blandit, jumentum transverbero luptatum. Lenis vel diam praemitto molior facilisi facilisi suscipere abico, ludus, at. Wisi suscipere nisl ad capto comis esse, autem genitus. Feugiat immitto ullamcorper hos luptatum gilvus eum. Delenit patria nunc os pneum acsi nulla magna singularis proprius autem exerci accumsan. </p>

			
			<p>Praesent duis vel similis usitas camur, nostrud eros opes verto epulae feugiat ad. Suscipit modo magna letalis amet et tego accumsan facilisi, meus. Vindico luptatum blandit ulciscor mos caecus praesent sed meus velit si quis lobortis praemitto, uxor. </p>
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