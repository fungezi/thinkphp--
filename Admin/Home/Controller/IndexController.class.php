<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller {
    public function index(){
    	/*
			URL_MODEL:
			0:普通模式
			/thinkphp2/admin.php?m=home&c=index&a=user&id=1
			1:默认模式（pathinfo）
			/thinkphp2/admin.php/home/index/user/id/1.YUXILI
			2.重写模式
			/thinkphp2/home/index/user/id/1.YUXILI（但是这种模式与服务器的apach有关需要开启重写以及项目里的一些配置）
			3.兼容模式
			/thinkphp2/admin.php?s=/home/index/user/id/1.YUXILI
			（这种模式适合所有的情况，在你不确定服务器环境的情况下）
    	*/
    	echo $this->display();
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function heade(){
    	echo $this->display();
    }
    public function left(){
        $sql = "select * from role where id=".$_SESSION["id"];
        // $minfo = D()->query($sql);
        // var_dump($minfo);
    	echo $this->display();
    }
    public function right(){
    	echo $this->display();
    }
}