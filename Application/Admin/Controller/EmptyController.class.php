<?php
namespace Admin\Controller;

use Think\Controller;

class EmptyController extends Controller
{

    public function index()
    {
        $this->redirect('Admin/Index/index');
    }

}







?>
