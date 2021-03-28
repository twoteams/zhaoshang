<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\BaseController;


class Repayment extends BaseController
{
    public function repayAll(){
        $card_id = $this->request->param('c_id');
        $price = $this->request->param('price');
    }
}
