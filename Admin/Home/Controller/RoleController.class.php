<?php
namespace Home\Controller;
use Component\AdminController;
header("Content-type:text/html;charset=utf-8");
class RoleController extends AdminController {
	function showlist(){
		$this->display();
		// echo "这里是用户列表页";
	}
}