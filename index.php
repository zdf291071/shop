<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');



define('SITE_URL','http://localhost/');
define('HOME_CSS_URL',SITE_URL.'zws/Public/Home/css/');
define('HOME_IMG_URL',SITE_URL.'zws/Public/Home/img/');
define('HOME_JS_URL',SITE_URL.'zws/Public/Home/js/');

define('ADMIN_CSS_URL',SITE_URL.'zws/Public/Admin/css/');
define('ADMIN_IMG_URL',SITE_URL.'zws/Public/Admin/img/');
define('ADMIN_JS_URL',SITE_URL.'zws/Public/Admin/js/');


// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
//define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单