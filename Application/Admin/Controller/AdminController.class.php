<?php

namespace Admin\Controller;


use Think\Controller;

class AdminController extends Controller {

     public function index(){

         $adminModel = M('Admin_user') ->select();
         $this->assign('data',$adminModel);

         $this -> display();
       }
    public function add_admin(){
        $this->display();
    }
    public function add_admin_zx(){

        if($_POST){
            $_POST['password'] = md5($_POST['password']);
            if(M('Admin_user') -> create()){
                $result = M('Admin_user') ->add();
                if($result){
                    $this->success("管理员添加成功！",U('Admin/Admin/index'));
                }else{
                    $this->error('管理员添加失败！');
                }
            }
        }
    }
    public function edit_admin(){
        $edit_id = I('get.id','');
        $where =array();
        $where['id'] = $edit_id;
        $admin_data = M('Admin_user') ->where($where) ->find();
        $this->assign('adminData',$admin_data);
        $this->display();
    }
    public function edit_admin_zx(){
        if($_POST){
            $_POST['password'] = md5($_POST['password']);
            if(M('Admin_user')->create()){
                $result = M('Admin_user') ->save();
                if($result){
                    $this->success('修改成功！',U('dmin/admin/index'));
                }else{
                    $this->error('修改失败！');
                }
            }
        }

    }
    public function del_admin(){
        $del_id = I('get.id','');
        $where =array();
        $where['id'] = $del_id;
        $result = M('Admin_user') -> where($where) ->delete();
        if($result){
            $this->success('删除成功！',U('admin/admin/index'));
        }else{
            $this->error('删除失败！');
        }
    }
    public function _empty(){
        $this -> redirect('Admin/Index/index');
    }
}



?>
