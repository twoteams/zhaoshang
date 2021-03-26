<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Admin extends Model
{
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
