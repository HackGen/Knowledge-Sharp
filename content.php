<?php
$p = $_GET['a'];
if ($p == 1)
{
	$p=null;
}
else if( $p == 2)
{
	$p='project_list.html';
}
else if( $p == 3)
{
}
else if( $p == 4 )
{
	$p='grad_school.html';
}

?>
<html>
<head>
		<title>知識井 Knowledge Sharp</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	
<link rel="stylesheet" type="text/css" href="morecss/style_content.css" />
<script src="morejs/utils.js"></script>
<script src="morejs/flip-card.js"></script>
<style media="screen">
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="morejs/jquery.easing.1.3.js"></script>
<style type="text/css">
	ul {
		position: relative;
		left:20%;
		margin: 0;
		padding: 0;
		list-style: none;
	}

	ul li {
		float: left;
	}

	.aa {
		width: 150px;
		height: 50px;
		display: block;
		line-height: 50px;
		overflow: hidden;
		text-align: center;
		text-decoration: none;
		color: #fff;
		font-weight: bold;
	}

	ul li a div {
		color: #fff;
		line-height: 16px;
		font-weight: bold;
		margin-top: 73px;
		padding-top: 7px;
		border-top: 1px dotted #fff;
	}

	#t1{
	background: #08f2d6 url(01.gif);
	}
	#t2{
	background: #1209f1 url(picture/class.png);
	background-size: contain;
	background-repeat: no-repeat; 
	}
	#t3{
	background: #a202e2 url(picture/project.png);
	background-size: contain;
	background-repeat: no-repeat;
	}
	#t4{
	background: #f4e603 url(picture/prog.png);
	background-size: contain;
	background-repeat: no-repeat;
	}
	#t5{
	background: #55df07 url(picture/lab.png);
	background-size: contain;
	background-repeat: no-repeat;
	}

</style>
<script type="text/javascript">
	$(function(){
		// 幫 A 連結加上 hover() 事件
		$("ul li a").hover(function(){	// 當滑鼠移進時..
			// 先停止未完成的動畫再進行新的動畫
			// 展開完整的選項內容
			// 動畫效果加上 easeOutBounce
			$(this).stop().animate({
				height: 150
			}, 600, "easeOutBounce");
		}, function(){	// 當滑鼠移出時..
			// 先停止未完成的動畫再進行新的動畫
			// 隱藏選項下方的內容
			// 動畫效果加上 easeOutBounce
			$(this).stop().animate({
				height: 50
			}, 600, "easeOutBounce");
		}).focus(function(){	// 當 A 連結取得焦點時..
			// 讓本身失去焦點
			$(this).blur();
		});
	});
</script>
</head>
	<body>
	<div id="header">
	</div>
	<ul>
		<li>
			<a id="t1" class="aa" href="menu.html">Home
				<div></div>
			</a>
		</li>
		<li>
			<a id="t2" class="aa" href="project_list.html" target="iframe_a">專題知識庫
				<div></div>
			</a>
		</li>
		<li>
			<a id="t3" class="aa" href="#">課程資料庫
				<div></div>
			</a>
		</li>
		<li>
			<a id="t4" class="aa" href="grad_school.html" target="iframe_a">升學經驗談
				<div></div>
			</a>
		</li>
		<li>
			<a id="t5" class="aa" href="#">程式網頁設計教學
				<div></div>
			</a>
		</li>
	</ul>
		
<div class="row">		
<table id="tttt">
	<tr><td>
		<div id="logo"><img src="picture/logo.png" width="250" height="250"></div>
	</td><td>
		<iframe src="<?php echo $p; ?>" name="iframe_a" id="iframe_a" width="1000" height="400"></iframe>
	</td></tr>
</table>

		<!--footer information-->
		<div class="row11">					
				<p class="muted credit" id="copyright">
			<!--Line 1-->
			All Rights reserved. copyright © 2013 by Hackthonla, Taiwan R.O.C. 
		</p>
			<!--Line 2-->
			<p class="muted credit">
			<a href="project_intro.html" target"_blank">網站計畫</a>|
			<a href="work_team.html" target="_blank">開發團隊</a> |	<!--CCUMIS + Hackthonla 都會會加進來-->
			<a href="https://www.facebook.com/groups/165087747029043/" target="_blank">聯絡我們(Facebook)</a>  <!--目前為私人社團，之後會公開提供聯絡與意見回饋-->
		</p>
		</div>
		
		</div>
	</body>
</html>