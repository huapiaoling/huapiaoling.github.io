<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>hellow</title>
	<style>
	@-webkit-keyframes go{
		0%{-webkit-transform:translate3d(16rem,0,0);}
		to{-webkit-transform:translate3d(-16rem,0,0);}
		
	}
	*{margin:0; padding:0;}
	html,body{width:100%; height:100%; font-size:20px; overflow:hidden; font-family:"Microsoft YaHei";}
	body{background-image:url(img/bg_main.jpg);}
	#box{position:relative; width:100%; height:100%;  background-color:rgba(0,0,0,0.2);}
	.b_c{line-height:20px; padding:0.2rem; position:absolute; white-space:nowrap; color:#fff; font-weight:bold; border:1px solid #ccc; border-radius:5px;}
	.line2{-webkit-animation:12s go linear infinite;}
	#box div img{width:1.4rem; vertical-align:middle; padding:0 0.2rem;}
	</style>
	<?php
		$t = $_POST['txt'];
		if(!empty($t)){
			$txt = $t."\r\n";
			$arr = file("msg/msg.txt");
			$finally = $arr[count($arr)-1];
			if($txt != $finally){
				$msg = fopen("msg/msg.txt","a");
				fwrite($msg,$txt);
				fclose($msg);
			}
		}
		
		/*var_dump($txt);
		echo "<br />";
		var_dump($finally);
		if($txt == $finally){
			echo 4;
		}else{
			echo 5;
			if(!empty($txt)){
				echo 6;
				//$time = date("Y-m-d H-i-s",time())."\r\n";
				//90405
				$msg = fopen("msg/msg.txt","a");
				fwrite($msg,$txt);
				fclose($msg);
			}
		}*/
	?>
	<script src="js/jquery.min.js"></script>
	<script>
	function getRand(n,m){
		return Math.ceil(Math.random()*(m-n)+n);
	}
	$(function(){
		$window = $(window);
		$document = $(document);
		$h = $window.height()-50;
		$w = $window.width();
		$div = $('#box div.b_c');
		var oBox = document.getElementById('box');
		var aDiv = oBox.children;
		//$('#box div.b_c').css({'left':getRand(0,$w),'top':getRand(0,$h)});
		/*for(var i=0;i<$div.length;i++){
			$div[i].css({'left':getRand(0,$w),'right':getRand(0,$h)});
		}*/
		for(var i=0;i<aDiv.length;i++){
			aDiv[i].style.left = getRand(0,$w)+'px';
			aDiv[i].style.top = getRand(0,$h)+'px';
			aDiv[i].style.backgroundColor = 'rgba('+getRand(0,256)+','+getRand(0,256)+','+getRand(0,256)+',0.9)';
		}
		var arr = ['baobao','haixiu','huaxin','jiyan','ku','qian','taikaixin','touxiao','xixi','zhuakuang'];
		for(var i=0;i<aDiv.length;i++){
			(function(i){
				setTimeout(function(){
					aDiv[i].classList.add('line2');
				},i*200);
			})(i);
		}
		var z=0;
		$div.mousedown(function(ev){
			z++;
			$(this).css({'zIndex':z});
		});
		$document.keydown(function(ev){
			if(ev.keyCode==32||ev.keyCode==13){
				window.history.back(0);
			}
		});
	});
	</script>
</head>

<body>
	<div id="box">
<?php
	$myFile=file("msg/msg.txt");
	$arr = array('baobao','haixiu','huaxin','jiyan','ku','qian','taikaixin','touxiao','xixi','zhuakuang');
	//var_dump($myFile);
	foreach($myFile as $key=>$value){
		foreach($arr as $key1=>$value1){
			$value = str_replace("[".$value1."]","<img src='img/phiz/".$value1.".gif' />",$value);
		}
		//$newFile[$key] = $value;
		//echo $newFile[$key];
		echo '<div class="b_c">'.$value.'</div>';
		//$newFile[$key] = $value;
	}
	

	/*var_dump($newFile);exit;
	for($i=0;$i<count($myFile);$i++){
		//echo '<div class="b_c">'.$myFile[$i].'</div>';
		$arr = array('baobao','haixiu','huaxin','jiyan','ku','qian','taikaixin','touxiao','xixi','zhuakuang');

		echo '<div class="b_c">'.str_replace('['.ku.']','<img src="img/phiz/'.ku.'.gif" />',$myFile[$i]).'</div>';
	}*/
?>
	</div>
	<script>
	document.documentElement.style.width=document.documentElement.clientWidth+'px';
	</script>
</body>
</html>
