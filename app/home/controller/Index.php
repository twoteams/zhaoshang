<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\BaseController;
use app\home\model\Card;
use app\home\model\CardFace;
use app\home\model\CardType;
use app\home\model\User;
use think\App;


class Index extends BaseController
{
    protected $user_id="";
    public function __construct(App $app)
    {
        parent::__construct($app);
        $data = session(config('admin.session_admin'));
        $this->user_id = $data['id'];
    }

    public function card_face_list()
    {
        $data = CardFace::card_face_list();
        return show('200','信用卡类型展示',$data);
    }

    public function card_type()
    {
        $data = CardType::card_type();
        return show('200','信用卡卡面类型展示',$data);
    }

    public function cf_name()
    {
        $data = session('cf_name');
        return show('200','信用卡标题展示',$data);
    }


    public function index()
    {
        $data = User::field('id,username,cstatus,fstatus,ct_id')->find($this->user_id);
        $data['ct_name'] = CardType::where('id',$data['ct_id'])->value('ct_name');
        $card = Card::field('num,fixprice')->where('u_id',$this->user_id)->find();
//        echo str_replace(substr($card['num'],4,-4),'****',$card['num']);die;
        $card['num' ] = str_replace(substr($card['num'],4,-4),'****',$card['num']);
        if (!empty($card)){
            $data['card'] = $card;
        }
        return show(200,'',$data);

    }

}
