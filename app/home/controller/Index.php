<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\BaseController;
use think\App;
use think\facade\Db;

class Index extends BaseController
{
    protected $user_id=1;
    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->user_id = session('user')?session('user.id'):$this->user_id;
    }

    public function index()
    {
        $data = Db::table('user')->field('id,username,cstatus,fstatus')->find($this->user_id);
        $card = Db::table('card')->field('num,fixprice')->find($this->user_id);
//        echo str_replace(substr($card['num'],4,-4),'****',$card['num']);die;
        $card['num' ] = str_replace(substr($card['num'],4,-4),'****',$card['num']);
        if (!empty($card)){
            $data['card'] = $card;
        }
        return show(200,'',$data);
    }

}
