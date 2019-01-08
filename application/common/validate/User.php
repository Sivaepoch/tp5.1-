<?php

namespace app\common\validate;

use think\Validate;

class User extends Validate 
{
    protected $rule = [
        'name|姓名'=>'require|length:5,20|chsAlphaNum',
        'email|邮箱'=>'require|email|unique:zh_user',
        'mobile|手机'=>'require|mobile|number',
        'password|密码'=>'require|length:6,20|unique:zh_user|alphaNum|confirm',
    ];
}