<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Public/boot/css/bootstrap.min.css" />
<script type="text/javascript" src="Public/js/jquery.min.js"></script>
<script type="text/javascript" src="Public/boot/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Public/js/style.js"></script>
<script type="text/javascript" src="Public/js/jquery.mobile-1.4.5.js"></script>
<link rel="stylesheet" href="Public/css/style.css" />
	<link href="Public/css/index.css" rel="stylesheet">
	<title>---</title>
</head>
<body>
	<div class="main">
		<div class="items item1"></div>
		<div class="items item2"></div>
		<div class="items item3"></div>
		<div class="items item4"></div>
		<div class="items item5"></div>
	</div>
	<div class="rigTap">
		<div class="taps active" data-num = 0 ><span class="glyphicon glyphicon-circle-arrow-up f14"></span></div>
		<div class="taps" data-num = 1 ><span class="glyphicon glyphicon-circle-arrow-down f14"></span></div>
		<div class="taps" data-num = 2 ><span class="glyphicon glyphicon-plus-sign f14"></span></div>
		<div class="taps" data-num = 3 ><span class="glyphicon glyphicon-circle-arrow-left f14"></span></div>
		<div class="taps" data-num = 4 ><span class="glyphicon glyphicon-circle-arrow-right f14"></span></div>
	</div>
	<script src="Public/js/index.js"></script> 
	<script>
		//判断是否为pc端
		function is_pc(){  
            var userAgentInfo = navigator.userAgent;  
            var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
            var flag = true;  
            for (var v = 0; v < Agents.length; v++) {  
               if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
            }  
           return flag;  
		}
		//
		is_pc()?index.scroll():index.touchFun();
		index.tapFun();
	</script>
</body>
</html>