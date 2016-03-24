<?php /* Smarty version Smarty-3.1.6, created on 2016-03-23 18:45:16
         compiled from "./Admin/Home/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:1881756dc2b70a8a954-18205292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c142ea40c6ed7abfdae4e8596b827c26b8d3dd' => 
    array (
      0 => './Admin/Home/View\\Index\\left.html',
      1 => 1458724579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881756dc2b70a8a954-18205292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2b70be97b',
  'variables' => 
  array (
    'trinfo' => 0,
    'v' => 0,
    'ttrinfo' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dc2b70be97b')) {function content_56dc2b70be97b($_smarty_tpl) {?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>乐购商店后台主页</title>
<link rel="stylesheet" type="text/css" href="<?php echo @CSS_PATH;?>
/index.css">
</head>
<body>
	<div class="left">
		<ul class="navBarList" id = "navBarList">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<li>
				<a href="javascript:;"><span class="rec" id="rec"></span><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a>
				<ul>
					<!-- <li><a href="http://localhost/thinkphp2/admin.php?s=home/goods/showList.html" target="right">产品列表</a></li>
					<li><a href="#">产品介绍</a></li>
					<li><a href="#">产品销售</a></li>
					<li><a href="#">产品价格</a></li> -->
					<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ttrinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['v']->value['auth_id']==$_smarty_tpl->tpl_vars['vv']->value['auth_pid']){?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auht_c'];?>
"."<?php echo $_smarty_tpl->tpl_vars['vv']->value['auht_a'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</a></li>
						<?php }?>
					<?php } ?>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
	<script type="text/javascript">
    var navBar = document.getElementById('navBarList');
    var navBarList = navBar.getElementsByTagName('li');
    var navUl = [];
    for(var i=0;i<navBarList.length;i++){
	    navUl[i] = navBarList[i].getElementsByTagName('ul');
	    //这里拿到的只是ul的头节点
	    if(navUl[i].length){
		    (function(i){
		    	var rec;
		    	if(navBarList[i].getElementsByTagName('span').length){
		    		var rec = navBarList[i].getElementsByTagName('span')[0];
		    	}
			    	navBarList[i].onclick = function(){
			    	if(navUl[i][0].offsetHeight){
			    		navUl[i][0].style.height = "0";
			    		rec.className = 'rec';
			    	}else{
			    		navUl[i][0].style.height = "auto";
			    		rec.className = 'recActive';
			    	}
		    	}
		    })(i);
	    }
    }
</script>
</body>
</html>
<?php }} ?>