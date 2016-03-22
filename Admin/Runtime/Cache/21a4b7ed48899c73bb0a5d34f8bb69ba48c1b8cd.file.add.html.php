<?php /* Smarty version Smarty-3.1.6, created on 2016-03-19 21:16:16
         compiled from "./Admin/Home/View\Goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2743156dc2c21041c10-91187459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a4b7ed48899c73bb0a5d34f8bb69ba48c1b8cd' => 
    array (
      0 => './Admin/Home/View\\Goods\\add.html',
      1 => 1458393358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2743156dc2c21041c10-91187459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2c21123b3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc2c21123b3')) {function content_56dc2c21123b3($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body >
	<form enctype="multipart/form-data" action="http://localhost/thinkphp2/admin.php?s=home/goods/add" method="POST">
		<label for="wareNum">编号</label>
		<input type="text" name="wareNum" id="wareNum"><br/>
		<label for="wareName">名称</label>
		<input type="text" name="wareName" id="wareName"><br/>
		<label for="wareCount">数量</label>
		<input type="text" name="wareCount" id="wareCount"><br/>
		<label for="warePrice">价格</label>
		<input type="text" name="warePrice" id="warePrice"><br/>
		<label for="warePic">图片</label>
		<input type="file"  name="warePic" id="warePic"><br/>
		<label for="wareBrand">品牌</label>
		<input type="text" name="wareBrand" id="wareBrand"><br/>
		<label for="wareTime">时间</label>
		<input type="text" name="wareTime" id="wareTime"><br/>
		<input type="submit" value="添加">
	</form>
	<a href="http://localhost/thinkphp2/admin.php?s=home/goods/showlist.html" target="right">返回</a>
</body>
</html>
<?php }} ?>