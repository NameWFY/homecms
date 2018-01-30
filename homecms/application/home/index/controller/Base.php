<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Base  extends controller
{
     public function __construct()
    {
    	parent::__construct();
    	$this->fei();
    }

    public function fei()
    {
    	if(empty(Session::get('userInfo'))){
    		if(!empty(Cookie::get('userInfo'))){
    			Session::set('userInfo',Cookie::get('userInfo'));
    		}	
    	}
    	if(empty(Session::get('userInfo'))){
    		$this->error('非法登录，请重新登录',url('index\Login\index'));
    	}
    }

    static function userInfo()
    {
        $userInfo = Session::get("userInfo");
        $NewuserInfo = unserialize($userInfo);
        return $NewuserInfo;
    }
}