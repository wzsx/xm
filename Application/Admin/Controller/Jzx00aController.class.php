<?php
namespace Admin\Controller;
use Vendor\Tree;
use Common\Controller\AdminBaseController;
/**
 * 甲状腺病例管理
 */
class JzxController extends AdminBaseController{



    /**
     * 病例列表
     */
    public function index(){

        // 级别判断
        $id = $_SESSION['user']['id'];
        $isleader = M('users')->where('id='.$id)->getField('isleader');
        // 搜索
        $keyword = isset($_GET['keyword']) ? htmlentities($_GET['keyword']) : '';
        $xiadan = isset($_GET['xiadan']) ? htmlentities($_GET['xiadan']) : '';
        $sid = isset($_GET['sid']) ? $_GET['sid'] : '';
        $prefix = C('DB_PREFIX');
        if($isleader == 2){
        // page beg
        // 助理
      
            $where = '1 = 1 ';
            if ($keyword) {
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%' and {$prefix}case_jzx.uid in ($id)";
            }
            if ($sid) {
                $where .= "and {$prefix}case_jzx.pid in ($sid) and {$prefix}case_jzx.uid in ($id)";
            }
            if ($xiadan) {
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%' and {$prefix}case_jzx.uid in ($id)";
            }
// var_dump($where);die;
        } else if($id == 88) {
            //超级
            $where = '1 = 1 ';
            if ($keyword) {
                $where .= "and {$prefix}case_jzx.name like '%{$keyword}%' ";
            }
            if ($sid) {

                $where .= "and {$prefix}case_jzx.pid in ($sid) ";
            }

            if ($xiadan) {
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%' ";
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
                $where .= "and {$prefix}case_jzx.pid in ($sid) ";
            }
            
            if ($xiadan) {
                $where = '1 = 1 ';
                $where .= "and {$prefix}case_jzx.write_name like '%{$xiadan}%' ";
            }


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
// var_dump($map);die;
        $data = M('case_jzx')->where($map)->order('time desc')->limit($offset.','.$pagesize)->select();


        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 病例列表
     */
    public function add_case(){
        if(IS_POST){
            $data=I('post.');
            $data['pid'] = M('auth_group_access')->where('uid='.$_SESSION['user']['id'])->getField('group_id');
            $data['uid'] = $_SESSION['user']['id'];
            $data['pro_info'] = $data['pro_info'];
            $data['adderss'] = $data['adderss'];
            $data['content'] = $data['content'];
            $data['time'] = time();
            $result = M('case_jzx') ->add($data);
            if($result){
                // 操作成功
                $this->success('添加成功',U('Admin/Jzx/index'));
            }else{
                // 操作失败
                $this->error($error_word);
            }
        }else{

            $this->assign('data_reason',$data_reason);

            $this->display();
        }
    }

    /**
     * 修改病例
     */
    public function edit_case(){


        if(IS_POST){
            $data=I('post.');
            $id=$data['id'];
            // var_dump($id);die;
            if(M('case_jzx')->where('id='.$id)->save($data)){
                // 操作成功
                $this->success('编辑成功',U('Admin/Jzx/index'));

            }else{
                // 操作失败
                $this->error($error_word);

            }


        }else{
                $id = I('get.id');
                $data = M('case_jzx')->where('id='.$id)->find();
                $this->assign('data',$data);
                $this->display();
        }

    }


    /**
     * 删除病例
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
        // 级别判断
        $id = $_SESSION['user']['id'];
        $isleader = M('users')->where('id='.$id)->getField('isleader');
        
        if($isleader == 2){
        // page beg
            $where['uid'] = $id;
        } else if($id == 88) {

        } else {
            $uid = M('users')->where('id='.$id)->getField('id');
            $group_id = M('auth_group_access')->where('uid='.$uid)->getField('group_id');
            $where['pid'] = $group_id;

        }
        $this->assign('page', $page);
        // page end
        $data = M('case_jzx')->where($where)->order('time desc')->select();
        $des = array(
            array(NULL,NULL,NULL,姓名,年龄,性别,颈部肿胀疼痛,颈部憋闷,头身困重,情绪抑郁,胸勒胀痛,功能正常,畏寒肢冷,饭后腹胀,手术治疗,打嗝反酸,伴有钙化,形态规则,大便干燥,月经异常,边界清晰,多梦易醒,夜尿频多,腰膝酸软,潮热盗汗,烦躁易怒,多发性结节,纵横比大于1,伴有血流信号,低回声结节,咽口异物感,囊实性,有痰,乏力,颈部肿胀,咽部异物,四肢不温,情志异常,脾虚虚弱,结节大小,回声性质,结节评级,血流供应,淋巴肿大,淋巴结结节,视频时间,视频大夫,视频原因,视频结果,反馈结果,反馈时间),
            );
        $data = array_merge($des,$data);//拼接数据
        create_xls($data);
    }


}