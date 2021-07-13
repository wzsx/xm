<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
/**
 * 病例管理
 */
class CaseController extends AdminBaseController{
    /**
     * 病例列表
     */
    public function index(){
        // 级别判断
        $id = $_SESSION['user']['id'];
        $isleader = M('users')->where('id='.$id)->getField('isleader');
        // 搜索
        // $where = '1 = 1 ';
        $keyword = isset($_GET['keyword']) ? htmlentities($_GET['keyword']) : '';
        $prefix = C('DB_PREFIX');


        if($isleader == 2){
        // page beg
        // 助理
            $where['uid'] = $id;

            if ($keyword) {
                $where = "{$prefix}case_jzx.name like '%{$keyword}%' and {$prefix}case_jzx.uid in ($id)";
            }

        } else if($id == 88) {
            if ($keyword) {
                $where = "{$prefix}case_jzx.name like '%{$keyword}%' ";
            }
        } else {
            //组长
            $uid = M('users')->where('id='.$id)->getField('id');
            $group_id = M('auth_group_access')->where('uid='.$uid)->getField('group_id');
            $where['pid'] = $group_id;
            if ($keyword) {
                $where = "{$prefix}case_jzx.name like '%{$keyword}%' and {$prefix}case_jzx.pid in ($group_id)";
            }


        }
        $p = isset($_GET['p']) ? intval($_GET['p']) : '1';
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = M('case_jzx')->where($where)->count();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('page', $page);
        // page end
        $data = M('case_jzx')->where($where)->order('time desc')->limit($offset.','.$pagesize)->select();
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
            $data['video_time'] = strtotime($data['video_time']);
            $data['fk_time'] = strtotime($data['fk_time']);
            $data['time'] = time();
            $result = M('case_jzx') ->add($data);
            if($result){
                // 操作成功
                $this->success('添加成功',U('Admin/Case/index'));
            }else{
                // 操作失败
                $this->error($error_word);
            }
        }else{
            $this->display();
        }
    }

    /**
     * 修改病例
     */
    public function edit_case(){
        $id = I('get.id');
        $data = M('case_jzx')->where('id='.$id)->find();
        $this->assign('data',$data);
        $this->display();
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
            $this->success('恭喜，删除成功！',U('Admin/Case/index'));
        } else {
            $this->error('参数错误！');
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
            array(NULL,NULL,NULL,姓名,年龄,性别,颈部肿胀,头身困重,情绪抑郁,大便干燥,胸勒胀痛,功能正常,畏寒肢冷,饭后腹胀,手术治疗,打嗝反酸,伴有钙化,形态规则,边界清晰,多梦易醒,夜尿频多,腰膝酸软,潮热盗汗,烦躁易怒,多发性结节,纵横比大于1,伴有血流信号,低回声结节,颈部肿胀疼痛,咽口异物感,囊实性,有痰,乏力,颈部肿胀,咽部异物感,口干咽疼,四肢不温,情志异常,脾虚虚弱,结节大小,回声性质,结节评级,血流供应,淋巴肿大,淋巴结结节,视频时间,视频大夫,视频原因,视频结果,反馈时间,反馈结果,NULL),
            );
        $data = array_merge($des,$data);//拼接数据
        create_xls($data);
    }
}