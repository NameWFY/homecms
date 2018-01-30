<?php
namespace app\index\controller;
header("content-type:text/html;charset=utf-8");
use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;
use app\index\controller\Base;


class Housing  extends Base
{





    public function show()
    {

    	$HouInfo = Db::table('housing')->select();
        foreach($HouInfo as $k=>$v){
           $HouInf = $this->landlord($v['adm_id']);
           $HouInfo[$k]['adm_id'] = $HouInf['lan_name'];
           $HouInfo[$k]['adm_phone'] = $HouInf['lan_phone'];
        }
    	return $this->fetch('show',['HouInfo'=>$HouInfo]);
    }


    public function landlord($adm_id)
    {   
        $info = Db::table('landlord')->where(['lan_id'=>$adm_id])->find();
        $ad['lan_name']=$info['lan_name'];
        $ad['lan_phone']=$info['lan_phone'];
        return $ad;
    }




    public function uplodeCon()
    {
    	$content = input('post.content');
    	$hou_id = input('post.hou_id');
    	$PostReturn = Db::table('housing')->where(['hou_id'=>$hou_id])->update(['hou_content'=>$content]);
    	if($PostReturn){
    		$data['mgs']='1';
    	}else{
    		$data['mgs']='2';
    	}
    	echo json_encode($data);
    }


    public function deleteZi()
    {
        $hou_id = input('post.hou_id');
        $PostReturn = Db::table('housing')->where(['hou_id'=>$hou_id])->delete();
        if($PostReturn){
            $data['mgs']='1';
        }else{
            $data['mgs']='2';
        }
        echo json_encode($data);
    }




    public function OKZI()
    {
       $hou_id = input('post.hou_id'); 
       $hou_type = input('post.hou_type'); 
       $PostReturn = Db::table('housing')->where(['hou_id'=>$hou_id])->update(['hou_type'=>$hou_type]);
        if($PostReturn){
            $data['mgs']='1';
        }else{
            $data['mgs']='2';
        }
        echo json_encode($data);
    }




    public function updateZI()
    {
        $hou_id = input('get.hou_id'); 
        $DbFind = Db::table('housing')->where(['hou_id'=>$hou_id])->find();
        return $this->fetch('updateZI',['DbFind'=>$DbFind]);
    }




    public function updateZIdo()
    {
        $hou_id = input('get.hou_id');
        $userInfo = Session::get("userInfo");
        $NewuserInfo = unserialize($userInfo);
        $info = input('post.');
        $info['adm_id']= self::userInfo()['adm_id'];

        $HouInfo = Db::table('housing')->where(['hou_id'=>$hou_id])->update($info);
        if($HouInfo){
              $this->success('修改成功',url('index/Housing/show')); 
        }else{
              $this->success('修改失败',url('index/Housing/show')); 
        }
    }   


}
