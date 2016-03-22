<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class UserController extends Controller{
	public function login(){
		echo "alogining";
	}
	public function register(){
		echo "registering";
	}
}