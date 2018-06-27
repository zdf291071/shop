<?php
/**
 * Created by PhpStorm.
 * User: i5310
 * Date: 2018/4/13
 * Time: 19:49
 */

namespace Admin\Common;
use Think\Controller;


class AdminController extends Controller{
    public function _initialize(){
        $user= session('user');
        if (empty($user)){
            $this->error('请登录',U('admin/login/index'));
        }
    }
}