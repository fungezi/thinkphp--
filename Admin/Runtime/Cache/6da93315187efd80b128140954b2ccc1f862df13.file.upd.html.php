<?php /* Smarty version Smarty-3.1.6, created on 2016-03-08 14:57:52
         compiled from "./Admin/Home/View\Goods\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:987956dc2d950acf21-74778194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da93315187efd80b128140954b2ccc1f862df13' => 
    array (
      0 => './Admin/Home/View\\Goods\\upd.html',
      1 => 1457420266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '987956dc2d950acf21-74778194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2d951b58d',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc2d951b58d')) {function content_56dc2d951b58d($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body >
	<form action="http://localhost/thinkphp2/admin.php?s=home/goods/upd&id=<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['num'];?>
" method="POST">
		<label for="wareNum">编号</label>
		<input type="text" name="wareNum" id="wareNum" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['num'];?>
"><br/>
		<label for="wareName">名称</label>
		<input type="text" name="wareName" id="wareName" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['name'];?>
"><br/>
		<label for="wareCount">数量</label>
		<input type="text" name="wareCount" id="wareCount" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['count'];?>
"><br/>
		<label for="warePrice">价格</label>
		<input type="text" name="warePrice" id="warePrice" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['price'];?>
"><br/>
		<label for="warePic">图片</label>
		<input type="text" name="warePic" id="warePic" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['pic'];?>
"><br/>
		<label for="wareBrand">品牌</label>
		<input type="text" name="wareBrand" id="wareBrand" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['brand'];?>
"><br/>
		<label for="wareTime">时间</label>
		<input type="text" name="wareTime" id="wareTime" value="<?php echo $_smarty_tpl->tpl_vars['v']->value[0]['time'];?>
"><br/>
		<input type="submit" value="更新">
	</form>
	<a href="http://localhost/thinkphp2/admin.php?s=home/goods/showlist.html" target="right">返回</a>
</body>
</html>
<?php }} ?>