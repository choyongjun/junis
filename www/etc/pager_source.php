<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>원페이지</title>
	<link rel="stylesheet" href="../css/reset.css" media="all" />
	<link rel="stylesheet" href="../css/fonts.css" media="all" />
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui.min.js" charset="utf-8">
		
	</script>
	
	<style>
#wrap{width: 1400px;margin: auto;}
#header{width: 1400px;height: 80px;position: relative;position: fixed;z-index: 100;background: #fff;}
#header h1{position: absolute;left: 0;top: 20px;font-size: 30px;}
#nav{position: absolute;right: 0;top: 40px;}
#gnb{}
#gnb li{float: left;margin-left: 40px;}
#gnb li a {font-size: 18px;padding: 5px;display: block;transition: 0.4s;color:red}
#gnb li:hover a{color:skyblue}
#gnb li.on a{background: red;color:#fff}

#container{height: 100%;padding-top: 80px;}
#container:after{display: block;clear: both;content: '';}
.conbox{width: 1400px;position: relative;height: 800px;;}
.conbox h2{padding: 100px;font-size: 80px;opacity:0.3}

#contents1{background: red;}
#contents2{background: orange;}
#contents3{background: yellow;}
#contents4{background: green;}
#contents5{background: blue;}

footer{width: 1400px;height: 80px;background: #000;}
.bottomB{position: fixed;left: 85%;bottom: 0;}
.bottomB a{display: block;background: red;}

.nav{position: fixed;right: 10%;top: 40%;}
.nav ul {}
.nav ul li{margin-bottom: 10px;}
.nav ul li a{display: block;width: 70px;height: 15px;background: pink;overflow: hidden;text-indent: -999999em;}
.nav ul li.on a{background: purple;height:25px;}

	</style>
	<script>
		$(function(){
			///////// jquery시작
			var top=0 , cnt= 0
			var arrY = []
			
			for(var i = 0; i<=4 ; i++){
			arrY[i] = $('.conbox').eq(i).position().top
			}
			
			
			$('#gnb li').on('click',function(e){
				cnt= $(this).index()
				
				$('#gnb li').removeClass('on')
				$('#gnb li').eq(cnt).addClass('on')
				$('.nav li').removeClass('on')
				$('.nav li').eq(cnt).addClass('on')

				$('html,body').animate({
					scrollTop:arrY[cnt]-80
				},1500)
				return false
			})
			
			$('.nav li').on('click',function(e){
				cnt = $(this).index()
				
				top = $('.conbox').eq(cnt).position().top
				
				$('html,body').animate({
					scrollTop:top-80
				},1000)
				
				$('.nav li').removeClass('on')
				$('.nav li').eq(cnt).addClass('on')
				$('#gnb li').removeClass('on')
				$('#gnb li').eq(cnt).addClass('on')
				
				return false
			})
			
			
			///////// 끝
			
		})
		
		
	</script>
	
</head>
<body>
	<span class="hide" id="top">맨위</span>
	
	<div id="wrap">
		<header id="header">
			<h1>logo</h1>
			<nav id="nav">
				<ul id="gnb">
					<li class="on"><a href="#contents1">mainmenu</a></li>
					<li><a href="#contents2">mainmenu</a></li>
					<li><a href="#contents3">mainmenu</a></li>
					<li><a href="#contents4">mainmenu</a></li>
					<li><a href="#contents5">mainmenu</a></li>
				</ul>
			</nav>
			
			
		</header>
		<div id="container">
			<section class="conbox" id="contents1">
				<h2>제목1</h2>
			</section>
			<section class="conbox" id="contents2">
				<h2>제목2</h2>
			</section>
			<section class="conbox" id="contents3">
				<h2>제목3</h2>
			</section>
			<section class="conbox" id="contents4">
				<h2>제목4</h2>
			</section>
			<section class="conbox" id="contents5">
				<h2>제목5</h2>
			</section>
		</div>
		<footer id="footer">
			
		</footer>
		<div class="bottomB"><a href="#"><img src="../images/bt_top.png" alt="" /></a></div>
		
		<nav class="nav">
			<ul>
				<li class="on"><a href="#contents1">mainmenu</a></li>
				<li><a href="#contents2">mainmenu</a></li>
				<li><a href="#contents3">mainmenu</a></li>
				<li><a href="#contents4">mainmenu</a></li>
				<li><a href="#contents5">mainmenu</a></li>
			</ul>
		</nav>
		
		
	</div>		
	
	
</body>
</html>