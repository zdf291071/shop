<?php

namespace Home\Model;

use Think\Model\RelationModel;

class GoodsModel extends RelationModel{
    protected $_link = array(
        'Student'=>array(

            'mapping_type'=>ONE_TO_MANY,

            'relation_table'=>'teacher', //relation_table是中间约束和关联的表名

            'foreign_key'=>'username', //此表类的对应中间表的外键

            'relation_foreign_key'=>'tea_name' //关联表的对应中间表的外键

        ),
    );
}


/*
    一对一关联 ：ONE_TO_ONE，包括HAS_ONE 和 BELONGS_TO
    一对多关联 ：ONE_TO_MANY，包括HAS_MANY 和 BELONGS_TO
    多对多关联 ：MANY_TO_MANY
*/

?>
