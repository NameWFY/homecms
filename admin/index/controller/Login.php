<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\Model\adminLogin;
use think\Session;

class Login extends controller
{ 
    public function index()
    {	
     	return $this->fetch('index');
    }


    public function indexdo()
    {
        $Info = input('post.');
        $Info['adm_userpwd']=md5($Info['adm_userpwd']);
        $login = new adminLogin();

        $DataOne = $login->selectOne($Info);
        if($DataOne=='1'){
            $this->success('登录成功',url('index/index/index'));
        }else if($DataOne=='2'){
            $this->success('登录失败',url('index/login/index'));
        }
    }

    public function Out()
    {
        Session::delete("userInfo");
        $this->success('欢迎下次光临',url('index/login/index'));
    }
}