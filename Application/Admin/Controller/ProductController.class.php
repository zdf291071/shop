<?php
/**
 * Created by PhpStorm.
 * User: i5310
 * Date: 2018/4/17
 * Time: 22:06
 */

namespace Admin\Controller;


use Admin\Common\AdminController;
use Think\Image;
use Think\Upload;

class ProductController extends AdminController{
    public function product_type(){
        $product_type=M('product_type');
        $productTypeModelArr=$product_type->select();
        $this->assign('productTypeModelArr',$productTypeModelArr);
        $this->display();
    }

    public function show_add_product_type(){
        $this->display();
    }


    public function delete_product_type(){
        $id=I('id','','trim');

        if(empty($id)){
            $this->error('添加失败，请重试！');
        }

        $product_type_model=M('product_type');
        $res=$product_type_model->delete($id);

        if(!$res){
            $this->error('删除失败，请重试！');
        }

        $this->success('删除成功！',U('admin/product/product_type'));
    }

    public function show_product(){
        $product_model=M('product');
        $productModelArr=$product_model->select();
        $this->assign('productModelArr',$productModelArr);
        $this->display();
    }

    public function show_add_product(){
        $this->display();
    }

    public function add_product(){
        $name=I('name','','trim');
        $price=I('price','','trim');
        $type=I('type','','trim');

        if(empty($name)){
            $this->error('商品名为空！');
        }
        if(!$price){
            $this->error('价格不正确！');
        }


        $upload=new Upload();
        $upload->maxSize=3145728;
        $upload->exts=array('jpg','gif','png','jpeg');
        $upload->rootPath='./Uploads/';
        $upload->savePath='';
        $info=$upload->upload();

        if(empty($info)) {
            $this->error('上传失败！');
        }
        $image ='/zws/Uploads/'.$info['image']['savepath'].$info['image']['savename'];

        $product_model=M('product');
        $data=array();
        $data['name']=$name;
        $data['price']=$price;
        $data['image']=$image;
        $data['state']=0;
        $data['number']=0;
        if($type=='外卖'){
            $data['type_id']=1;
        }elseif($type=='零食')
        {
            $data['type_id']=2;
        }else{
            $data['type_id']=3;
        }
        $res=$product_model->add($data);
        if($res){
            $this->success('添加成功！',U('admin/product/show_product'));
        }else{
            $this->error('添加失败！');
        }

    }

    public function edit_product(){
        $id = I('id','','trim');
        $where = array();
        $where['id']=$id;
        $product = M('product') -> where($where) -> find();
        $this->assign('product',$product);

        $this->display();
    }

    public function edit_product_zx(){
        $id = I('id','','trim');
        $name=I('name','','trim');
        $price=I('price','','trim');
        $type=I('type','','trim');

        if(empty($name)){
            $this->error('商品名为空！');
        }
        if(!$price){
            $this->error('价格不正确！');
        }


        $upload=new Upload();
        $upload->maxSize=3145728;
        $upload->exts=array('jpg','gif','png','jpeg');
        $upload->rootPath='./Uploads/';
        $upload->savePath='';
        $info=$upload->upload();

        if(empty($info)) {
            $this->error('上传失败！');
        }
        $image ='/zws/Uploads/'.$info['image']['savepath'].$info['image']['savename'];

        $product_model=M('product');
        $data=array();
        $data['name']=$name;
        $data['price']=$price;
        $data['image']=$image;
        $data['state']=0;
        $data['number']=0;
        if($type=='外卖'){
            $data['type_id']=1;
        }elseif($type=='零食')
        {
            $data['type_id']=2;
        }else{
            $data['type_id']=3;
        }
        $where =array();
        $where['id'] = $id;
        $res=$product_model->where($where)->save($data);
        if($res){
            $this->success('修改成功！',U('admin/product/show_product'));
        }else{
            $this->error('修改失败！');
        }

    }

    public function delete_product(){
        $id=I('id','','trim');
        if(empty($id)){
            $this->error('删除失败，请重试！');
        }

        $product_model=M('product');
        $res=$product_model->delete($id);

        if(!$res){
            $this->error('删除失败！');
        }
        $this->success('删除成功！');
    }
    public function _empty(){
        $this -> redirect('Admin/Index/index');
    }
}