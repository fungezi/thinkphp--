<?php /* Smarty version Smarty-3.1.6, created on 2016-03-16 19:16:24
         compiled from "./Admin/Home/View\Index\heade.html" */ ?>
<?php /*%%SmartyHeaderCode:745756dc2b707ea4f7-93179976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '135920eb24d3d8e3fe38943d3bea7f86e9bfdb79' => 
    array (
      0 => './Admin/Home/View\\Index\\heade.html',
      1 => 1458126980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745756dc2b707ea4f7-93179976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2b7092193',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc2b7092193')) {function content_56dc2b7092193($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店后台主页</title>

<link rel="stylesheet" type="text/css" href="<?php echo @CSS_PATH;?>
index.css">
</head>

<body>
	<div class="heade">
		<h3>乐购商店后台管理中心</h3>
		<span>欢迎-<?php echo $_SESSION['username'];?>
-进入系统</span>
		<a href="http://localhost/thinkphp2/admin.php/?s=Home/user/logout" target=_top>退出系统</a>
	</div>
</body>
</html>
<?php }} ?>