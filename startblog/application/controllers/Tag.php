<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tag extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
      parent::__construct ();
    
      $this->load->model('siteinfo_model');
      define ('LANG', $this->siteinfo_model->getLang());
      $this->lang->load('admin', LANG);
     }
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('tag_model');
		$tag_info = $this->tag_model->getTagInfo();
		foreach ($tag_info as $key => $value) {
			if($value['article_num']<=1){
				$button_size = 'btn-xs';
			}elseif($value['article_num']<=10){
				$button_size = 'btn-sm';
			}else{
				$button_size = 'btn-lg';
			}
			$data['data'][] =array(
				'tag_id' => $value['tag_id'],
				'tag_name' => $value['tag_name'],
				'tag_size' => $button_size,
				'tag_button_type' => $value['tag_button_type']
				);
		}

		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();

		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();

		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('','','active','');
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('tag_index', $data);
		$this->load->view('footer');
	}
	public function show($tag_id){
		$this->load->helper('url');
		$this->load->model('articles_model');
		$data['data'] = $this->articles_model->getArticlesTag($tag_id);
		$this->load->model('tag_model');
        $data['tag_name'] = $this->tag_model->getTagByTagid($tag_id);
		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('','','active','');
		
		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();

		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('tag_show',$data);
		$this->load->view('footer');
	}
}
