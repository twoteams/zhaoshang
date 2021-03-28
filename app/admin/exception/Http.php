<?php
namespace app\admin\exception;

use think\exception\Handle;
use think\Response;
use Throwable;

class Http extends Handle{

    public $httpStatus = 200;

    public function render($request, Throwable $e): Response
    {
        if (method_exists($e,'getStatusCode')){
            $httpStatus = $e->getStatusCode();
        }else{
            $httpStatus = $this->httpStatus;
        }
        // 添加自定义异常处理机制
        return show(config('status.admin.error'),$e->getMessage(),[],$httpStatus);
    }
}