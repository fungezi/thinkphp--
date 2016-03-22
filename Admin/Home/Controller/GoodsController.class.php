<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class GoodsController extends Controller {
    public function showList(){
    	$goods = D("Goods");//这里的名字直接关系到数据库里的名字
    	$info = $goods->select();
    	// var_dump($info);
    	$this->assign('info',$info);
    	echo $this->display();
    }
    public function delete(){
        $id = $_GET['id'];
        $goods = D("Goods");
        $del = $goods->where("num=$id")->delete();
        // echo $del."qq";
        if($del){
            echo "<script>alert('删除完成！');window.location.href = 'http://localhost/thinkphp2/admin.php?s=home/goods/showList'</script>";
        }
        
    }
    public function add(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $config = array(
                    "rootPath"=>"./public/",
                    "savePath"=>"upload/",
                );
                // var_dump($_FILES);
                $upload = new \Think\Upload($config);
                // print_r($upload);
                $z = $upload->uploadOne($_FILES['warePic']);
                if(!$z){
                    print_r($upload->getError());
                }else{
                    $imgName = $z["savepath"].$z["savename"];
                    $_POST['warePic'] = $imgName;
                }

            }
        }
        //$_FILES里面的内容public/admin/img/upload/2016-03-19/56ed5a3e9dbbf.jpg
        // array (size=1)
        //   'warePic' => 
        //     array (size=5)
        //       'name' => string '[N7@82M7JRRL6YS5R7Z`1[1.png' (length=27)
        //       'type' => string 'image/png' (length=9)
        //       'tmp_name' => string 'C:\wamp\tmp\php333A.tmp' (length=23)
        //       'error' => int 0
        //       'size' => int 34415

    	$num = $_POST['wareNum'];
    	$name = $_POST['wareName'];
    	$count = $_POST['wareCount'];
    	$price = $_POST['warePrice'];
    	$pic = $_POST['warePic'];
    	$brand = $_POST['wareBrand'];
    	$time = $_POST['wareTime'];
    	// echo $num;
    	$goods = D("Goods");
    	$array  = [
    		"num"=>"$num",
    		"name"=>"$name",
    		"count"=>"$count",
    		"price"=>"$price",
    		"pic"=>"$pic",
    		"brand"=>"$brand",
    		"time"=>"$time"
    	];
    	// var_dump($array);
        if (!$array['num']) {
            echo $this->display();
        }else{
            $goods->add($array);
            $goods->select();
            echo $this->display();
        }
    }
    public function upd(){
        $num = $_POST['wareNum'];
        $name = $_POST['wareName'];
        $count = $_POST['wareCount'];
        $price = $_POST['warePrice'];
        $pic = $_POST['warePic'];
        $brand = $_POST['wareBrand'];
        $time = $_POST['wareTime'];
        $id = $_GET["id"];
        $goods = D("Goods");
        $array  = [
            "num"=>"$num",
            "name"=>"$name",
            "count"=>"$count",
            "price"=>"$price",
            "pic"=>"$pic",
            "brand"=>"$brand",
            "time"=>"$time"
        ];
        if($num){
            $goods->where("num=$id")->save($array);
            $v = $goods->where("num=$id")->select();
            $this->assign("v",$v);
            echo $this->display();
        }else{   
            $v = $goods->where("num=$id")->select();
            $this->assign("v",$v);
            echo $this->display();
        }
        
    }
}