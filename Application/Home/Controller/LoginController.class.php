<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    //登录
    public function index(){

        $this->display();
    }
    public function do_login(){

        if( $_POST ){

            $user = M('user');

            $_user = $_POST['user'];
            $_passwd = sha1($_POST['password']);
            $where = array();
            $where['user'] = $_user;
            $where['password'] = $_passwd;
            $res=$user -> where($where) -> find();
            $result = M('Admin_user') -> where($where) -> find();
            if($res || $result)
            {
                session('user',$_user);
                $this->redirect("Home/Index/index");

            }else{
                $this->error("登录失败,账户或密码不正确...");
            }
        }
    }

    //找回密码
    public function pass(){
        $this->display();
    }
    public function re_pass(){
        //var_dump($_POST);
        $user = $_POST['user'];
        $email = $_POST['email'];
        if($_POST){
            $verify = new \Think\Verify();
            if (!$verify -> check($_POST['verify'])) {
                $this -> error('验证码有误！');
            }
            $where = array();
            $where['user'] = $user;
            $where['email'] = $email;
            $res1 = M('User') -> where($where) ->find();
            if($res1){
                $_POST['password'] = sha1($_POST['password']);

                if(M('User') -> create()){
                   $save = M('User') -> where($where) -> save();
                    if($save){
                        $this->success('ok,请登录',U('Home/Login/login'));
                    }else{
                        $this->error('no');
                    }
                }
            }else{
                $this->error('输入的用户名和邮箱有误！');
            }
        }else{
            $this->error('请重新输入！');
        }
    }

   //注册
    public function register(){
        $this -> display();
    }
    public function do_register(){

            if (!empty($_POST)) {
                header('Content-type:text/html;charset=utf-8');

                $user=M('User');
                //show_list($user);
                if (!$user->create()) {
                    show_list($user->getError());
                    return false;
                }
                $user->password = sha1($_POST['password']);
                $data = $user -> add();
                if ($data) {
                    $this->success("注册成功！",U('Home/Login/index'));
                } else {
                    $this->error("注册失败！");
                }
            }

    }

    //验证码
    function verify()
    {
        $config = array(
            'seKey' => 'ThinkPHP.CN',   //验证码加密密钥
            'expire' => 1800,            // 验证码过期时间（s）
            'useZh' => false,           // 使用中文验证码
            'useImgBg' => false,           // 使用背景图片
            'fontSize' => 15,              // 验证码字体大小(px)
            'useCurve' => true,            // 是否画混淆曲线
            'useNoise' => true,            // 是否添加杂点
            'imageH' => 33,               // 验证码图片高度
            'imageW' => 110,               // 验证码图片宽度
            'length' => 4,               // 验证码位数
            'fontttf' => '',              // 验证码字体，不设置随机获取
            'bg' => array(243, 251, 254),  // 背景颜色
        );
        $verify = new \Think\Verify($config);
        //show_list($verify);
        $verify->entry();
    }

    public function loginout(){
        session(null);
        redirect(U('Home/Login/index'));
    }
    public function _empty(){
        $this -> redirect('Home/Index/index');
    }
}

?>
