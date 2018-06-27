<?php
/**
 * Created by PhpStorm.
 * User: i5310
 * Date: 2018/4/13
 * Time: 23:48
 */

namespace Admin\Controller;


use Admin\Common\AdminController;

class UserController extends AdminController{

    public function show_user(){
        $user=D('user');
        $adminUserModelArr=$user->select();

        $this->assign('data',$adminUserModelArr);
        $this->display();
    }

    public function show_add_user(){
        $this->display();
    }

    public function add_user(){
        $username=I('user','','trim');
        $password=I('password','','trim');
        $email=I('email','','trim');
        $phone=I('phone','','trim');


        if (empty($username)||empty($password)){
            $this->error('用户名和密码不能为空！');
        }

        $admin_user_model=D('user');
        $data=array();
        $data['user']=$username;
        $data['password']=md5($password);
        $data['phone']=$phone;
        $data['email']=$email;

        $res=$admin_user_model->add($data);

        if(!$res){
            $this->error('添加失败!');
        }

        $this->success('添加成功！',U('admin/user/show_user'));
    }

    public function show_edit_user(){
        $id=I('id','','trim');

        if(empty($id)){
            $this->error('打开页面失败，请重试！');
        }

        $admin_user_model=D('user');
        $adminUserModel=$admin_user_model->find($id);

        $this->assign('id',$id);
        $this->assign('username',$adminUserModel['user']);
        $this->assign('phone',$adminUserModel['phone']);
        $this->assign('email',$adminUserModel['email']);

        $this->display();
    }

    public function edit_user(){

        $id=I('id','','trim');
        $username=I('user','','trim');
        $password=I('password','','trim');
        $phone=I('phone','','trim');
        $email=I('email','','trim');
        $admin_user_model=D('user');

        $data=array();
        $data['id']=$id;
        $data['user']=$username;
        if(!empty($password)){
            $data['password']=md5($password);
        }else{
            $this->error('密码不得为空！');
        }
        $data['phone']=$phone;
        $data['email']=$email;

        $where = array();
        $where['id']=$id;
        $save=$admin_user_model->where($where)->save($data);
        if($save){
            $this->success("修改成功！",U('admin/user/show_user'));
        }else{
            $this->error('修改失败！');
        }

    }

    public function delete_user(){
        $id=I('id','','trim');

        $admin_user_model=D('user');
        $admin_user_model->delete($id);

        $this->success("删除成功！",U('admin/user/show_user'));
    }
    public function _empty(){
        $this -> redirect('Admin/Index/index');
    }
}