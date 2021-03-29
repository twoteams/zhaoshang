<?php
// 这是系统自动生成的公共文件
function show($code,$msg='error',$data=[],$httpCode=200){
    $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data
    ];
    return json($result,$httpCode);
}