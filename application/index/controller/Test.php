<?php

namespace app\index\controller;

use app\common\controller\Base;

class Test extends Base 
{
    // 测试用户的验证器
    public function test1()
    {
        $data = [
            'name' => 'siaaa',
            'email' => '9999@qq.com',
            'mobile' => '18255555555',
            'password' => '1234567'
        ];

        $rule = 'app\common\validate\User';

        return $this->validate($data,$rule);
    }
}