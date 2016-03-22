<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店后台</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_PATH); ?>/login.css">
</head>
<body >
<div class="bac">
	<div class="loginBox">
		<h3>乐购管理后台登陆</h3>
		<form action="#" method="POST">
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
			<div class="login">
				<input class="login" type="submit" value="登陆">
			</div>
			
		</form>
	</div>
</div>
</body>
</html>