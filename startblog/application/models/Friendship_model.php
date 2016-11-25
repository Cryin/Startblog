<?php
/**
 * 友情链接
 * 数据表表friendship
 * @author Cryin
 * @since 2016-11-11
 */
class Friendship_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getAllFriend(){
		$this->load->database();
		$sql="select * from friendship order by link_order";
		$data_tmp =$this->db->query($sql)->result_array();
		foreach ($data_tmp as $value) {
			$friendship_id = $value['id'];
			$data["$friendship_id"]['id'] = $value['id'];
			$data["$friendship_id"]['link'] = $value['link'];
			$data["$friendship_id"]['link_name'] = $value['link_name'];
			$data["$friendship_id"]['link_order'] = $value['link_order'];
		}
		return $data;
	}

	public function getFriendship($id){
		$this->load->database();
		$sql="select * from friendship where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getFriendshipDuring($offset,$row){
		$this->load->database();
		$sql="select * from friendship order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}