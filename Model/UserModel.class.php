<?php 
	namespace Model;
	use Think\Model;
	class UserModel extends Model{
		public function checkUser($userName,$pwd){
			if($info = $this->getByUserName($userName)){
				// var_dump($info);
				if($info->password == $pwd){
					return $info;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}