<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pull-商店</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body >
	<table>
		<tr>
			<td>序号</td>
			<td>商品名称</td>
			<td>库存</td>
			<td>价格</td>
			<td>图片</td>
			<td>品牌</td>
			<td>创建时间</td>
			<td>操作</td>
		</tr>
		<tr>
			<td>1</td>
			<td>iphone6</td>
			<td>100</td>
			<td>$100</td>
			<td><img src="#"></td>
			<td>iphone</td>
			<td>2015/1/1</td>
			<td><a href="http://localhost/thinkphp2/admin.php?s=home/goods/upd.html">修改</a>/<a href="#">删除</a></td>
		</tr>
		<tr>
			<td>2</td>
			<td>iphone7</td>
			<td>100</td>
			<td>$100</td>
			<td><img src="#"></td>
			<td>iphone</td>
			<td>2015/1/1</td>
			<td><a href="#">修改</a>/<a href="#">删除</a></td>
		</tr>
		<tr>
			<td>3</td>
			<td>iphone8</td>
			<td>100</td>
			<td>$100</td>
			<td><img src="#"></td>
			<td>iphone</td>
			<td>2015/1/1</td>
			<td><a href="">修改</a>/<a href="#">删除</a></td>
		</tr>
	</table>
	<a href="http://localhost/thinkphp2/admin.php?s=home/goods/add.html" target="right">添加商品</a>
</body>
</html>