<?php
namespace Admin\Controller;
use Think\Controller;

class ListController extends Controller{
    public function index(){
        $data = M('List') -> select();
        $this -> assign('list',$data);
        $this -> display();
    }
    public function _empty(){
        $this -> redirect('Admin/Index/index');
    }



}

?>
