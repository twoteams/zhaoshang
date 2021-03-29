<?php
declare (strict_types = 1);

namespace app\model\home;

use think\Model;

/**
 * @mixin \think\Model
 */
class LoginModel extends Model
{
    //
    protected $table = 'admin';

    //根据用户名，获取后端表的数据
    public function getLoginModelByUsername($username)
    {
        if (empty($username)){
            return false;
        }
        $where = [
            "username" => trim($username),
        ];
        $result = $this -> where($where)->find();
        return $result;
    }

    //根据主键id更新数据表数据
    public function updateById($id,$data){
        $id = intval($id);
        if (empty($id) || empty($data) || !is_array($data)){
            return false;
        }
        $where = [
            "id" => $id,
        ];
        return $this->where($where)->save($data);
    }
}
