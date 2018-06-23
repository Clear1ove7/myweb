<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="Public/boot/css/bootstrap.min.css" />
<script type="text/javascript" src="Public/js/jquery.min.js"></script>
<script type="text/javascript" src="Public/boot/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Public/js/style.js"></script>
<link rel="stylesheet" href="Public/css/style.css" />
		<link rel="stylesheet" href="Public/css/login.css" />
		<title>用户注册</title>
	</head>
	<body>
		<form data-url="<?php echo u('Login/register');?>">
			<div class="formTitle text-center lineH after_bot">用户注册</div>
			<div class="rows">
				<label class="lineH">账号：</label>
				<input type="text" name="name" />
			</div>
			<div class="rows">
				<label class="lineH">密码：</label>
				<input type="password" name="password" />
			</div>
			<div class="btnDivs">
				<button type="button" class="bg_blues text-center lineH btnRegisters">注册</button>
			</div>
			<div class="aDivs f12">
				<a class="pull-left defaults">忘记密码</a>
				<a class="pull-right blues" href="<?php echo u('Login/login');?>">登录账号</a>
			</div>
		</form>
		<script type="text/javascript" src="Public/js/login.js"></script>
		<script type="text/javascript">
			login.register();
		</script>
	</body>
</html>