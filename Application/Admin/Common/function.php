<?php
/**
 * 公用的方法
 */



/** 计算两个日期相差天数的函数
 * @param $date1 开始日期
 * @param $date2 结束日期
 * @return float 返回的天数
 */
function get_Num_Day($date1,$date2){
    $date1=strtotime($date1);
    $date2=strtotime($date2);
    $value = round(($date1-$date2)/3600/24) + 1;
    return $value;
}


/** 用于查找本星期内所有的日期
 * @return array 返回今天所在的星期内所有的日期数组
 */
function get_Week_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y")));
    $now = date("Y-m-d");
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $week = array();
    for ($i = 0;$i < 7;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($week,$day);
        if ($day == $now){
            break;
        }
    }
    return $week;
}
/** 用于查找上一个星期内所有的日期
 * @return array 返回上一个星期内所有的日期数组
 */
function get_Last_Week_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-7,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7-7,date("Y")));
    $end = date("Y-m-d",strtotime($end));
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $week = array();
    for ($i = 0;$i < 7;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($week,$day);
        if ($day == $end){
            break;
        }
    }
    return $week;
}
/** 用于查找上一个月月份内所有的日期
 * @return array 返回上一个月份内所有的日期数组
 */
function get_Last_Month_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m")-1,1,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m") ,0,date("Y")));
    $end = date("Y-m-d",strtotime($end));
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $month = array();
    for ($i = 0;$i < 32;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($month,$day);
        if ($day == $end){
            break;
        }
    }
    return $month;
}
/** 用于查找本月份内所有的日期
 * @return array 返回今天所在的月份内所有的日期数组
 */
function get_Month_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),1,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("t"),date("Y")));
    $now = date("Y-m-d");
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $month = array();
    for ($i = 0;$i < 32;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($month,$day);
        if ($day == $now){
            break;
        }
    }
    return $month;
}
/** 用于查找昨天的日期
 * @return array 返回昨天的日期数组
 */
function get_Last_Day(){
    $date = date("Y-m-d");
    $time = strtotime($date) - 3600*24;
    return date('Y-m-d',$time);
}
function get_Split_DateArr($data){
//    $date = '2017-09-28';
    $data['l_begintime'] = get_Split_DateStr($data['l_begintime']);
    $data['l_endtime'] = get_Split_DateStr($data['l_endtime']);
    $data['l_class_begin_time'] = get_Split_DateStr($data['l_class_begin_time']);
    $data['l_class_end_time'] = get_Split_DateStr($data['l_class_end_time']);
    $data['l_night_begin_time'] = get_Split_DateStr($data['l_night_begin_time']);
    $data['l_night_end_time'] = get_Split_DateStr($data['l_night_end_time']);
    $data['l_logout'] = get_Split_DateStr($data['l_logout']);
    return $data;
}
function get_Split_DateStr($date){
    if ($date != ''){
        $date_arr = split('-',$date);
        $date_str = '<u>'.$date_arr[0].'</u>年<u>'.$date_arr[1].'</u>月<u>'.$date_arr[2].'</u>日';
        return $date_str;
    }else{
        return '';
    }
}

?>
