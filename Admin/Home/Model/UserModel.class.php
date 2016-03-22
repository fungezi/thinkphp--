<?php 
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model{
		public function checkUser($userName,$pwd){
			// $info = $this->getByusername($userName);//在这里要注意大小写的问题
			// var_dump($userName);
			$sql = "select * from login where username=".$username;
			$info = D()->query($sql);
			if(!empty($info)){
				if($info['password'] == $pwd){
					return $info;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}