<?php /* Smarty version Smarty-3.1.6, created on 2016-03-22 18:41:24
         compiled from "./Admin/Home/View\Goods\showList.html" */ ?>
<?php /*%%SmartyHeaderCode:2535156dc2be5540cc9-09985388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c37000a8b67cadbe0bdf981ec744b77f55f4a1c' => 
    array (
      0 => './Admin/Home/View\\Goods\\showList.html',
      1 => 1458449104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2535156dc2be5540cc9-09985388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2be574b3b',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc2be574b3b')) {function content_56dc2be574b3b($_smarty_tpl) {?><!DOCTYPE html>
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