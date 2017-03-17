<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>welcome</title>
	<style>
	*{margin:0; padding:0;}
	input{border:none; background:none; outline:none;}
	html{overflow-y:scroll; width:100%; overflow-x:hidden;}
	body{text-align:center; font:14px "Microsoft YaHei"; width:100%; height:100%;}
	img.bg{width:100%; margin:0 auto; max-width:780px;}
	#t1{width:100%; height:150px; resize:none; font-size:20px; line-height:24px; font-style:italic; border:1px solid #ccc; border-radius:2px; -webkit-box-shadow:0 2px 3px #ccc; max-width:780px; margin:0.5rem auto;}
	#t1::selection{background-color:#4c98ff;}
	#sub{width:100px; height:50px; background-color:#7B72E9; color:#fff; font-size:20px; line-height:50px; border-radius:3px; margin-top:0.5rem; -webkit-box-shadow:2px 2px 3px #ccc;}
	#phiz{width:100%; height:30px; line-height:30px;}
	#phiz img{cursor: pointer; margin-right: 4px;}
	</style>
	<script src="js/jquery.min.js"></script>
	<script>
		function check(){
			var oValue = document.getElementById('t1');
			if(oValue.value.length==0){
				alert('写点什么吧');
				return false;
			}else{
				return true;
			}
		}
		function dispose(){
			document.getElementById('f1').reset();
			setTimeout(function(){
				var oValue = document.getElementById('t1');
				oValue.value="";
			},0);
		}
	$(function(){
		$oImg = $('#phiz img');
		$txt = $('#t1');
		var arr2 = ['zhuakuang','baobao','haixiu','ku','xixi','taikaixin','touxiao','qian','huaxin','jiyan'];
		$oImg.click(function(){
			$t = $txt.val();
			//$txt.val($t+'['+$(this).attr('alt')+']');
			$txt.val($t+'['+arr2[$(this).index()]+']');
		});
	});
	</script>
</head>

<body>
	<img src="img/<?php $n = rand(0,1); echo $n; ?>.gif" alt="" class="bg">
	<form action="we.php" method="post" onsubmit="return check();" id="f1">
		<textarea name="txt" id="t1" cols="10" rows="5" placeholder="写下你想说的，是匿名的哦"></textarea>
		<div id='phiz'>
		                <img src="img/phiz/zhuakuang.gif" alt="抓狂" />
		                <img src="img/phiz/baobao.gif" alt="抱抱" />
		                <img src="img/phiz/haixiu.gif" alt="害羞" />
		                <img src="img/phiz/ku.gif" alt="酷" />
		                <img src="img/phiz/xixi.gif" alt="嘻嘻" />
		                <img src="img/phiz/taikaixin.gif" alt="太开心" />
		                <img src="img/phiz/touxiao.gif" alt="偷笑" />
		                <img src="img/phiz/qian.gif" alt="钱" />
		                <img src="img/phiz/huaxin.gif" alt="花心" />
		                <img src="img/phiz/jiyan.gif" alt="挤眼" />
		</div>
		<input type="submit" value="提交" id="sub" onclick="dispose() form.clear();">
	</form>
	<script>
		document.documentElement.style.height=document.documentElement.clientHeight+'px';
	</script>
</body>
</html>
