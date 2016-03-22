<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class EmptyController extends Controller {
	// echo C("name");
    public function _empty(){
        echo "<img src=".IMG_PATH."404.jpg alt='404' style='width:100%'>";
    }
}