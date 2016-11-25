<?php
/**
 * 分类模型
 * 数据表表category
 * @author Cryin
 * @since 2017-07-18
 */
class Category_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}


	public function getAllCategory(){
		$this->load->database();
		$sql="select * from category order by category_order";
		$data_tmp =$this->db->query($sql)->result_array();
		foreach ($data_tmp as $value) {
			$category_id = $value['id'];
			$data["$category_id"]['id'] = $value['id'];
			$data["$category_id"]['category'] = $value['category'];
			$data["$category_id"]['category_order'] = $value['category_order'];
		}
		return $data;
	}


	public function getAllArticles($category_id){
		$this->load->database();
		$sql="select * from articles where category={$category_id}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getCategory($category_id){
		$this->load->database();
		$sql="select * from category where id={$category_id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getCategoryDuring($offset,$row){
		$this->load->database();
		$sql="select * from category order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}