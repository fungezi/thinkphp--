<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model as t;
header("Content-type:text/html;charset=utf-8");
class UserController extends Controller {
    public function login(){
        if(!empty($_POST)){

            $verify = new \Think\Verify();
            if(!$verify->check($_POST['verify'])){
                echo "验证码错误".$_POST['verify'];
                // $this->error("验证码错误");
                echo $this->display();
            }else{
                // echo "验证码正确";
                //进行用户名以及密码的验证
                $userModel = new t\UserModel();
                $info = $userModel->checkUser($_POST['username'],$_POST['pwd']);
                var_dump($info);
                if($info){
                    // var_dump($info);
                    //session(key,value,expire);设置key以及过期时间
                    //session(key,null);设置key为null
                    //session(null);清空所有的session
                    session("username",$info['username']);
                    session("password",$info['password']);
                    session("id",$info['userid']);
                    $this->redirect("index/index");
                    //在这里传递的参数会出现在url里；

                }else{
                    echo "用户名或者密码错误";
                    echo $this->display();
                }
            }
        }else{
            echo $this->display();
        }
    }
    public function logout(){
        session(null);
        // echo session("username");
        $this->redirect("user/login");
    }
    public function signUp(){
    	echo $this->display();
    }
    public function verify(){
    	$config =	array(//这个配置文件可以在Think/verify.class.php里找到
        // 验证码字符集合
        'imageH'    =>  35,               // 验证码图片高度
        'imageW'    =>  120,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontSize'  =>  16, 
        'fontttf'   =>  '6.ttf',
        'useCurve'  =>  false,
        );
        $verify = new \Think\Verify($config);
    	$verify->entry();
    }

}