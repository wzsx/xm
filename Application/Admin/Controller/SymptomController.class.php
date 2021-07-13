<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
/**
 * 病例管理
 */
class  SymptomController extends AdminBaseController{

	// --------------检查选项部分
    /**
     * 症状分配列表
     */
    public function index(){
        $data=M('doctor_group')->select();
        $assign=array(
            'data'=>$data
            );
        $this->assign($assign);
        $this->display();

    }

    /**
     * 添加问诊症状
     */
    public function add_symptoms(){
        $data=I('post.');
        $symptoms_name = [];
		$group_name = M('symptoms')->select();
		foreach ($group_name as $key => $value) {
		 	$group_name[]=$value['title'];
		}
		//判断症状是否存在
		if(in_array($data['title'], $group_name)){
			$this->error('添加失败，症状已经存在');
		} else {
			$result = M('symptoms')->add($data);
		    if ($result) {
		        $this->success('添加成功',U('Admin/Symptom/index'));
		    }else{
		        $this->error('添加失败');
		    }
		}

    }

    /**
     * 问诊症状分配
     */
    public function symptoms_assignment(){
        if(IS_POST){
            $data=I('post.');
            $id=I('get.id');

            $data_save['symptoms_id'] = implode(",", $data['group_ids']);
            $data_save['tcm_id'] = implode(",", $data['tcm_ids']);
            $data_save['western_id'] = implode(",", $data['western_ids']);
            $data_save['doctors_id'] = implode(",", $data['doctors_ids']);
            $data_save['reason_id'] = implode(",", $data['reason_ids']);
            $result = M('symptoms_group')->where('doc_gro_id='.$id)->save($data_save);

            if($result){
                // 操作成功
                $this->success('编辑成功',U('Admin/Symptom/index'));
            }else{
                // 操作失败
                $this->error('编辑失败',U('Admin/Symptom/index'));
            }
        }else{
            $id=I('get.id',0,'intval');
            // 优化查询方式20190314
            $symptoms_data=M('symptoms_group')->where(array('doc_gro_id'=>$id))->find();
			$symptoms_name = M('doctor_group')->where(array('id'=>$symptoms_data['doc_gro_id']))->find();



            // 全部问诊症状
            $data=D('symptoms')->select();
            //全部中医症状
            $data_tcm=D('symptoms_tcm')->select();
            //全部西医症状
            $data_western=D('symptoms_western')->select();
            //全部医生
            $data_doctors=D('doctors')->select();
            //全部视频原因
            $data_reason=D('video_reason')->select();

            $this->assign('data',$data);
            $this->assign('symptoms_data',$symptoms_data);
            $this->assign('data_tcm',$data_tcm);
            $this->assign('data_western',$data_western);
            $this->assign('data_doctors',$data_doctors);
            $this->assign('data_reason',$data_reason);
            $this->assign('symptoms_name',$symptoms_name);
            $this->display();
        }
    }
    // --------------中医症状部分
    /**
     * 添加中医症状
     */
    public function add_symptoms_tcm(){
        $data=I('post.');
        $symptoms_name = [];
        $group_name = M('symptoms_tcm')->select();
        foreach ($group_name as $key => $value) {
            $group_name[]=$value['title'];
        }
        //判断症状是否存在
        if(in_array($data['title'], $group_name)){
            $this->error('添加失败，症状已经存在');
        } else {
            $result = M('symptoms_tcm')->add($data);
            if ($result) {
                $this->success('添加成功',U('Admin/Symptom/index'));
            }else{
                $this->error('添加失败');
            }
        }

    }

    // --------------西医症状部分
    /**
     * 添加西医症状
     */
    public function add_symptoms_western(){
        $data=I('post.');
        $symptoms_name = [];
        $group_name = M('symptoms_western')->select();
        foreach ($group_name as $key => $value) {
            $group_name[]=$value['title'];
        }
        //判断症状是否存在
        if(in_array($data['title'], $group_name)){
            $this->error('添加失败，症状已经存在');
        } else {
            $result = M('symptoms_western')->add($data);
            if ($result) {
                $this->success('添加成功',U('Admin/Symptom/index'));
            }else{
                $this->error('添加失败');
            }
        }

    }

    /**
     * 添加视频问诊医生
     */
    public function add_video_doc(){
        $data=I('post.');
        $symptoms_name = [];
        $group_name = M('doctors')->select();
        foreach ($group_name as $key => $value) {
            $group_name[]=$value['title'];
        }
        //判断症状是否存在
        if(in_array($data['title'], $group_name)){
            $this->error('添加失败，医生已经存在');
        } else {
            $result = M('doctors')->add($data);
            if ($result) {
                $this->success('添加成功',U('Admin/Symptom/index'));
            }else{
                $this->error('添加失败');
            }
        }

    }

    /**
     * 添加视频原因
     */
    public function add_video_reason(){
        $data=I('post.');
        $symptoms_name = [];
        $group_name = M('video_reason')->select();
        foreach ($group_name as $key => $value) {
            $group_name[]=$value['title'];
        }
        //判断原因是否存在
        if(in_array($data['title'], $group_name)){
            $this->error('添加失败，项目已经存在');
        } else {
            $result = M('video_reason')->add($data);
            if ($result) {
                $this->success('添加成功',U('Admin/Symptom/index'));
            }else{
                $this->error('添加失败');
            }
        }

    }









	// --------------医生部分
    /**
     * 医生科室列表
     */
    public function doctor_assignment_list(){
        $data=M('doctor_group')->select();
        $assign=array(
            'data'=>$data
            );
        $this->assign($assign);
        $this->display();
    }
    /**
     * 添加科室
     * 创建医生分组数据
     */
    public function add_assignment(){
        $data=I('post.');
        $group_name_title = [];
		$group_name = M('doctor_group')->select();
		foreach ($group_name as $key => $value) {
		 	$group_name_title[]=$value['title'];
		}
		//判断分科是否存在
		if(in_array($data['title'], $group_name_title)){
			$this->error('添加失败，分科已经存在');
		} else {
			$result = M('doctor_group')->add($data);

		    if ($result) {
		    	$data['doc_gro_id'] = $result;
		    	if(M('symptoms_group')->add($data)){
		    		$this->success('添加成功',U('Admin/Symptom/doctor_assignment_list'));
		    	}
		    }else{
		        $this->error('添加失败');
		    }
		}

    }
    /**
     * 医生分配
     */
    public function doctor_assignment(){
        if(IS_POST){
            $data=I('post.');
            $id=I('get.id');
            $data['doctor_id'] =$data['group_ids'];
            $data['doctor_id'] = implode(",", $data['doctor_id']);

            $result = M('doctor_group')->where('id='.$id)->setField('doctor_id',$data['doctor_id']);

            if($result){
                // 操作成功
                $this->success('编辑成功',U('Admin/Symptom/doctor_assignment_list'));
            }else{
                // 操作失败
                $this->error('编辑失败',U('Admin/Symptom/doctor_assignment_list'));
            }
        }else{
            $id=I('get.id',0,'intval');
            $doctor_data=M('doctor_group')->where(array('id'=>$id))->find();
            // 全部医生
            $data=D('doctors')->select();
            $this->assign('data',$data);
            $this->assign('doctor_data',$doctor_data);
            $this->display();
        }
    }
}