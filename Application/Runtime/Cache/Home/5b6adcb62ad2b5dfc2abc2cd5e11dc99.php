<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<link href="<?php echo (HOME_CSS_URL); ?>style1.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.useso.com/css?family=Roboto:500,900italic,900,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<div class="login">
	<h2>风行天下</h2>
	<div class="login-top">
		<h1>登录</h1>
		<form method="post" action="<?php echo U('Home/Login/do_login');?>">
			用户名：<input type="text" name="user" placeholder="请输入用户名..."/>
			密 &nbsp;&nbsp;码：<input type="password" name="password" placeholder="请输入密码..."/>
	    <div class="forgot">
	    	<a href="<?php echo U('Home/Login/pass');?>">忘记密码</a>
	    	<input type="submit" name="submit" value="Login" >
	    </div>
        </form>
	</div>
	<div class="login-bottom">
		<h3>New User &nbsp;<a href="/zws/index.php/Home/Login/register">Register</a>&nbsp Here</h3>
	</div>
</div>	



</body>
</html>