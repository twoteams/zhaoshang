<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\card\model\BankCards;
use app\home\model\Card;
use app\home\model\User;
use think\Request;

class Applyfor
{
    /**
     *  获取卡类型ID
     */
    public function card_type_id($id)
    {
        print_r($id);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        try {
            validate(\app\home\validate\Applyfor::class)->check($data);
        } catch (ValidateException $e) {
            // 验证失败 输出错误信息
            return show(200,$e->getError());
        }
            $data['cf_id'] = session('cf_id');
            $res = User::insert($data);
        if ($res){
            return show(200,'提交成功');
        }else{
            return show(200,'网络繁忙，请稍后再试');
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
