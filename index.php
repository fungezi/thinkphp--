<?php
//common  存放当前项目的公共函数
//Conf    存放项目的配置文件
//Lang    存放当前项目的语言包
//Lib     存放当前项目的控制器和模板（这里面的action存的是controller，）
//Runtime 存放当前项目运行时的文件
//Tpl     存放当前项目的模板
//MC      是存放在Lib里的
//V       是存放在Tpl里的
	define("APP_DEBUG","true");
	define("APP_NAME","APP");
	define("APP_PATH","./APP/");
	define("CSS_PATH","public/home/css/");
	define("JS_PATH","public/home/JS/");
	define("IMG_PATH","public/home/IMG/");
	require("./thinkPHP/thinkPHP.php");