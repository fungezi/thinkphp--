<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body >
	<form action="#" method="POST">
		<label for="wareNum">编号</label>
		<input type="text" name="wareNum" id="wareNum"><br/>
		<label for="wareName">名称</label>
		<input type="text" name="wareName" id="wareName"><br/>
		<label for="wareCount">数量</label>
		<input type="text" name="wareCount" id="wareCount"><br/>
		<label for="warePrice">价格</label>
		<input type="text" name="warePrice" id="warePrice"><br/>
		<label for="warePic">图片</label>
		<input type="text" name="warePic" id="warePic"><br/>
		<label for="wareBrand">品牌</label>
		<input type="text" name="wareBrand" id="wareBrand"><br/>
		<label for="wareTime">时间</label>
		<input type="text" name="wareTime" id="wareTime"><br/>
		<input type="submit" value="更新">
	</form>
	<a href="http://localhost/thinkphp2/admin.php?s=home/goods/showlist.html" target="right">返回</a>
</body>
</html>