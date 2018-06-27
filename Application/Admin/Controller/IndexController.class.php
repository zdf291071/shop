<?php
/**
 * Created by PhpStorm.
 * User: i5310
 * Date: 2018/4/13
 * Time: 19:31
 */

namespace Admin\Controller;

use Admin\Model\UserModel;
use Think\Controller;

class IndexController extends Controller {

    public function _initialize(){
        $user= $_SESSION['user'];
        if (empty($user)){
            $this->error('请登录',U('Admin/Login/index'));
        }
    }

    function index()
    {
        $model=D('User');
        $data = $model->getMainFrameData();

        $weather = $model->getWeather();

        $weather=json_decode($weather,true);

        $this->assign('weather',$weather);

        $this->assign('data', $data);

        $mycar_model = M('mycar') ->select();
        $mycar_num = count($mycar_model);
        $this->assign('mycar_num',$mycar_num);

        $user_model = M('user') ->select();
        $user_num = count($user_model);
        $this->assign('user_num',$user_num);

        $product_model = M('product') ->select();
        $product_num = count($product_model);
        $this->assign('product_num',$product_num);


        $top['now_day'] = sizeof(D('List')->get_Day_Leave(date("Y-m-d")));
        $top['last_day'] = sizeof(D('List')->get_Day_Leave(get_Last_Day()));
        $top['now_week'] = sizeof(D('List')->get_Week_Leave(get_Week_All_Day()));
        //$top['now_month'] = sizeof(D('List')->get_Month_Leave(get_Month_All_Day()));
        $top['total'] = sizeof(M('List') -> select());
        $this->assign('top',$top);
        //var_dump($top);


        $this->display();
    }
    public function _empty(){
        $this -> redirect('Admin/Index/index');
    }


}









