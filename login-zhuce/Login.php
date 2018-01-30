<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

use think\Session;

class Login extends controller
{ 
    public function login()
    {	
     	return $this->fetch('login');
    }


    public function login_do()
    {
        $lan_name =$_POST['name'];

        $lan_pwd = md5($_POST['pwd']);
        //echo $lan_pwd;die;
        $res=db('landlord')->where(array('lan_name'=>$lan_name,'lan_pwd'=>$lan_pwd))->find();

        //var_dump($res);die;
        if($res){
            $ress=json_encode($res);
            Session::set('userinfo',$ress);
            $data['msg']='0';
        }else{
            $data['msg']='1';
        }
        echo json_encode($data);
        
    }

    public function Out()
    {
        Session::delete("userinfo");
        $this->success('欢迎下次光临','index/index','',1);
    }
}