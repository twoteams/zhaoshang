<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\home\model\User;
use think\Request;

class Activation
{
    /**
     * 激活页面的展示
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = User::join('card_type','user.ct_id=card_type.id')->join('card_face','user.cf_id=card_face.id')->where('user.id',1)->find()->toArray();
        return show('200','用户展示',$data);
    }


}
