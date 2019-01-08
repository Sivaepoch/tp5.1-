<?php

namespace app\common\model;
use think\Model;

class User extends Model 
{
    protected $pk = 'id';
    protected $table = 'zh_user';

    protected $autoWriteTimeStamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

}