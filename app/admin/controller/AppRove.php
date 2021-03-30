<?php
declare (strict_types = 1);

namespace app\admin\controller;

use app\admin\model\Admin;
use app\admin\model\Event;
use app\admin\model\User;
use PHPMailer\PHPMailer\PHPMailer;
use think\Db;
use think\Request;
use tool\SendMail;

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
        $info = \think\facade\Db::table('user')->find($id);
        if ($name=='staff'){
            User::tstatus($id,$name);
            return redirect('index');
        }
        if ($name=='manager'){
            if (User::tstatus($id,$name)){
                $title = '二组信用卡中心提醒您';
                // 邮件内容
                $content = <<< EOF
<p align="center">
皑如山上雪，皎若云间月。<br>
闻君有两意，故来相决绝。<br>
今日斗酒会，明旦沟水头。<br>
躞蹀御沟上，沟水东西流。<br>
凄凄复凄凄，嫁娶不须啼。<br>
愿得一人心，白首不相离。<br>
竹竿何袅袅，鱼尾何簁簁！<br>
男儿重意气，何用钱刀为！</p>
<img src="https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1781660113,1635675150&fm=26&gp=0.jpg" alt="">
EOF;
                // 发送QQ邮件
                $mailer = sendMail($info['email'], $title, $content);
                $time = time();
                $time = substr("$time",1,6);
                $data = [
                  'u_id'=>$id,
                    'pid'=>0,
                    'num'=>$time.'1808'.rand(1,999999999),
                    'fixprice'=>$info['jy_price'],
                    'address'=>$info['address']
                ];
                $res =  \think\facade\Db::table('card')->insert($data);
                return redirect('index');
            }
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
