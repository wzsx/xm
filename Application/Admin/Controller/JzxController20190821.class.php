<?php
namespace Admin\Controller;
use Vendor\Tree;
use Common\Controller\AdminBaseController;
/**
 * 订单管理
 */
class JzxController extends AdminBaseController{



    /**
     * 订单列表
     */
    public function index(){
        // 级别判断
        $id = $_SESSION['user']['id'];
        $isleader = M('users')->where('id='.$id)->getField('isleader');
        // 搜索
        $keyword = isset($_GET['keyword']) ? trim(htmlentities($_GET['keyword'])) : '';
        $xiadan = isset($_GET['xiadan']) ? trim(htmlentities($_GET['xiadan'])) : '';
        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';
        $prefix = C('DB_PREFIX');
        if($isleader == 2 & $id != 123){
            // 助理
            $where['uid'] = $id;
            if ($keyword) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%' and {$prefix}case_jzx.uid in ($id)";
            }
            if ($sid) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.pid in ($sid) and {$prefix}case_jzx.uid in ($id)";
            }
            if ($xiadan) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%' and {$prefix}case_jzx.uid in ($id)";
            }

            //获取时间日期
            $date_start = isset($_GET['date_start']) ? $_GET['date_start'] : '';
            $date_end = isset($_GET['date_end']) ? $_GET['date_end'] : '';
            if($date_start==$date_end){
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_start))));
            } else{
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_end))));
            }
            if($date_start){
                $map['_complex'] = $where;
                $map['time'] = $a_date;
            }else{
                $map = $where;
            }

        } else if($id == 88  || $id==123) {
            $where = '1 = 1 ';
            if ($keyword) {
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%'";
            }
            if ($sid) {
                $where .= "and {$prefix}case_jzx.pid in ($sid)";
            }
            if ($xiadan) {
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%'";
            }
            //获取时间日期
            $date_start = isset($_GET['date_start']) ? $_GET['date_start'] : '';
            $date_end = isset($_GET['date_end']) ? $_GET['date_end'] : '';
            if($date_start==$date_end){
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_start))));
            } else{
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_end))));
            }
            if($date_start){
                $map['_complex'] = $where;
                $map['time'] = $a_date;
            }else{
                $map = $where;
            }
        } else {
            //组长
            $uid = M('users')->where('id='.$id)->getField('id');
            $group_id = M('auth_group_access')->where('uid='.$uid)->getField('group_id');
            $where['pid'] = $group_id;

            if ($keyword) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%' and {$prefix}case_jzx.pid in ($group_id)";
            }
            if ($sid) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.pid in ($sid) and {$prefix}case_jzx.pid in ($group_id)";
            }
            if ($xiadan) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%' and {$prefix}case_jzx.pid in ($group_id)";
            }

            //获取时间日期
            $date_start = isset($_GET['date_start']) ? $_GET['date_start'] : '';
            $date_end = isset($_GET['date_end']) ? $_GET['date_end'] : '';
            if($date_start==$date_end){
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_start))));
            } else{
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_end))));
            }
            if($date_start){
                $map['_complex'] = $where;
                $map['time'] = $a_date;
            }else{
                $map = $where;
            }


        }




        //获取分类
        $category = M('auth_group')->field('id,title')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$title</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, $sid);
        $this->assign('category', $category);
        $p = isset($_GET['p']) ? intval($_GET['p']) : '1';
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = M('case_jzx')->where($map)->count();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('page', $page);
        // page end
        $data = M('case_jzx')->where($map)->order('time desc')->limit($offset.','.$pagesize)->select();
        foreach ($data as $key => $value) {
            $data[$key]['province'] = M('tree')->where("id=".$value['province'])->getField('name');
            $data[$key]['city'] = M('tree')->where("id=".$value['city'])->getField('name');;
            $data[$key]['town'] = M('tree')->where("id=".$value['town'])->getField('name');;
        }

        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 订单列表
     */
    public function add_case(){
        if(IS_POST){
            $data=I('post.');
            $data['pid'] = M('auth_group_access')->where('uid='.$_SESSION['user']['id'])->getField('group_id');
            $data['uid'] = $_SESSION['user']['id'];
            $data['pro_info'] = trim($data['pro_info']);
            $data['address'] = trim($data['address']);
            $data['content'] = trim($data['content']);
            $data['time'] = time();
            $result = M('case_jzx') ->add($data);

            if($result){

                // 操作成功
                addlog('添加订单ID：' . $id);
                $this->success('添加成功',U('Admin/Jzx/index'));
            }else{
                // 操作失败
                $this->error($error_word);
            }
        }else{
            $province = M('Tree')->where ( array('pid'=>1) )->select ();
            $this->assign('province',$province);
            $this->display();
        }
    }



    /**
     * 省市县信息
     */
    public function getRegion(){

        $Region=M("Tree");
        $map['pid']=$_REQUEST["pid"];
        $map['type']=$_REQUEST["type"];
        $list=$Region->where($map)->select();
        echo json_encode($list);
    }

    /**
     * 修改订单
     */
    public function edit_case(){


        if(IS_POST){
            $data=I('post.');
            $id=$data['id'];
            if(M('case_jzx')->where('id='.$id)->save($data)){
                 addlog('编辑订单ID：' . $id);
                // 操作成功
                $this->success('编辑成功',U('Admin/Jzx/index'));

            }else{
                // 操作失败
                $this->error($error_word);

            }

        }else{


                $id = I('get.id');
                $data = M('case_jzx')->where('id='.$id)->find();
                $data['province'] = M('tree')->where("id=".$data['province'])->getField('name');
                $data['city'] = M('tree')->where("id=".$data['city'])->getField('name');
                $data['town'] = M('tree')->where("id=".$data['town'])->getField('name');

                $province = M('Tree')->where ( array('pid'=>1) )->select ();
                $this->assign('province',$province);

                $this->assign('data',$data);
                $this->display();
        }

    }


    /**
     * 删除订单
     */
    public function delete_case(){
        $ids = isset($_REQUEST['ids']) ? $_REQUEST['ids'] : false;
        if (is_array($ids)) {
            if (!$ids) {
                $this->error('参数错误！');
                $uids = implode(',', $ids);
            }
        }

        $map['id'] = array('in', $ids);
        if (M('case_jzx')->where($map)->delete()) {
            addlog('删除订单ID：' . $id);
            $this->success('恭喜，删除成功！',U('Admin/Jzx/index'));
        } else {
            $this->error('参数错误！');
        }
    }

    /**
     * 添加快递信息
     */
    public function add_kd(){

        if(IS_POST){
            $data=I('post.');
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : false;
            $data['kd_gs']=$data['kd_gs'];
            $data['kd_num']=$data['kd_num'];
            if(M('case_jzx')->where('id='.$id)->save($data)){
                addlog('添加订单ID：' . $id . '快递信息');
                $this->success('恭喜，添加成功！',U('Admin/Jzx/index'));
            }else{
                $this->error('参数错误！');
            }

        }else{
            $this->display();
        }



    }

    /**
     * 导出
     */
    public function xls(){



        // 权限级别判断
        $id = $_SESSION['user']['id'];
        $isleader = M('users')->where('id='.$id)->getField('isleader');
        if($isleader == 1){
            $where['uid'] = $id;

            $data = $this->select_data($id);
            foreach($data as $key=>$value){
                unset($data[$key]['id']);
                unset($data[$key]['pid']);
                unset($data[$key]['uid']);
                unset($data[$key]['up_time']);
                unset($data[$key]['is_del']);
                $data[$key]['time']=date('Y-m-d H:i:s', $data[$key]['time']);
                $data[$key]['province'] = M('tree')->where("id=".$value['province'])->getField('name');
                $data[$key]['city'] = M('tree')->where("id=".$value['city'])->getField('name');
                $data[$key]['town'] = M('tree')->where("id=".$value['town'])->getField('name');
                if($data[$key]['sex'] = "1"){
                    $data[$key]['sex'] = "男";
                }else{
                    $data[$key]['sex'] = "女";
                }

                if($data[$key]['order_type'] = "1"){
                    $data[$key]['order_type'] = "首单";
                }else if($data[$key]['order_type'] = "2"){
                    $data[$key]['order_type'] = "复购1";
                }else if($data[$key]['order_type'] = "3"){
                    $data[$key]['order_type'] = "复购2";
                }else if($data[$key]['order_type'] = "4"){
                    $data[$key]['order_type'] = "复购3";
                }else if($data[$key]['order_type'] = "5"){
                    $data[$key]['order_type'] = "复购4";
                }else if($data[$key]['order_type'] = "6"){
                    $data[$key]['order_type'] = "复购5";
                }
                
                if($data[$key]['pay_order'] = "1"){
                    $data[$key]['pay_order'] = "微信";
                }else if($data[$key]['pay_order'] = "2"){
                    $data[$key]['pay_order'] = "支付宝";
                }else if($data[$key]['pay_order'] = "3"){
                    $data[$key]['pay_order'] = "银行卡";
                }else if($data[$key]['pay_order'] = "3"){
                    $data[$key]['pay_order'] = "现金";
                }
            }

            // 对数组排序赋值
            // foreach ($data as $key => $value) {
            //     $data_new[$key]['name']=$value['name'];
            //     $data_new[$key]['phone']=$value['phone'];
            //     if($data[$key]['sex'] = "1"){
            //         $data[$key]['sex'] = "男";
            //     }else{
            //         $data[$key]['sex'] = "女";
            //     }
            //     $data_new[$key]['pro_info']=$value['pro_info'];
            //     $data_new[$key]['address']=$value['address'];
            //     $data_new[$key]['write_name']=$value['write_name'];
            //     $data[$key]['time']=date('Y-m-d H:i:s', $data[$key]['time']);

            // }


            $des = array(
                array(收件人,电话,性别,产品信息,收货地址,录单人,录单时间,快递公司,快递单号,备注,省份,地区,县镇,订单类型,总额,预付,代收,支付方式),
                );
            $data = array_merge($des,$data);//拼接数据
            $time = date('YmdHis', time());
            // $filename= "订单2.xls";
            $filename = $time.".xls";

            create_xls($data,$filename);
        }else{
             echo "<script>alert('权限不够');window.history.go(-1)</script>";
        }


    }
    /**
     * 导出数据筛选
     */
    public function select_data($id)
    {
        $keyword = isset($_GET['keyword']) ? trim(htmlentities($_GET['keyword'])) : '';
        $xiadan = isset($_GET['xiadan']) ? trim(htmlentities($_GET['xiadan'])) : '';
        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';
        $prefix = C('DB_PREFIX');
        if($id == 88  || $id == 123) {
            $where = '1 = 1 ';
            if ($keyword) {
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%'";
            }
            if ($sid) {
                $where .= "and {$prefix}case_jzx.pid in ($sid)";
            }
            if ($xiadan) {
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%'";
            }
            //获取时间日期
            $date_start = isset($_GET['date_start']) ? $_GET['date_start'] : '';
            $date_end = isset($_GET['date_end']) ? $_GET['date_end'] : '';
            if($date_start==$date_end){
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_start))));
            } else{
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_end))));
            }
            if($date_start){
                $map['_complex'] = $where;
                $map['time'] = $a_date;
            }else{
                $map = $where;
            }
        } else {
            $uid = M('users')->where('id='.$id)->getField('id');
            $group_id = M('auth_group_access')->where('uid='.$uid)->getField('group_id');
            $where['pid'] = $group_id;
            if ($keyword) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%' and {$prefix}case_jzx.pid in ($group_id)";
            }
            if ($sid) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.pid in ($sid) and {$prefix}case_jzx.pid in ($group_id)";
            }
            if ($xiadan) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%' and {$prefix}case_jzx.pid in ($group_id)";
            }

            //获取时间日期
            $date_start = isset($_GET['date_start']) ? $_GET['date_start'] : '';
            $date_end = isset($_GET['date_end']) ? $_GET['date_end'] : '';
            if($date_start==$date_end){
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_start))));
            } else{
                $a_date = array('between',array(strtotime($date_start),strtotime('+1 day',strtotime($date_end))));
            }
            if($date_start){
                $map['_complex'] = $where;
                $map['time'] = $a_date;
            }else{
                $map = $where;
            }

        }




        $p = isset($_GET['p']) ? intval($_GET['p']) : '1';
        $pagesize = 100;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = M('case_jzx')->where($map)->count();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('page', $page);
        // page end
        return  $data = M('case_jzx')->where($map)->order('time desc')->limit($offset.','.$pagesize)->select();

    }





}