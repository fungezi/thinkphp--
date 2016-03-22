// <?php 
// 	namespace Home\Controller;
// 	use Think\Controller;

// 	class ManagerController extends Controller{
//         public function verify(){
//         	$config =	array(//这个配置文件可以在Think/verify.class.php里找到
//                     // 验证码字符集合
// 	        'imageH'    =>  35,               // 验证码图片高度
// 	        'imageW'    =>  120,               // 验证码图片宽度
// 	        'length'    =>  4,               // 验证码位数
// 	        'fontSize'  =>  16, 
// 	        'fontttf'   =>  '6.ttf',
// 	        );
// 	        $verify = new \Think\Verify($config);
//         	$verify->entry();
//         }
// 	}