<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
        $product = M('product_type');
        $data = $product -> select();

        $goods = M('Product');
        //1.获得当前记录总条数
        $total=$goods -> count();
        $per=10;
        //2.实例化分页类对象
        $page = new \Common\Page($total, $per);
        //3. 拼装sql语句获得每页信息
        $sql = "select * from zws_product ".$page->limit;
        $goodsData = $goods->query($sql);
        //$goodsData = $goods -> select();
        //4.获得页码列表
        $pagelist=$page->fpage();
        $this->assign('goodsData',$goodsData);
        $this->assign('pagelist',$pagelist);
        $this -> assign('data',$data);
        $this -> display();
    }
    public function show(){
       if(!empty($_POST))
       {
           $_name = $_POST['name'];
           $this->assign('name',$_name);
           $where = array();
           $where['name'] = $_name;
           $product_type = M('product_type');
           $result = $product_type -> where($where) -> find();
           if(!$result){
               $this->error('请重新输入！');
           }
           $id = $result['product_id'];


           $product = M('product');
           //1.获得当前记录总条数
           $total=$product -> where("type_id='$id'") -> count();
           $per=10;
           //2.实例化分页类对象
           $page = new \Common\Page($total, $per);
           //3. 拼装sql语句获得每页信息
           $sql = "select * from zws_product where type_id='$id' ".$page->limit;
           $data = $product->query($sql);
           //$goodsData = $goods -> select();
           //4.获得页码列表
           $pagelist=$page->fpage();

           $this->assign('pagelist',$pagelist);


           $this -> assign('data',$data);
           $this -> display();
       }else{
           $this->error('请重新输入！');
       }

    }

    public function show_goods(){
        $id = I('get.id','');
        $data = M('Product') -> where("id=$id") -> find();
        $this->assign('data',$data);
        $this->display();
    }

    public function show_goods_zx(){

        if($_POST){

            //查找是否有名字相等的，如果有，直接加一
            $name = $_POST['name'];
            $where = array();
            $where['name'] = $name;
           // $data_image = M('Product') -> where($where) ->find();
            $result_data = M('Mycar') ->where($where) ->find();
           // $_POST['image'] =  $data_image['image'];
            $_POST['createtime'] = date('Y-m-d H:i:s');
            $_POST['user'] = $_SESSION['user'];
            if(!M('Mycar') -> create())
            {
                $this->error('参数错误！');
            }
            if($result_data){
                $data = array();
                $data['number'] = $result_data['number'] + $_POST['number'];
                $result = M('Mycar') ->where($where) ->save($data);
            }else{

                $result = M('Mycar') -> add();
            }
            if($result){
                $this -> success('加入购物车成功！',U('Home/Goods/index'));
            }else{
                $this -> error('加入购物车失败！');
            }


            if(M('Mycar') -> create()){

            }

        }

    }
    public function _empty(){
        $this -> redirect('Home/Index/index');
    }



}

?>
