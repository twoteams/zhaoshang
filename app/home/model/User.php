<?php
declare (strict_types = 1);

namespace app\home\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class User extends Model
{
    //根据条件查询用户信息
    public function GetUserName($username){
        if (empty($username)){
            return false;
        }
        $where = [
            'username'=>trim($username)
        ];
        return $this->where($where)->find();
    }
}
