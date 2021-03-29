<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\admin\model\Admin;
use app\admin\model\User;
use think\Request;

class AppRove extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
       $UserObj = new User();
       $data =  $UserObj->GetAll();
       $id = session(config('admin.session_admin'));
       $info = Admin::GetRole($id['id']);
       if ($info['name']=='经理'){
           return view('jlindex',compact('data'));
       }else{
           return view('ygindex',compact('data'));
       }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
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
    public function update($id,$price,$name)
    {
        if ($name=='金卡'){
            if ($price>=20000 && $price<=200000){
                User::updates($id,$price);
                return json(['code'=>200,'msg'=>'放款成功,请审核']);
            }else{
                return json(['code'=>500,'msg'=>'金卡放款额度为2W--20W']);
            }
        }
        if ($name=='普卡'){
            if ($price>=2000 && $price<20000){
                User::updates($id,$price);
                return json(['code'=>200,'msg'=>'放款成功,请审核']);
            }else{
                return json(['code'=>500,'msg'=>'普卡放款额度为2千--2W']);
            }
        }
    }

    public function tstatus($id,$name)
    {
        if ($name=='staff'){
            User::tstatus($id,$name);
            return redirect('index');
        }
        if ($name=='manager'){
            User::tstatus($id,$name);
            return redirect('index');
        }

    }

    public function bstatus($id,$name)
    {
        if ($name=='staff'){
            User::bstatus($id,$name);
            return redirect('index');
        }
        if ($name=='manager'){
            User::bstatus($id,$name);
            return redirect('index');
        }
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
