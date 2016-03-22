<?php /* Smarty version Smarty-3.1.6, created on 2016-03-12 16:10:37
         compiled from "./Admin/Home/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:1881756dc2b70a8a954-18205292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c142ea40c6ed7abfdae4e8596b827c26b8d3dd' => 
    array (
      0 => './Admin/Home/View\\Index\\left.html',
      1 => 1457770230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881756dc2b70a8a954-18205292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56dc2b70be97b',
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
			<li><a href="#">关于我们</a></li>
			<li><a href="http://localhost/thinkphp2/admin.php?s=home/goods/upd.html" target="right">新闻中心</a></li>
			<li><a href="http://localhost/thinkphp2/admin.php?s=home/goods/add.html" target="right">客服中心</a></li>
			<li>
				<a href="javascript:;"><span class="rec" id="rec"></span>产品服务</a>
				<ul>
					<li><a href="http://localhost/thinkphp2/admin.php?s=home/goods/showList.html" target="right">产品列表</a></li>
					<li><a href="#">产品介绍</a></li>
					<li><a href="#">产品销售</a></li>
					<li><a href="#">产品价格</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;"><span class="rec" id="rec"></span>经典案例</a>
				<ul>
					<li><a href="#" target="right">产品列表</a></li>
					<li><a href="#">产品介绍</a></li>
					<li><a href="#">产品销售</a></li>
					<li><a href="#">产品价格</a></li>
				</ul>
			</li>
			<li><a href="#">高级管理</a></li>
			<li><a href="#">系统管理</a></li>
			<li><a href="#">个人管理</a></li>
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