<?php
namespace app\index\controller;
use think\Controller;
//use app\index\controller\Base;

class Single  extends Controller
{
    public function single()
    {
    	
        return $this->fetch('single');
    }
}

