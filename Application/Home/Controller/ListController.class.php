<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller

{
    public function _initialize(){
        $user= session('user');
        if (empty($user)){
            $this->error('请登录',U('home/login/index'));
        }
    }

    public function index()
    {
        $total = I('post.total','');
        $this->assign('total',$total);
        $user = $_SESSION['user'];
        /*
        $where = array();
        $where['user'] = $user;
        $data = M('mycar') -> where($where) -> select();
        $address
//        $addressData = array();
//        for($i=0;$i<count($data);$i++){
//            $addressData[] = $data[$i]['address'];
//        }
//        $addressData=array_unique($addressData);
*/
        $this->assign('user',$user);

        $listid = md5($user);
        $listid = substr($listid,0,16);
        $this->assign('listid',$listid);

        $where = array();
        $where['username'] = $user;

        $data = M('user') ->where("user='$user'") ->find();
        $data1 = M('admin_user') ->where($where) ->find();

        $phone = $data['phone'];
        $phone1 = $data1['phone'];

        $this->assign('phone',$phone);
        $this->assign('phone',$phone1);

        $data = M('mycar') ->where("user='$user'") ->find();
        $address = $data['s1'].$data['s2'].$data['s3'];
        $this->assign('address',$address);

        //$this->assign('address',$addressData);
        $this->display();
    }

    public function re_list(){

        if($_POST){
            $listModel = M('List');
            $_POST['createtime'] = date('Y-m-d H:i:s');
            if($listModel->create()){
                $result = $listModel->add();
                if($result){
                    $this->success('订单提交成功！',U('Home/index/index'));
                }else{
                    $this->error('订单提交失败！');
                }
            }
        }
    }
    public function show_list(){
        if($_POST){
            $name = $_POST['name'];
            $listModel = M('List');
            $where = array();
            $where['listid'] = $name;
            $result_list = $listModel -> where($where) -> find();
            if($result_list){
                $this->assign('result',$result_list);
                echo "<script>alert('yes');</script>";
            }else{
                echo "<script>alert('未查到该订单');window.history.back(-1);</script>";
            }
        }
        $this->display();
    }
    public function demo(){
        $this->display();
    }

    public function _empty(){
        $this -> redirect('Home/Index/index');
    }

}
?>
