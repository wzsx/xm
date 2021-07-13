<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
/**
 * 微信检查
 */
class WxcheckController extends AdminBaseController{



    /**
     * 微信检查
     */
    public function index()
    {

        if(IS_POST){
            $data=I('post.');
            $wx=$data['wx'];
            $result = M('wxcheck')->getField('wx',true);
            $isin = in_array($wx,$result);
            if($isin){
                echo "<script>alert('微信号存在');window.history.go(-1)</script>";
            }else{
                echo "<script>alert('微信号不存在');window.history.go(-1)</script>";
                M('wxcheck')->data($data)->add();
            }

        }else{
            $this->display();
        }

    }



}