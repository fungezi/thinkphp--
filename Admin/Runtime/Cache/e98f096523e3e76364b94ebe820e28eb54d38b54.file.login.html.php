<?php /* Smarty version Smarty-3.1.6, created on 2016-03-16 18:45:29
         compiled from "./Admin/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2212256e405ffbf0133-69526476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98f096523e3e76364b94ebe820e28eb54d38b54' => 
    array (
      0 => './Admin/Home/View\\User\\login.html',
      1 => 1458125125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2212256e405ffbf0133-69526476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56e406002a411',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e406002a411')) {function content_56e406002a411($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店后台</title>
<link rel="stylesheet" type="text/css" href="<?php echo @CSS_PATH;?>
login.css">
</head>
<body >
<div class="bac">
	<div class="loginBox">
		<h3>乐购管理后台登陆</h3>
		<form action="http://localhost/thinkphp2/admin.php?s=home/user/login" method="POST">
			<div class="username">
				<label for="username">用户名</label>
				<input id="username" name="username" type="text" value="">
				<span class="clear"></span>
			</div>
			<div class="pwd">
				<label for="pwd">密码</label>
				<input type="password" name="pwd" value="">
				<span class="clear"></span>
			</div>
			<div class="verify">
				<label for="verify">验证码</label>
				<input id="verify" type="text" name="verify" value="">
				<img src="<?php echo @__CONTROLLER__;?>
/verify">
				<span class="clear"></span>
			</div>

			<div class="login">
				<input class="login" type="submit" value="登陆">
			</div>
			
		</form>
	</div>
</div>
</body>
</html>
<?php }} ?>