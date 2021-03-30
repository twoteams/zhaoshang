<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\card\model\BankCards;
use app\home\model\Card;
use app\home\model\User;
use think\exception\ValidateException;
use think\Request;

class Applyfor
{
    /**
     * 申请的方法
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        $data['cf_id'] = session('cf_id');
        try {
            validate(\app\home\validate\Applyfor::class)->check($data);
        } catch (ValidateException $e) {
            // 验证失败 输出错误信息
            return show(200,$e->getError());
        }
            $res = User::insert($data);
        if ($res){
            return redirect('/web/index');
        }else{
            return show(200,'网络繁忙，请稍后再试');
        }
    }

}
