<?php /* Smarty version Smarty-3.1.6, created on 2016-03-20 13:03:50
         compiled from "./Admin/Home/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:445656dc2b50dd5bd4-65411984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '146d3cf6ee870e4f2bc4a6219375be48c22b07ba' => 
    array (
      0 => './Admin/Home/View\\Goods\\showlist.html',
      1 => 1458449104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '445656dc2b50dd5bd4-65411984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2b510ee64',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc2b510ee64')) {function content_56dc2b510ee64($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>pull-商店</title>
<style type="text/css">
img{
	width: 65px;
	height: 50px;
}
</style>
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
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
			<td><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"></td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['brand'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</td>
			<td><a href="http://localhost/thinkphp2/admin.php?s=home/goods/upd&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
">修改</a>/<a href="http://localhost/thinkphp2/admin.php?s=home/goods/delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
">删除</a></td>
		</tr>
		<?php } ?>
	</table>
	<a href="http://localhost/thinkphp2/admin.php?s=home/goods/add.html" target="right">添加商品</a>
</body>
</html>
<?php }} ?>