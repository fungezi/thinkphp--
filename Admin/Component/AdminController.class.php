<?php
	namespace Component;
	use Think\Controller;

	class adminController extends Controller{
		function __construct(){

			parent::__construct();
			$now_ac = CONTROLLER_NAME."-".ACTION_NAME;
			// echo $now_ac;
			//下面的sql语句的作用就是联表查询
			$sql = "select role_ac from sw_user a join sw_role b on a.userId=b.id where a.userId=".$_SESSION['id'];
			$role_ac = D()->query($sql)[0]['role_ac'];
			// var_dump(strpos($role_ac,$now_ac));
			// echo $_SESSION['id'];
			$auth_array = array('Role-showlist','Index-index','Index-left','Index-heade','Index-right','User-login');
			// var_dump(strpos($role_ac,$now_ac));
			if(!in_array($now_ac,$auth_array)&&$_SESSION['id']!=0&&strpos($role_ac,$now_ac)===false){
				exit("没有权限访问");
			}
		}

	}
?>