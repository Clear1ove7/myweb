<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOL</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="Public/css/materialize.min.css"/>
<link rel="stylesheet" href="Public/css/style.css"/>

<style type="text/css">
	.card{
		left:25% !important;
	}
</style>
</head>

<body>
	<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">商城</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">IPhone</a></li>
        <li><a href="#">小米</a></li>
        <li><a href="#">华为</a></li>
        <li><a href="#">三星</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">IPhone</a></li>
        <li><a href="#">小米</a></li>
        <li><a href="#">华为</a></li>
        <li><a href="#">三星</a></li>
      </ul>
    </div>
   </nav>
   <div class="container">
    <div class="row">
  	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="card col m6">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="Public/images/<?php echo ($vo["pimg"]); ?>">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><?php echo ($vo["pnodel"]); ?><i class="material-icons right">more_vert</i></span>
          <p><?php echo ($vo["pprice"]); ?>元</p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><?php echo ($vo["pnodel"]); ?><i class="material-icons right">close</i></span>
          <p><?php echo ($vo["pprice"]); ?>元</p>
          <p><?php echo ($vo["pprice"]); ?>元</p>
        </div>
     </div><?php endforeach; endif; ?>
    </div>
  </div>
  <script src="Public/js/jquery.min.js"></script>
  <script src="Public/js/materialize.min.js"></script>
  <script>
  		$(function(){
  			var str = {};
  			str.id = 23;
  			str.cid = 50;
			function strToJson(str){ 
				return $.parseJSON(str); 
			} 
			console.log(eval('(' + str + ')'));
		})
  </script>
</body>
</html>