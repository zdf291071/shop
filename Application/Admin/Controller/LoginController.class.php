<?php
/**
 * Created by PhpStorm.
 * User: i5310
 * Date: 2018/4/13
 * Time: 22:35
 */

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{

    public function index(){
        $this->display();
    }

    public function do_login(){
        $userName=I('username','','trim');
        $password=I('password','','trim');
        $verifyCode=I('verifyCode','','trim');

        $verify=new \Think\Verify();
        $res=$verify->check($verifyCode);
        if(!$res){
            $this->error('验证码错误！');
        }

        $admin_user_model=D('admin_user');
        $map=array();
        $map['username']=$userName;
        $map['password']=md5($password);
        $adminUserModel=$admin_user_model->where($map)->find();

        if(empty($adminUserModel)){
            $this->error("用户名或密码错误，请重新输入！");
        }
        $adminUserModel=$admin_user_model->where($map)->find();
        $role = $adminUserModel['role_user'];
        session('role',$role);
        session('user',$userName);
        $this->success('登录成功！',U('Admin/Index/index'));
    }

    public function verify(){
    $config =    array(
        'fontSize'    =>    16,    // 验证码字体大小
        'length'      =>    4,     // 验证码位数
        'useNoise'    =>    false, // 关闭验证码杂点
        'imageH'      =>    29,    // 验证码图片高度
        'imageW'      =>    150,   // 验证码图片宽度
    );
    $verify=new \Think\Verify($config);
    $verify->codeSet = '0123456789';
    $verify->entry();
}
    public function loginout()
    {
        session(null);
        redirect(U('Admin/Login/index'));
    }
    public function _empty(){
        $this -> redirect('Admin/Index/index');
    }
}