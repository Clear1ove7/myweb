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
		<title></title>
	</head>
	<body class="cont inBl">
		<header class="after_bot lineH">
	<h1 class="titles f30"><?php echo ($_SESSION['user']['name']); ?>您好！欢迎来到首页</h1>
	<?php if($_SESSION['user']['name']): ?><a class="bg_blues btn_login lineH" href="<?php echo u('Login/logout');?>">退出</a>
	<?php else: ?> 
		<a class="bg_blues btn_login lineH" href="<?php echo u('Login/login');?>">登陆</a><?php endif; ?>
	
</header>

	</body>
</html>