<?php
/**
 * 站点about页面信息设置
 * 数据表about
 * @author Cryin
 * @since 2016-07-28
 */
class About_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAboutInfo($id=1){
		$this->load->database();
		$sql="select * from about where id = {$id}";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function updateAboutInfo($id=1){
		$this->load->database();
		$data = array(
			    'title'=>$this->security->xss_clean($this->input->post('title')),
			    'tag'=>$this->input->post('tag',TRUE),
                'content'=>$this->security->xss_clean($this->input->post('content')),
		);
		$this->db->where('id', $id);
		$this->db->update('about', $data);
	}
	public function getMsboard(){
		$this->load->database();
		$sql="select * from mesboard";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
}