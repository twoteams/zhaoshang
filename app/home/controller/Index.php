<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\home\model\CardFace;
use app\home\model\CardType;
use think\facade\View;

class Index
{
    public function index()
    {
        $data = CardFace::card_face_list();
        return show('200','信用卡类型展示',$data);
    }

    public function card_type()
    {
        $data = CardType::card_type();
        return show('200','信用卡卡面类型展示',$data);
    }

}
