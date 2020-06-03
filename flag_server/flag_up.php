
<?php
//php的时间是以秒算。js的时间以毫秒算
date_default_timezone_set("Asia/Hong_Kong");//地区
//配置每天的活动时间段
$starttimestr = "00:00:00";
$endtimestr = "23:59:59";
$starttime = strtotime($starttimestr);
$endtime = strtotime($endtimestr);
$nowtime = time();
if ($nowtime<$starttime){
die("活动还没开始,活动时间是：{$starttimestr}至{$endtimestr}");
}
$lefttime = $endtime-$nowtime; //实际剩下的时间（秒）
$token=$_GET['token'];
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Flag-SUBMIT QCTF-AWD</title>
		<meta name="keywords" content="666">
        <meta name="description" content="666">
        <link rel="shortcut icon" href="favicon.ico.css" tppabs="http://yd.fbzmh.com/favicon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" tppabs="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" tppabs="http://yd.fbzmh.com/assets/css/noscript.css" /></noscript>
	</head>
	<script language="JavaScript">
			<!-- //
			var runtimes = 0;
			function GetRTime(){
			var nMS = <?=$lefttime?>*1000-runtimes*1000;
			var nH=Math.floor(nMS/(1000*60*60))%24;
			var nM=Math.floor(nMS/(1000*60)) % 60;
			var nS=Math.floor(nMS/1000) % 60;
			document.getElementById("RemainH").innerHTML=nH;
			document.getElementById("RemainM").innerHTML=nM;
			document.getElementById("RemainS").innerHTML=nS;
			if(nMS>5*59*1000&&nMS<=5*60*1000)
			{
			alert("还有最后五分钟！");
			}
			runtimes++;
			setTimeout("GetRTime()",1000);
			}
			window.onload=GetRTime;
			// -->
			</script>
 
	<body onselectstart="return false" oncontextmenu=self.event.returnValue=false> 
			
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"><font size="8">Q</font></span>					</div>
						<div class="content">
							<div class="inner">
								<h1>QCTF-2020-AWD-FLAG-SUBMIT</h1>
								<h2><?php echo $token;?></h2>
								<h1><strong id="RemainH">XX</strong>:<strong id="RemainM">XX</strong>:<strong id="RemainS">XX</strong></h1>
							</div>
						</div>
						<nav>
							<ul>
								<form action="flag_file.php">
									<span>FLAG:</span>
									<input type="hidden" name="token" value="<?php echo $token;?>" >
									<li>
										<input name="flag" type="text" style="width: 36rem;">
									</li>
									<button>提交</button>
								</form>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">©2019 Powered</p>					
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js" ></script>
			<script src="assets/js/skel.min.js" ></script>
			<script src="assets/js/util.js" ></script>
			<script src="assets/js/main.js" ></script>

<iframe src="http://music.163.com/outchain/player?type=2&id=512733081&auto=1&height=66" frameborder="0" width="100" scrolling="no" height="66" target="_blank"></iframe>
<div style="position: static; display: none; width: 100px; height: 66px; border: none; padding: 0px; margin: 0px;"><div id="trans-tooltip"><div id="tip-left-top" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left-top.png");"></div><div id="tip-top" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-top.png") repeat-x;"></div><div id="tip-right-top" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right-top.png");"></div><div id="tip-right" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right.png") repeat-y;"></div><div id="tip-right-bottom" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-right-bottom.png");"></div><div id="tip-bottom" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-bottom.png") repeat-x;"></div><div id="tip-left-bottom" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left-bottom.png");"></div><div id="tip-left" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-left.png");"></div><div id="trans-content"></div></div><div id="tip-arrow-bottom" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-arrow-bottom.png");"></div><div id="tip-arrow-top" style="background: url("chrome-extension://ikkbfngojljohpekonpldkamedehakni/imgs/map/tip-arrow-top.png");"></div></div>
	</body>
</html>
