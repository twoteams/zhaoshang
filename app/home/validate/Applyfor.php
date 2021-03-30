<?php
namespace app\home\validate;
use think\Validate;

class Applyfor extends Validate
{
    protected $rule =   [
        'username'  => 'require|max:6',
        'idcard'   => 'require|idCard',
        'tel' => 'require|mobile',
        'address' => 'require',
        'email' => 'require|email',
    ];

    protected $message  =   [
        'username.require' => '请填写姓名',
        'username.max'     => '名称最多不能超过6个字符',
        'idcard.require'   => '请填写身份证号码',
        'idcard.idCard'   => '请填写正确身份证号码',
        'tel.require'   => '请填写手机号码',
        'tel.mobile'   => '请填写正确手机号码',
        'address.require'   => '请填写邮寄地址',
        'email.require'   => '请填写邮箱地址',
        'email.email'   => '请填写正确的邮箱地址',
    ];
}