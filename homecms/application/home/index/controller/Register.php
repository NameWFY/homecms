<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Register extends Controller
{
    public function register()
    {
    	
        return $this->fetch('register');
    }
    public function register_do(){
    	$lan_name=input('post.lan_name');
    	$lan_pwd=md5(input('post.lan_pwd'));
    	$lan_phone=input('post.lan_phone');
    	//echo $lan_phone;
    	$lan_email=input('post.lan_email');
    	$lan_type='0';
    	$lan_time=time();
    	$data=[];
    	$data['lan_name']=$lan_name;
    	$data['lan_phone']=$lan_phone;
    	$data['lan_pwd']=$lan_pwd;
    	$data['lan_email']=$lan_email;
    	$data['lan_type']=$lan_type;
    	$data['lan_time']=$lan_time;
    	$select=db::table("landlord")->where(array('lan_name'=>$lan_name))->find();
    	$name=$select['lan_name'];
    	
    	if($name==$lan_name){

    		$this->success("用户名已存在",'register/register','',0);
    	}else{
    		$res=db::table('landlord')->insert($data);
	    	if($res){
	    		$this->success("注册成功",'login/login','',0);
	    	}else{
	    		$this->success("注册失败",'register/register','',0);
	    	}
    	}
    	
    	


    }
}

