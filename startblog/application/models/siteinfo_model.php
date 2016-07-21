<?php
/**
 * 站点标题等设置
 * 数据表siteinfo
 * @author Cryin
 * @since 2016-07-21
 */
class Siteinfo_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getSiteInfo($id=1){
		$this->load->database();
		$sql="select * from siteinfo  where id = {$id}";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function updateSiteInfo($id=1){
		$this->load->database();
		$data = array(
                'title'=>$this->input->post('title'),
			    'keywords'=>$this->input->post('keywords'),
				'description'=>$this->input->post('description'),
		);
		$this->db->where('id', $id);
		$this->db->update('siteinfo', $data);
	}
}