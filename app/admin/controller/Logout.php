<?php
declare (strict_types = 1);
namespace app\admin\controller;

class Logout {
    public function index(){
        session(config('admin.session_admin'),null);
        return redirect('login');
    }
}