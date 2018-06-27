<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $user= session('user');
        if (empty($user)){
            $this->error('请登录',U('Home/Login/index'));
        }
    }
    public function index()
    {
        $_user = $_SESSION['user'];

        $mycar_num = M('Mycar') -> select();
        $this->assign('mycar',$mycar_num);

        $this -> assign('user',$_user);
        $this -> display();
    }
    public function buy(){
        $user= session('user');
        if (empty($user)){
            $this->error('请登录',U('home/login/index'));
        }
    }
    public function _empty(){
        $this -> redirect('Home/Index/index');
    }

}