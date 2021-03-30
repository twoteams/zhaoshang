<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Admin extends Model
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
    //查询用户角色
    public static function GetRole($id){
        $data = self::join('role','admin.r_id = role.id')->where('role.id',$id)->find()->toArray();
        return $data;
    }
}
