<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>奇点CTF-AWD</title>
		<link rel="stylesheet" href="./static/css/index.css">
		<script src="./static/js/jQuery.js"></script>
		<script src="./static/js/getresult.js"></script>
		<script src="./static/js/getscore.js"></script>
	</head>
	<body>
		<nav>
			<div>
				<a href="">实时战况</a>
			</div>
			<div>
				<a href="./postflag.php">提交flag</a>
			</div>
		</nav>
		<!-- 得分情况 -->
		<div class="score">
			<h2>得分情况</h2>
			<div class="score-list">
				<span class="line-red"></span>
				<ul class="score-list-nav">
					<li>序号</li><li>队伍名称</li><li>队伍得分</li><li>靶机状态</li>
				</ul>
				<ul class="score-list-item">
					<li>
						<ul>
							<li>第一名</li><li>user01</li><li>160</li><li>运行正常</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>第二名</li><li>user02</li><li>20</li><li>运行正常</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- 得分情况结束 -->
		<!-- 攻击列表 -->
		<div class="result">
			<h2>攻击列表</h2>
			<div class="result-list">
				<span class="line-red"></span>
				<ul class='result-list-nav'>
					<li>攻击轮次统计</li><li>攻击队伍</li><li>受攻击队伍</li><li>攻击时间</li><li>攻击得分</li>
				</ul>
				<ul class="result-list-item">
					<li>
						<ul>
							<li>2</li><li>user05</li><li>user01</li><li>13：44：02</li><li>2</li>
						</ul>
					</li>
					<li>
						<ul>
							<li>2</li><li>user05</li><li>user01</li><li></li><li>2</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- 攻击列表结束 -->
	</body>
</html>
<?
function getsuningtime(){
	$timedata=file_get_contents("http://quan.suning.com/getSysTime.do");
	$time=json_decode($timedata,true);
	return $time['sysTime2'];
}

?>