<?php
namespace Home\Controller;
use Think\Controller;
class MycarController extends Controller {
    public function _initialize(){
        $user= session('user');
        if (empty($user)){
            $this->error('请登录',U('home/login/index'));
        }
    }
    public function index(){
        $user = $_SESSION['user'];
        $where = array();
        $where['user'] = $user;
        $data = M('mycar') -> where($where) ->select();
//        $result1 = array();
//        $result2 = array();
//        foreach($data as $v){
//            $result1[]=$v['price'];
//            $result2[]=$v['number'];
//            for($i=0;$i<count($v);$i++){
//                $result = $result1[$i]*$result2[$i];
//                echo $result;
//            }
//        }


        $this -> assign('data',$data);
        $this->display();
    }
    public function delete_mycar_goods(){
        $id = I('get.id','');
        $where = array();
        $where['id'] = $id;
        $result = M('mycar') -> where($where) ->delete();
        if($result){
            //echo '<script>alert("移出购物车成功！"); window.location.href="__CONTROLLER__/index";</script>';
            $this->success('移出购物车成功！',U('Home/Mycar/index'));
        }else{
            $this->error('请重新删除！');
        }
    }
    public function _empty(){
        $this -> redirect('Home/Index/index');
    }

}

?>
