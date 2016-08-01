<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<div class="content con0">
<p>
	<button class="prev"> - </button>
	<button class="next"> + </button>
</p>
<div class="txtbox">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
<style>
.con0 button{	padding:30px 50px;font-size: 20px;}
.con0 .txtbox{margin-top: 20px;border: 1px solid #000;padding: 20px;font-size: 14px;line-height: 1.8;width: 600px;}
</style>
<script>
$(function(){
	//var size =$('div').css('font-size');
	//size=parsInt(size)
	var size=14
	$('.con0 .prev').click(function(){
		
		size= size-1;
		$('.con0 .txtbox').css('font-size',size)
	})
	$('.next').click(function(){
		size=size+1;
		$('.con0 .txtbox').css('font-size', size)
	})
});
</script>
</div>
<div class="content con1">
<div></div>
<p>
	<button>증가</button>
	<button>감소</button>
</p>
<style>
.con1 div{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position:relative;
	margin: 20px;
	background: red;
}
</style>
<script>
$(function(){
	///////// jquery시작
	var tx = 0 ;
	var ty = 0 ;
	
	var w =$('.con1 div').css('width')
	w = parseInt(w)
	var h =$('.con1 div').css('height')
	h = parseInt(h)
	$('.con1 button').eq(0).click(function(){
		tx -= 10 //tx-=10
		ty -= 10

		$('.con1 div').css('left',tx).css('top',ty)
	
		console.log(tx)
		
	})	
	
	$('.con1 button').eq(1).click(function(){
		tx += 10
		ty += 10
		
		w += 10
		h += 10
		
		$('.con1 div').css('left',tx).css('top',ty).css('width',w).css('height',h)
	})
	///////// 끝
})

</script>
</div>
<div class="content con2">
	<style>
div{
	width: 300px;height: 100px;font-size: 50px;line-height: 2;text-align: center;border-bottom: 1px solid #000;
	
}

.menulist{ margin-top: 30;}
.menulist li {
	float: left;width: 25px;height: 25px;margin: 10px;background: green;border-radius:50%;
}
.menulist li.on{
	background: orange;
}
.imgview {
	width: 100px;
}

	</style>
	<script>
		$(function(){
			///////// jquery시작
			var $li = $('.menulist li');
			var num = 0
			$('button:eq(0)').click(function(){
				num++
				num= num%5 //한계선 다시 0 돌아가게 설정
				imgURL = '../images/cat'+ num +'.jpg';
				
				//var $변수 = $경로
				
				
				
				$('.txtbox').text(num)
				$li.removeClass('on')
				$li.eq(num).addClass('on')
				
				$('.imgview img').attr('src', imgURL ).hide().fadeIn()
				
				
			})
			$('button:eq(1)').click(function(){
				num--;
				num=num%5
				imgURL = '../images/cat'+ num +'.jpg';
				
				$('.txtbox').text(num)
				$li.removeClass('on')
				$li.eq(num).addClass('on')
				
				$('.imgview img').attr('src', imgURL ).hide().fadeIn()
				
			})
			
			
			$('.menulist li').click(function(){
				num=$(this).index();
				imgURL = '../images/cat'+num+'.jpg';
				$li.removeClass('on')
				$(this).addClass('on')
				$('.txtbox').text(num)
				$('.imgview img').attr('src',imgURL).hide().fadeIn()
				
			})
			
			
			
			
			
			///////// 끝
			
		})
		
		
	</script>

	<div class="txtbox"></div>
	<p>
		<button>증가</button>
		<button>감소</button>
		
	</p>
	<ul class="menulist clearfix">
		<li class="on"></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
	<p class="imgview">
		<img src="../images/cat0.jpg" alt="고양이" />
	</p>
</div>
<div class="content con3">
	<style>
	.con3 ul li{
		width: 400px;height: 40px;margin-bottom: 5px;background: red; position: relative;;;
	}
	
	


	</style>
	<script>
	$('.con3').each(function() {
		$(function(){
			///////// jquery시작
			$('ul li').css('opacity','0').css('left','-420px')
			$('ul li').eq(0).animate({
				'opacity':'1',
				'left':'100px'
			},300 ).animate({
				'left':'-20px'
			},300 ).animate({
				'left':'40px'
			},300 ).animate({
				'left':'0'
			},300 )
			$('ul li').eq(1).delay(200).animate({
				'opacity':'1',
				'left':'100px'
			},300 ).animate({
				'left':'-20px'
			},300 ).animate({
				'left':'40px'
			},300 ).animate({
				'left':'0'
			},300 )
			$('ul li').eq(2).delay(400).animate({
				'opacity':'1',
				'left':'100px'
			},300 ).animate({
				'left':'-20px'
			},300 ).animate({
				'left':'40px'
			},300 ).animate({
				'left':'0'
			},300 )
			$('ul li').eq(3).delay(600).animate({
				'opacity':'1',
				'left':'100px'
			},300 ).animate({
				'left':'-20px'
			},300 ).animate({
				'left':'40px'
			},300 ).animate({
				'left':'0'
			},300 )
			$('ul li').eq(4).delay(800).animate({
				'opacity':'1',
				'left':'100px'
			},300 ).animate({
				'left':'-20px'
			},300 ).animate({
				'left':'40px'
			},300 ).animate({
				'left':'0'
			},300 )
			$('ul li').eq(5).delay(1000).animate({
				'opacity':'1',
				'left':'100px'
			},300 ).animate({
				'left':'-20px'
			},300 ).animate({
				'left':'40px'
			},300 ).animate({
				'left':'0'
			},300 )
			///////// 끝
			
		});
	});
		
	</script>
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<div class="content con4">
	<style>
	.con4 .popwrap{
		width: 800px;height: 300px;border: 1px solid #000;
		background: #995511;position: absolute;left: 20%;
		top: -320px;z-index: 100;
	}
	.con4 button{width: 100px;height: 100px;font-size: 2em;}
	

	</style>
	<script>
	$('.con4').each(function(){
		
		$(function(){
			var isplay= false;
			
			$('button').text('열기')
			
			$('button').on('click',function(e){
				if(isplay == false){ //if ( !isplay )
					$(this).text('닫기')
					$('.popwrap').animate({top:10},400,'easeOutCirc')
					isplay = true
				}else{
					$(this).text('열기')
					$('.popwrap').animate({top:-320},600,'easeOutCirc')
					isplay = false 
					/*
					isplay = !isplay 
					isplay = !true ->false
					isplay = !false ->true
					*/
				}
			});
			///////// 끝
		});
	});
		
	</script>
	
	<div class="popwrap"></div>
	<button>전체메뉴</button>
</div>
<div class="content con5">
	<style>
.con5 .photolist{width: 1200px;margin: auto;}
.con5 .photolist li{float: left;margin: 15px;}
.con5 .photolist li:nth-child(4n){margin-right: 0px;}
.con5 .photolist li a{display: block;}
.con5 .photolist li a img{transition:0.5s}
.con5 .photolist li a:hover img{opacity: 0.6}

	</style>
	<script>
	$('.con5').each(function(){
		$(function(){
			///////// jquery시작
			$('.photolist li').css('opacity','0')
			
			for(var i=0;i<=9;i++)
			
			$('.photolist li').eq(i).delay(i*100).animate({opacity:1},600)
			
			///////// 끝
			
		})
	});
		
	</script>
	
		<ul class="photolist">
			<li><a href="#"><img src="../images/cat0.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat1.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat2.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat3.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat4.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat5.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat6.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat7.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat8.jpg" alt="" width="250" /></a></li>
			<li><a href="#"><img src="../images/cat9.jpg" alt="" width="250" /></a></li>
		</ul>
</div>

<div class="content con6">
<style>
.con6.bannerbox{position: relative;width: 1000px;}
.con6.bannerlist{position: absolute;left:15%;top: 10%;}
.con6.bannerlist li{float: left;margin-right: 15px;}
.con6.bannerlist li:last-child{margin-right: 0;}
.con6.bannerlist li a{}
.con6.bannerlist li img{}

.con6.btn{position: absolute;top: 100px;}
.con6.btn a{}
.con6.prev{left: 10%;}
.con6.next{right: 1%;}
</style>
<script>
	$('.con6').each(function(){
		$(function(){
			///////// jquery시작
			
			var last="";
			var first="";
			
			$('.next a').on('click',function(e){
				//맨뒤에 li를 떼어서 맨뒤에 붙이기
				first = $('.bannerlist li:first')
				$('.bannerlist').append(first)
			})
			$('.prev a').on('click',function(e){
				//맨뒤에 li를 떼어서 맨앞에 붙이기
				last = $('.bannerlist li:last')
				$('.bannerlist').prepend(last)
				
			})
			///////// 끝
		})
	});
		
	</script>
	
</head>
<body>
	<div class="bannerbox">
		<ul class="bannerlist clearfix">
			<li><a href="#"><img src="../images/m0.jpg" alt="" /></a></li>
			<li><a href="#"><img src="../images/m1.jpg" alt="" /></a></li>
			<li><a href="#"><img src="../images/m2.jpg" alt="" /></a></li>
			<li><a href="#"><img src="../images/m3.jpg" alt="" /></a></li>
		</ul>
		
		<p class="btn prev"><a href="#"><img src="../images/prev_page.gif" alt="" /></a></p>
		<p class="btn next"><a href="#"><img src="../images/next_page.gif" alt="" /></a></p>
		
	</div>
</div>



</body>
</html>