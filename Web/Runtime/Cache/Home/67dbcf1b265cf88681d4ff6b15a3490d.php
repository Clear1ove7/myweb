<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Public/boot/css/bootstrap.min.css" />
<script type="text/javascript" src="Public/js/jquery.min.js"></script>
<script type="text/javascript" src="Public/boot/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Public/js/style.js"></script>
<link rel="stylesheet" href="Public/css/style.css" />
		<link rel="stylesheet" href="Public/css/login.css" />
		<title>用户登录</title>
	</head>
	<body>
		<form data-url="<?php echo u('Login/login');?>">
			<div class="formTitle text-center lineH after_bot">用户登录</div>
			<div class="rows">
				<label class="lineH">账号：</label>
				<input type="text" name="name" />
			</div>
			<div class="rows">
				<label class="lineH">密码：</label>
				<input type="password" name="password" />
			</div>
			<div class="btnDivs">
				<button type="button" class="bg_blues text-center lineH btnLogins">登录</button>
			</div>
			<div class="aDivs f12">
				<a class="pull-left defaults">忘记密码</a>
				<a class="pull-right blues" href="<?php echo u('Login/register');?>">注册账号</a>
			</div>
		</form>
		<script type="text/javascript" src="Public/js/login.js"></script>
		<script type="text/javascript">
			login.login();
		</script>
	</body>
</html>