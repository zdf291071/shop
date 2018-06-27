<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>选择地址页面</title>

<link href="<?php echo (HOME_CSS_URL); ?>city.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo (HOME_JS_URL); ?>jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo (HOME_JS_URL); ?>city4.city.js"></script>
<script type="text/javascript" src="<?php echo (HOME_JS_URL); ?>city4.js"></script>

</head>
<body>

<div class="demo">                 
	<form action="/zws/index.php/Home/Mycar/address" method="post" name="form1">
		<div class="infolist">
			<lable>地区：</lable>
			<div class="liststyle">
				<span id="Province">
					<i>请选择省份</i>
					<ul>
						<li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
					</ul>
					<input type="hidden" name="cho_Province" value="请选择省份">
				</span>
				<span id="City">
					<i>请选择城市</i>
					<ul>
						<li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
					</ul>
					<input type="hidden" name="cho_City" value="请选择城市">
				</span>
				<span id="Area">
					<i>请选择地区</i>
					<ul>
						<li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>

					</ul>
					<input type="hidden" name="cho_Area" value="请选择地区">
				</span>



			</div>
		</div>
		<input type="submit" value="提交">
	</form> 
</div>
   
</body>
</html>