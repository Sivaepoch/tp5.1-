<?php 

namespace app\index\controller;

use app\common\controller\Base;

use think\facade\Request;

use app\common\model\User as UserModel;

class User extends Base
{
    public function register()
    {
        $this->assign('title','注册页面');
        return $this->fetch();
    }

    public function insert()
    {
        if(Request::isAjax()){

            $data = Request::post();
            $rule = 'app\common\validate\User';

            $res = $this->validate($data,$rule);
            // 使用模型创建数据
            // $data = Request::except('password_confirm','post');

            if(!$res){
                return ['status'=> -1 , 'message' => $res];
            }else{
                if(UserModel::create($data)){
                    return [
                        'status'=>1,
                        'message'=>'恭喜注册成功'
                    ];
                }else{
                    return [
                        'status'=>0,
                        'message'=>'注册失败,请检查!'
                    ];
                }
            }
        }else{
            $this->error('请求类型错误','register');
        }
    }
}