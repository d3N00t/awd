<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>奇点CTF-AWD</title>
		<link rel="stylesheet" href="./static/css/postflag.css">
		<script src="./static/js/jQuery.js"></script>
		<script src="./static/js/postflag.js"></script>
	</head>
	<body>
		<nav>
			<div>
				<a href="./index.php">实时战况</a>
			</div>
			<div>
				<a href="">提交flag</a>
			</div>
		</nav>
		<!-- 提交flag -->
		<div class="flag_box">
			<h2>提交flag</h2>
			<div>
				<span class="line-red"></span>
				<h4>Flag</h4>
				<input type="text" id="flag" placeholder="请输入flag(无需加flag{})">
				<h4>队伍名称</h4>
				<select id="token" value="请选择队伍名称">
				    <option value="team1">team1</option>
				    <option value="team2">team2</option>
				</select>
				<a id="postflag">提交</a>
			</div>
			<span id='tips'></span>
		</div>
	</body>
</html>
