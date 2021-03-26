<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\admin\model\BillModels;
use think\facade\View;
use think\Request;

class Bill
{
    public function index()
    {
        $c_id = input('c_id');
//        print_r($c_id);
        $BillList = BillModels::BillList($c_id);
        View::assign('list',$BillList);
        return View::fetch('BillList');
    }

    public function AddBill(Request $request)
    {
        $Bills = [
            'c_id' => $request -> param('c_id'),
            'money' => $request -> param('money'),
            'paymenttime' => $request -> param('paymenttime'),
            'lawpay' => $request -> param('lawpay'),
            'is_install' => $request -> param('is_install')
        ];
        if (empty($Bills['c_id'])||empty($Bills['money'])||empty($Bills['paymenttime'])||empty($Bills['lawpay'])||empty($Bills['is_install']))
        {
            die('参数不能为空!');
        }
        $res = BillModels::AddBill($Bills);
        return json([
            'code' => '200',
            'msg' => '添加成功',
            'result' => $Bills
        ]);

    }
}
