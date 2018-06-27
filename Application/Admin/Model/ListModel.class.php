<?php
namespace Admin\Model;
use Think\Model;
class ListModel extends Model{

    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_LeaveInfo($q_l_id){
        $where['q_l_id'] = $q_l_id;
        $data = M("Leave")->where($where)->find();
        return $data;
    }
    /** 添加单个数据对象
     * @param $data
     * @return int
     */
    public function add_LeaveInfo($data){
        M("Leave")->add($data);
    }
    /** 返回数据对象的列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_LeaveList($where){
        $data = M("List") -> where($where) -> select();
        return $data;
    }

    /** 返回指定个数的数据对象列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @param $num
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_Num_LeaveList($where=NULL,$num){
        $data = M("Leave")->where($where)->limit(0,9)->select();
        return $data;
    }

    /** 保存一个已经修改的数据对象
     * @param $data
     */
    public function save_LeaveInfo($data){
        $where['q_l_id'] = $data['q_l_id'];
        M("Leave")->where($where)->save($data);
    }

    /** 获取一个指定日期的请假条对象列表，data为日期参数，格式为Y-m-d，2017-8-08，
     * @param $date data为日期参数
     * @param null $where where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_Day_Leave($date ,$where=null){
        $where['createtime'] = $date;
        $data = $this->get_LeaveList($where);
        return $data;
    }

    /** 获取一个指定星期的请假条对象列表，data为日期数组，包含一个星期内所有的日期，
     * @param $date
     * @param null $where
     * @return array
     */
    public function get_Week_Leave($date ,$where=NULL){
        $data_leave = array();
//        $sum = 0;
        foreach ($date as $value){
            $where['createtime'] = $value;
            $data = $this->get_LeaveList($where);
            if ($data!=NULL){
                foreach ($data as $line){
                    array_push($data_leave,$line);
                }
            }
//            $sum = $sum + sizeof($data);
        }
        return $data_leave;
    }
    /** 获取一个指定月份的请假条对象列表，data为日期数组，包含一个月份内所有的日期，
     * @param $date
     * @param null $where
     * @return array
     */
    public function get_Month_Leave($date ,$where=NULL){
        $data_leave = array();
//        $sum = 0;
        foreach ($date as $value){
            $where['createtime'] = $value;
            $data = $this->get_LeaveList($where);
            if ($data!=NULL){
                foreach ($data as $line){
                    array_push($data_leave,$line);
                }
            }
//            $sum = $sum + sizeof($data);
        }
        return $data_leave;
    }

    /** 获取指定班级的所有请假条对象列表， class_list是一个数组列表，不是单个班级对象，
     * @param $class_list
     * @return array
     */
    public function get_Class_Leave($class_list){
        $class_leave = array();
        foreach ($class_list as $class){
            $where['q_c_id'] = $class['q_c_id'];
            $where['q_l_id'] = $class['q_l_id'];
            $class['day'] = sizeof($this->get_Day_Leave(date("Y-m-d"),$where));
            $class['last_day'] = sizeof($this->get_Day_Leave(get_Last_Day(date("Y-m-d")),$where));
            $class['week'] = sizeof($this->get_Week_Leave(get_Week_All_Day(),$where));
            $class['month'] = sizeof($this->get_Month_Leave(get_Month_All_Day(),$where));
            array_push($class_leave,$class);
        }
        return $class_leave;
    }

    /** 获取所有级别的所有请假条对象列表，grade_list是一个数组对象列表，不是一个单个对象
     * @param $grade_list
     * @return array
     */
    public function get_Grade_Leave($grade_list){
        $grade_leave = array();
        foreach ($grade_list as $grade){
            $where['q_l_id'] = $grade['q_l_id'];
            $grade['day'] = sizeof($this->get_Day_Leave(date("Y-m-d"),$where));
            $grade['last_day'] = sizeof($this->get_Day_Leave(get_Last_Day(date("Y-m-d")),$where));
            $grade['week'] = sizeof($this->get_Week_Leave(get_Week_All_Day(),$where));
            $grade['month'] = sizeof($this->get_Month_Leave(get_Month_All_Day(),$where));
            array_push($grade_leave,$grade);
        }
        return $grade_leave;

    }
}



?>
