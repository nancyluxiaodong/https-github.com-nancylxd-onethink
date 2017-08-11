<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/10
 * Time: 15:11
 */

namespace Admin\Model;


use Think\Model;

class RepairModel extends Model
{
    protected $_validate = array(
        /*array('sn', 'require', '报修单号不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),*/
        array('name', 'require', '报修人不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('tel', 'require', '电话号码不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('sort', 'require', '排序不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('create_time', NOW_TIME, self::MODEL_INSERT),
        array('update_time', NOW_TIME, self::MODEL_BOTH),
        array('status', '1', self::MODEL_BOTH),
    );
}