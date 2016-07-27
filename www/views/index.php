<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<div id="container">
<div class="wrap">
<div class="content">
<div class="section javascript">
<h2>Javascript</h2>
<script type="text/javascript" charset="utf-8">
document.write("<p>[덧셈]10+10=</p>");
	document.write(10+10);
document.write("<p>[더하기]'10'+'10'=</p>");

	document.write("<p>"+"10"+"10"+"</p>");
document.write("<p>[변수]</p>");
	name="David";
	document.write("<p>안녕하세요"+name+"입니다.</p>");
document.write("<p>[비교연산자]</p>");
	document.write(2==1);
	document.write(1==1);
	result = (1==2);
	if(result){
		document.write("참");
	}else{
		document.write("거짓");
	}
document.write("<p>[변수,비교]</p>");
	//password = prompt("비밀번호");
	// if(password==1111){
	// 	document.write("<p>안녕하세요.주인님</p>");
	// 	alert("사링해요. 주인님")
	// }else{
	// 	document.write("<p>누구세요?</p>");
	// 	alert("당신은 누구십니까?")
	// };
document.write("<p>[반복문]</p>");
	i=0;
	while(i<5){
		document.write("<li>hello wrold</li>");
		i=i+1;
	}
document.write("<p>[배열]</p>");
	list = new Array("one","two","three");
	document.write(list[2]);
	document.write(list.length);
document.write("<p>[배열,반복]</p>");
	list2 = new Array("최진혁","최유빈","한이람","한이은","이고잉");
	ii=0;
	while(i<list2.length){
		document.write("<li>"+list2[ii]+"</li>");
		ii= ii+1;
	}
document.write("<p>[함수]</p>");
	function a(){
		document.write("Hello JS Function");
	}
document.write("<p>[함수 실행]</p>");
	a();
document.write("<p>[함수의 입출력]</p>");
	function b(input){
		return input + 1;
	}
	document.write(b(6));
document.write("<p>[id에 class 추가하기]</p>");
	document.getElementById('header').className='em';



</script>

</div><!-- //section Javascript -->

<div class="section php">
<h2>PHP</h2>
<?php
echo "<p>[덧셈]10+10=</p>";
	echo 10+10;
echo "<p>[더하기]'10'+'10'=</p>";
	echo "<p>"."10"."10"."</p>"; 
echo "<p>[변수]</p>";
	$name="David";
	echo "<p>안녕하세요".$name."입니다</p>";
echo "<p>[비교연산자]</p>";
	var_dump(2==1);
	var_dump(1==1);
echo "<p>[변수,비교]</p>";
	$result = (1==2);
	if($result){
		echo "참";
	}else{
		echo "거짓";
	};
?>
<form action="8-2.php">
	<input type="text" name="password">
	<input type="submit" name="">

</form>
<?php
echo "<p>[반복문]</p>";
	$i = 0;
	while($i < 5){
		echo "<li>hello world</li>";
		$i = $i + 1;
	};
echo "<p>[배열]</p>";
	$list = array("one","two","three");
	echo $list[2];
	echo count($list);
echo "<p>[배열,반복]</p>";
	$list2 = array("최진혁","최유빈","한이람","한이은");
	$ii = 0;
	while($ii < count($list2)){
		echo "<li>".$list2[$ii]."</li>";
		$ii = $ii+1;
	};
echo "<p>[함수]</p>";
	function a(){
		echo "Hello PHP Function";
	};
echo "<p>[함수 실행]</p>";
	a();
echo "<p>[함수의 입출력]</p>";
	function b($input){
		return $input + 1;
	};
	echo b(6);

?>

</div><!-- //section PHP -->
<div class="section php2">
<h2>PHP의 실제 활용</h2>
<?php 
echo "<p>[GET 입출력]</p>";
	echo "<p>?id=1&name=ssw</p>";
	echo $_GET['name'].",".$_GET['id'];

echo "<p>id(1).txt파일의 내용을 출력</p>";
	if(empty($_GET['id']) == false){
		echo file_get_contents($_GET['id'].".txt");

	}





 ?>



</div>
<div class="section mysql">
	<h2>mySQL</h2>
<pre>
mysql moniter프로그램의 위치는 C:\xampp\mysql\bin 안에 mysql파일 이다.

mysql -hlocalhost -uroot -p
./mysql -hlocalhost -uroot -p

*** 비밀번호 변경
현재 비밀번호 확인
mysql> select host, user, password from user;
계정의 암호를 변경한다.
mysql> update user set password=password('asdf1234') where user='root';
***

**데이터베이스 목록보기**
show databases;
**test 데이터베이스를 utf8형식으로 생성**
CREATE DATABASE test CHARACTER SET utf8 COLLATE utf8_general_ci;
**test 데이터베이스에 접근**
use test;
**테이블 생성 명령어 **
CREATE TABLE `test_table`(`id` int(11) NOT NULL AUTO_INCREMENT,`title` varchar(100) NOT NULL, `created` datetime NOT NULL, PRIMARY KEY (id))ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...)

INSERT INTO `test_table` (`id`,`title`,`description`,`author`,`created`)
VALUES(1,`About Javasctipt`,`<h3>Desctiption</h3>\r\n<p>Javascript is a dynamic computer programming language. It is most commonlt used as part of web browsers, whose implementations allow client-side scripts to interact with the document content that is displayed.</p>\r\n<p>\r\n\Despite some naming, syntactic, and standard library similarities,Javascript and Java are otherwise unrelated and have very different semantics. The syntax of Javascript is actualy derived from C, while the semantics and design are influenced by the Self and Schene programming languages.\r\n</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href="http://en.wikipedia.org/wiki/Dynamic_HTML">Dynamic HTML and Ajax (programing)</a></li>\r\n <li><a href="http://en.wikipedia.org/wiki/Web_interoperability">Web interoperability</a></li>\r\n <li><a href="http://en,wikipedia.org/wiki/Web_accessibility">Web accessibility</a></li>\r\n </ul>\r\n', 'egoing', '2015-03-31 12:14:00');



</pre>
</div>



</div>
<!-- 
	<div class="spot"></div>
	<div class="snb">
		<div class="nav"></div>
	</div>
	<div id="content">
		<div class="path"></div>
		<div class="section"></div>
		<div class="section"></div>
	</div>
	<div class="aside">
		<div class="ad"></div>
		<div class="section"></div>
	</div>
 -->
</div><!-- // class=wrap -->
</div><!-- 	//container -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>