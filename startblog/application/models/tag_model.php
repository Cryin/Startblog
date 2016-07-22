<?php
/**
 * 标签模型类
 * 表tag
 * @author Cryin
 * @since 2017-07-19
 */
class Tag_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllTags(){
		$this->load->database();
		$sql="select * from tag";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagInfo(){
		$this->load->database();
		$sql="select tag.tag_name, article.tag_id, count(article.article_id) as article_num, tag.tag_button_type from article_tag as article join tag as tag where article.tag_id = tag.id group by tag.tag_name";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function getArticlesDuring($offset,$row){
		$this->load->database();
		$sql="select * from articles limit {$offset},{$row}";
		$data['data'] = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagByTagid($tag_id){
		$this->load->database();
		$sql="select * from tag  where id = {$tag_id}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagById($id){
		$this->load->database();
		$sql="select b.tag_name from article_tag as a join tag as b where a.tag_id = b.id and a.article_id = {$id}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagidOfArticle($article_id){
        $this->load->database();
        $sql="select a.tag_id from article_tag as a join tag as b where a.tag_id = b.id and a.article_id = {$article_id}";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }
    public function getTagDuring($offset,$row){
		$this->load->database();
		$sql="select * from tag order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
}